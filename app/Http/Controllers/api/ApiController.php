<?php

namespace App\Http\Controllers\api;


use Illuminate\Http\Request;
use DB;
use Validator;
use Session;
use Carbon\Carbon;
use Cache;
use Alaouy\Youtube\Facades\Youtube;


use Pusher\Pusher;
use App\Message;



class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {

        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);

    }


    public function modalNotice()
    {



        $app_seating = DB::table('app_seating')
            ->select('five_minite_modal_note','one_hour_modal_note')
            ->where('app_setting_id',1)->first();
        $data['five_minite']=$app_seating->five_minite_modal_note;
        $data['one_hour']=$app_seating->one_hour_modal_note;

        return response()->json($data);

    }

    public function homeLoginCheck(Request $request)
    {


        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('users')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            $data['success']="ok";
            $data['user_id']=$result->id;
        } else {
            $data['error']="ok";
        }


        return response()->json($data);

    }



    public function homeProgramList()
    {



        $homecurrent_program=DB::table('programs')
            ->select('program_name','program_details','programs.id as program_id','program_image')
            ->join('schedules','schedules.program_id','=','programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))
            ->where('start_time', '>=', date('h:i'))
            ->orderBy('start_time','asc')->limit(2)->get();
            $data=array();
        //print_r($homecurrent_program);exit();
        if($homecurrent_program){
            $count=0;
            foreach($homecurrent_program as $program){
                if($count==0){
                    $data['nextProgramTitle']=$program->program_name;
                    $data['nextProgramImage']=$program->program_image;
                    $data['nextProgramDeatail']=$program->program_details;

                    $data['nextProgamProgram_id']=$program->program_id;




                    $count++;

                } else {
                    $data['upcommingProgramDeatail']=$program->program_details;

                    $data['upcommingProgamProgram_id']=$program->program_id;

                    $data['upcommingProgramTitle']=$program->program_name;
                    $data['upcommingProgramImage']=$program->program_image;
                }


            }
        } else {
            return response()->json(['success'=>'There are no data ']);

        }

        return response()->json($data);

    }


    public function teams()
    {



        $teams=DB::table('members')
            ->select('*')
            ->orderBy('member_id','DESC')->get();


        return response()->json($teams);

    }
    public function programList()
    {



        $current_program=   Cache::remember('programs', 1440, function() {
            return   $current_program = DB::table('programs')
                ->select('program_image','program_details','id','program_name')
                ->orderBy('programs.id','DESC')->get();
        });

        return response()->json($current_program);

    }


    public function today_schedule()
    {


        $today_programs=   Cache::remember('today_schedule', 1440, function() {
            return  $today_programs=DB::table('programs')
                ->select('program_name','program_details','schedule_date','programs.id as program_id','schedules.id','start_time','program_image')
                ->join('schedules','schedules.program_id','=','programs.id')
                ->whereDate('schedule_date', '=', date('Y-m-d'))
                ->orderBy('start_time','desc')->get();
        });

        $schedule_array=array();
        foreach($today_programs as $key=>$program){

            $schedule_array[$key]['program_id']=$program->program_id;

            $schedule_array[$key]['program_details']=$program->program_details;
            $schedule_array[$key]['program_image']=$program->program_image;
            $schedule_array[$key]['program_name']=$program->program_name;
            $schedule_array[$key]['schedule_date']=date('d-m-Y',strtotime($program->schedule_date));
            $schedule_array[$key]['start_time']=date('H:i',strtotime($program->start_time));

        }

        return response()->json($schedule_array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function video()
    {


        $ip = \Request::ip();



        $details = @json_decode(file_get_contents(
            "http://www.geoplugin.net/json.gp?ip=" . $ip));

        if(!empty($details)){

            $county =$details->geoplugin_countryCode;

            if ($county == 'BD') {
                $api = get_bd_api();
            } else {
                $api= get_api();
            }
        } else {
            $api= get_api();
        }
                 


        return response()->json($api);

    }

    public function page($page_url){
        $about=DB::table('page')->select('page_content','page_name')->where('page_link',$page_url)->first();
        $data['pageTitle']=$about->page_name;
        $data['pageContent']=$about->page_content;

        return response()->json($data);
    }





    public   function singleProgram($id){

        $program=DB::table('programs')->select('youtube')->
        where('id','=',$id)->first();
        $playlist_Id=$program->youtube;


        $start_date = Carbon::now()->startOfWeek();
        $end_date = Carbon::now()->endOfWeek();


        $schedules= DB::table('schedules')
            ->select('day','schedules.start_time','schedules.end_time', 'schedule_date')
            ->join('programs', 'programs.id', '=', 'schedules.program_id')
            ->where('schedule_date', '>=', $start_date)
            ->where('schedule_date', '<=', $end_date)
            ->where('programs.id', '=', $id)
            ->orderBy('schedules.id','asc')
            ->orderBy('start_time','asc')
            ->get();
        $schedule_array=array();
        foreach($schedules as $key=>$schdule){

            $schedule_array[$key]['day']=$schdule->day;
            $schedule_array[$key]['schedule_date']=date('d-m-Y',strtotime($schdule->schedule_date));
            $schedule_array[$key]['start_time']=date('h:i a',strtotime($schdule->start_time));
            $schedule_array[$key]['end_time']=date('h:i a',strtotime($schdule->end_time));
        }

        $videoLists= Youtube::getPlaylistItemsByPlaylistId($playlist_Id);

        $final_array=array();


        foreach($videoLists['results'] as $key=>$videoList){
            if($videoList->snippet->thumbnails){
                if(!empty($videoList->snippet->thumbnails->default->url)){


                    $final_array[$key]['picture']=$videoList->snippet->thumbnails->high->url;
                    $final_array[$key]['title']=$videoList->snippet->title;
                    $final_array[$key]['videoId']=$videoList->snippet->resourceId->videoId;
                }
            }
        }



        $data['schedule']=$schedule_array;
        $data['plalists']=$final_array;


        return response()->json($data);
    }





    public function contact(){

        $data['google_map']=DB::table('app_seating')->select('google_map','contact_email','contact_phone','contact_address')->where('app_setting_id','=',1)->first();

    }


    public function contact_store(Request $request){



        $data['contact_name'] = $request->contact_name;
        $data['contact_email'] = $request->contact_email;
        $data['contact_subject'] = $request->contact_subject;
        $data['contact_message'] = $request->contact_message;
        $result = DB::table('contacts')->insert($data);
        if($result){
            echo "Your Message Send Successfully";

        } else {

            echo "Your Message does not Send Successfully";
        }


    }

    public function registration_store(Request $request){



        $data['name'] = $request->name;
        $data['email'] = $request->email;

        $email_exit=DB::table('users')->where('email',$request->email)->first();
        if($email_exit){
            return "This email allready exit";
        }
        $data['phone'] = $request->phone;
        $data['created_at'] = date('Y-m-d H:i:s');


        $data['password'] = md5($request->password);
        $result = DB::table('users')->insertGetId($data);
        if($result){
           return $result;

        } else {

            echo "Your Registration does not  Successfully";
        }


    }










    public  function blogs(){
        $blogs=DB::table('post')
            ->select('post_title','post_id','post_created_date','post_name','post_picture','post_description','post_view')
            ->get();
        return response()->json($blogs);


    }
    public  function single_blog($id){
        $comments=DB::table('comments')
            ->select('*')
            ->where('post_id',$id)
            ->orderBy('comment_id','desc')
            ->get();
        $comments_array=array();
        foreach($comments as $key=>$comment){
            $comments_array[$key]['comment_id']=$comment->comment_id;
            $comments_array[$key]['comments']=$comment->comments;
            $comments_array[$key]['name']=$comment->name;
            $subcomments=DB::table('sub_comments')
                ->select('*')
                ->where('comment_id',$comment->comment_id)
                ->orderBy('sub_commets_id','desc')
                ->get();
            if($subcomments){
                foreach($subcomments as $sub_key=>$subcomment){
                    $comments_array[$key]['sub_comment'][$sub_key]['sub_commets_id']=$subcomment->sub_commets_id;
                    $comments_array[$key]['sub_comment'][$sub_key]['name']=$subcomment->name;
                    $comments_array[$key]['sub_comment'][$sub_key]['comments']=$subcomment->comments;

                }
            }

        }



        return response()->json($comments_array);


    }



    public function mainComment(Request $request){

        $data['post_id']= $request->post_id;
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['comments']=$request->comments;

        $str = bad_comment();
        $badword=explode(" ",$str);
        $mystring = $data['comments'];
        $bad_comment=0;
// Test if string contains the word
        foreach ($badword as $row) {
            if (strpos($mystring, $row) !== false) {
                $bad_comment=1;
            }
        }
        if($bad_comment==0){
            $data['status']=1;
            $result= DB::table('comments')->insert($data);
            echo 'Thank You for your Comment';
        }else {
            $data['status']=0;
            $result= DB::table('comments')->insert($data);
            echo 'Thank You for your Comment';
        }

    }



    public function subComment(Request $request){

        $data['post_id']= $request->post_id;
        $data['comment_id']= $request->comment_id;
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['comments']=$request->comments;
        $data['created_date']=date("Y-m-d");
        $str = bad_comment();
        $badword=explode(" ",$str);
        $mystring = $data['comments'];
        $bad_comment=0;
// Test if string contains the word
        foreach ($badword as $row) {
            if (strpos($mystring, $row) !== false) {
                $bad_comment=1;
            }
        }
        if($bad_comment==0){
            $data['status']=1;
            $result= DB::table('sub_comments')->insert($data);
            echo 'Thank You for your Comment';
        }else {
            $data['status']=0;
            $result= DB::table('sub_comments')->insert($data);
            echo 'Thank You for your Comment';
        }

    }






    public function popularVideo(){


        $popular_video=DB::table('popular_video')->select('video_id')->orderBy('order_by','asc')->get();

        $final_array=array();

        foreach($popular_video as $key=>$videoList){

            $video = Youtube::getVideoInfo($videoList->video_id);
            if($video){
                $final_array[$key]['index']=$key;
                $final_array[$key]['picture']=$video->snippet->thumbnails->high->url;
                $final_array[$key]['title']=$video->snippet->title;

                $final_array[$key]['videoId']=$videoList->video_id;

            }






        }



        return response()->json($final_array);


    }



    public function playlistVideo(){


        $playlists = DB::table('playlists')->orderBy('order_by')->get();

        $final_array=array();

        foreach($playlists as $key=>$play){

            $play_list_row =  Youtube::getPlaylistById($play->playlist_link);

            //default
            //medium
            $final_array[$key]['picture']=$play_list_row->snippet->thumbnails->high->url;
            $final_array[$key]['title']=$play_list_row->snippet->title;
            $final_array[$key]['playlist']=$play->playlist_link;
        }



        return response()->json($final_array);


    }

    public function playlistVideoById($playlistId){


        $videoLists= Youtube::getPlaylistItemsByPlaylistId($playlistId);

        $final_array=array();


        foreach($videoLists['results'] as $key=>$videoList){
            if($videoList->snippet->thumbnails){
                if(!empty($videoList->snippet->thumbnails->default->url)){


                    $final_array[$key]['picture']=$videoList->snippet->thumbnails->high->url;
                    $final_array[$key]['title']=$videoList->snippet->title;
                    $final_array[$key]['videoId']=$videoList->snippet->resourceId->videoId;
                }
            }
        }



        return response()->json($final_array);


    }


    public function allVideos(){


        $apiKey = 'AIzaSyCp4SZRkiWxc5LfXap9MDqkCyej2OvSXRw';
        $channelId = 'UCv_oQ-sRZoJdEX4K5fQ6q6w';
        $resultsNumber = 50;

        $requestUrl = 'https://www.googleapis.com/youtube/v3/search?key=' . $apiKey . '&channelId=' . $channelId . '&part=snippet,id&maxResults=' . $resultsNumber .'&order=date';

        $response = file_get_contents($requestUrl);
        $videoLists= json_decode( $response, TRUE );
        $final_array=array();

        if($videoLists){
            foreach($videoLists['items'] as $key=>$videoList){
                $final_array[$key]['picture']=$videoList['snippet']['thumbnails']['high']['url'];

                $final_array[$key]['title']=$videoList['snippet']['title'];

                $final_array[$key]['videoId']=$videoList['id']['videoId'];
                $final_array[$key]['index']=$key;

            }
        }

        // echo '<pre>';
        // print_r($final_array);
        // exit();

        return response()->json($final_array);


    }

    public function store(Request $request){

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['remember_token'] = time().rand(1,5000);
        $ip = \Request::ip();
        $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test"));
        if($details){
            $data['country'] = $details->country_name;
            $data['city'] = $details->city;
            $data['continent_name'] = $details->continent_name;
            $data['region'] = $details->region;
        }
        $data['ip'] = $ip;
        $data['password'] = md5($request->password);
        $customer_email=  DB::table('users')->where('email',$request->email)->first();
        $customer_phone=  DB::table('users')->where('phone',$request->phone)->first();
        $row_data['email']='';
        $row_data['phone']='';

        if($customer_email){

            $row_data['email']='yes';
        }
        if($customer_phone){
            $row_data['phone']='yes';
        }

        $result = DB::table('users')->insertGetId($data);
        if ($result) {
            Session::put('id', $result);
            $row_data['id']=$result;
            // Session::put('name', $request->name);
            // Session::put('phone', $request->phone);
            // Session::put('email', $request->email);

        } else {

            $row_data['error']='no';
        }

        return response()->json($row_data);



    }

    public function pulls(){
        $today=date("Y-m-d");
        $pulls=DB::table('pulls')->select('pull_question','pull_id')->where('pull_status','=',1)->where('pull_expire_time', '>=', $today)->get();
        $data=array();
        $vote_percent=0;
        $ip =\Request::ip();
        foreach ($pulls as $pullKey=>$pull){
            $already_given_vote= DB::table('vote')->select('ip')->where('ip',$ip)->where('pull_id',$pull->pull_id)->count();

            $data[$pullKey]['pull_question']=$pull->pull_question;
            $data[$pullKey]['pull_id']=$pull->pull_id;
            $data[$pullKey]['already_given_vote']=$already_given_vote;



            $total_vote=DB::table('vote')->select('pull_id')->where('pull_id',$pull->pull_id)->count();
            $options=DB::table('pull_add_option')->select('option_name','pull_add_option_id')->where('pull_id',$pull->pull_id)->get();
            foreach($options as $optionKey=>$option){

                if($total_vote >0){
                    $total_single_option_vote= DB::table('vote')->where('option_id',$option->pull_add_option_id)->count();


                    $vote_percent=round(($total_single_option_vote*100)/$total_vote);
                }
                $data[$pullKey]['options'][$optionKey]['option_name']=$option->option_name;
                $data[$pullKey]['options'][$optionKey]['pull_add_option_id']=$option->pull_add_option_id;
                $data[$pullKey]['options'][$optionKey]['vote_percent']=$vote_percent;



            }




        }
        return response()->json($data);
    }

    public function pullStore($pull_id,$option_id){

        $ip =\Request::ip();
        $data['ip']=$ip;
        $data['pull_id']=$pull_id;
        $data['option_id']=$option_id;
        $data['create_date']=date('Y-m-d H:i:s');


        $already_given_vote= DB::table('vote')->where('pull_id',$pull_id)->where('ip',$ip)->first();
        if($already_given_vote){
            return "You Already Given Vote";
        } else{
            $insertGetId = DB::table('vote')->insertGetId($data);
            if($insertGetId){
                return "Your Vote Inserted successfully";
            } else {

                return "Something is wrong";
            }


        }

    }
    
    public  function storeChat(Request $request){

        $from =$request->from;
        $admin_user= DB::table('messages')->select('to')->where('from',$from)->first();
        if($admin_user){
            $admin_user=$admin_user->to;
        } else {
            $admin_user='';
        }
        $to = $admin_user;
        $message =$request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'mt1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
     public  function getChat($from_user){
        


        $chats=array();

        $chateData=DB::table('messages')
            ->select('message','from','id','created_at')
            ->where('messages.from',$from_user)
            ->orWhere('messages.to',$from_user)
            ->get();
        if($chateData){
            foreach ($chateData as $key=>$chat){
            //   $userName= DB::table('users')->select('name')->where('id',$chat->from)->first();
            //     if($userName){
            //         $chats[$key]['name']=$userName->name;
            //     } else {
            //         $adminName= DB::table('admin')->select('name')->where('admin_id',$chat->from)->first();
            //         $chats[$key]['name']=$adminName->name;
            //     }

                $chats[$key]['id']=$chat->id;
                 $chats[$key]['from']=$chat->from;

                //$chats[$key]['user_id']=$from_user;
                $chats[$key]['message']=$chat->message;
                $chats[$key]['created_at']=date('d M y, h:i a', strtotime($chat->created_at));

            }
        }


  return response()->json($chats);
    }
    public function appVersion(){
        $appVersion="5.2";
        return $appVersion;
    }


}
