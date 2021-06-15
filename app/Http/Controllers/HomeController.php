<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Session;
use Carbon\Carbon;
 use Alaouy\Youtube\Facades\Youtube;


use Pusher\Pusher;
use App\Message;

class HomeController extends Controller
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

    public function index()
    {

      //  Session::put('user_id',31);
        $current_program = DB::table('programs')
            ->select('schedules.id')
            ->join('schedules', 'schedules.program_id', '=', 'programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))
            ->where('start_time', '<=', date('H:i'))
            ->where('end_time', '>=', date('H:i'))
            ->orderBy('start_time', 'asc')->first();
        if($current_program) {
            $data['program_id'] = $current_program->id;
        } else {
            $data['program_id'] = 0;

        }



        $ip = \Request::ip();
        //$ip = '103.92.214.8';
        $data['api'] = get_api();
        //$details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test"));
        $details = @json_decode(file_get_contents(
            "http://www.geoplugin.net/json.gp?ip=" . $ip));


        if(!empty($details)){

            $county =$details->geoplugin_countryCode;

            if ($county == 'BD') {
                $data['api'] = get_bd_api();
            } else {
                $data['api'] = get_api();
            }
        }
        $start_time = date('h:i');
        $current_program = DB::table('programs')
            ->select('programs.youtube')
            ->join('schedules', 'schedules.program_id', '=', 'programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))
            ->where('start_time', '<=', date('h:i'))
            ->where('end_time', '>=', date('h:i'))
            ->orderBy('start_time', 'asc')->first();
        if($current_program) {
            $data['videoLists'] = Youtube::getPlaylistItemsByPlaylistId($current_program->youtube);
        }





        $data['five_minite_acctive']= 'only_home_page_modal_active';
        $data['one_hour_check_modal']= 'only_home_page_modal_active';
        return view('website.home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all_program()
    {

       $data['programs'] =DB::table('programs')
           ->select('program_image','id','program_name')
           ->orderBy('programs.id','DESC')->paginate(8);
        return view('website.all_program',$data);
     }
    public  function  ajax_program(Request $request){
        if($request->ajax())
        {
            $programs =DB::table('programs')
                ->select('program_image','id','program_name')
                ->orderBy('id','DESC')->paginate(4);
            $view = view('website.ajax_all_program',compact('programs'))->render();
            return response()->json(['html'=>$view]);
        }

    }

    public function today_schedule()
    {

        $data['today_programs']=DB::table('programs')
            ->select('program_name','schedule_date','program_id','start_time','program_image')
            ->join('schedules','schedules.program_id','=','programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))
            ->orderBy('start_time','desc')->get();
        return view('website.today_schedule',$data);
    }

    public   function single_program($id){

        $data['program']=DB::table('programs')->
            where('id','=',$id)->first();


        $start_date = Carbon::now()->startOfWeek();
        $end_date = Carbon::now()->endOfWeek();


        $data['schedules'] = DB::table('schedules')
            ->select('day','schedules.start_time','schedules.end_time', 'programs.program_name','schedule_date')
            ->join('programs', 'programs.id', '=', 'schedules.program_id')
            ->where('schedule_date', '>=', $start_date)
            ->where('schedule_date', '<=', $end_date)
            ->where('programs.id', '=', $id)
            ->orderBy('schedules.id','asc')
            ->orderBy('start_time','asc')
            ->get();


        return  view('website.single_program',$data);
      }
    public function about(){
        $data['about']=DB::table('page')->select('page_content')->where('page_link','about-us')->first();
       return view('website.about_us',$data);
     }
    public function documents(){
    $data['documents']=DB::table('document')->orderBy('document_id','desc')->get();
    return view('website.documents',$data);
}
    public function document_details($link){
        $data['document']=DB::table('document')->where('document_parmalink',$link)->first();
        return view('website.document_details',$data);
    }


    public function contact(){

         $data['google_map']=DB::table('app_seating')->select('google_map','contact_email','contact_phone','contact_address')->where('app_setting_id','=',1)->first();
        return view('website.contact',$data);
    }

    public function contact_store(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',

        ]);



            $data['contact_name'] = $request->name;
            $data['contact_email'] = $request->email;
            $data['contact_subject'] = $request->subject;
            $data['contact_message'] = $request->message;
            $result = DB::table('contacts')->insert($data);
            if ($result) {
                return redirect('/contact')->with('success', 'message receive successfully.');
            } else {
                return redirect('/contact')->with('error', 'No successfully.');
            }


    }






    public function programVideo(){

       //$play_list_row =  Youtube::getPlaylistById('PLUb--DPKJ7SR2OL-SorX9BM__5nBaZbdK');

        $data['popular_video']=DB::table('popular_video')->select('video_id')->orderBy('order_by','asc')->get();

        return view('website.program_video',$data);

    }

    public function ajax_program_video(){

     //   $data['videoLists'] = Youtube::listChannelVideos('UCv_oQ-sRZoJdEX4K5fQ6q6w', 12);
        $data['playlists'] = DB::table('playlists')->orderBy('order_by')->get();//Youtube::getPlaylistsByChannelId('UCv_oQ-sRZoJdEX4K5fQ6q6w');
        $apiKey = 'AIzaSyCp4SZRkiWxc5LfXap9MDqkCyej2OvSXRw';
        $channelId = 'UCv_oQ-sRZoJdEX4K5fQ6q6w';
        $resultsNumber = 1000;

        $requestUrl = 'https://www.googleapis.com/youtube/v3/search?key=' . $apiKey . '&channelId=' . $channelId . '&part=snippet,id&maxResults=' . $resultsNumber .'&order=date';

        $response = file_get_contents($requestUrl);
        $data['videoLists'] = json_decode( $response, TRUE );

         return view('website.ajax_program_video',$data);
    }
    public function youtubePlaylist($playlist){


        $data['videoLists'] = Youtube::getPlaylistItemsByPlaylistId($playlist);

        return view('website.youtubePlaylist',$data);

    }
    public function get_single_playlist_by_program_id($playlist){



       $data['videoLists'] = Youtube::getPlaylistItemsByPlaylistId($playlist);

      return view('website.ajax_single_program_playlist',$data);

    }




    public function page($url='privacy-policy'){
        $data['page']=DB::table('page')->select('*')->where('page_link',$url)->first();
        return view('website.page',$data);

    }

    public function modal_login(Request $request){


        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('users')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            $id = $result->id;
            $email = $result->email;
            $name = $result->name;
            Session::put('user_id', $id);
            Session::put('email', $email);
            Session::put('name', $name);
            Session::put('user_picture', $result->picture);


        } else {
            return response()->json(['error' => 'Your Email Or Password Invalid Try Again']);
        }
    }

    public  function home_page_program(){
        $data['programs']=DB::table('programs')->select('program_image','program_name','id')->paginate(8);
        return view('website.ajax_home_page_program',$data);

    }
    public  function election(){
       // $data['programs']=DB::table('programs')->select('program_image','program_name','id')->paginate(8);
        return view('website.election_api');

    }


    public  function about_us(){
        $data['about']=DB::table('page')->select('page_content')->where('page_link','about-us')->first();

        return view('website.ajax_about_us',$data);

    }

    public  function team(){

        $data['members']=DB::table('members')->get();
        $data['departments']=DB::table('departments')->orderBy('department_id', 'desc')->get();

        return view('website.teams',$data);

    }
    public function ajax_team($department_id){
        $data['members']=DB::table('members')
            ->where('department_id','=',$department_id)
            ->orderBy('department_id', 'desc')->get();
        return view('website.ajax_teams',$data);
    }
    public function memberDetail($department_id){
        $data['member']=DB::table('members')
            ->where('member_parmalink','=',$department_id)
            ->first();
          $data['members']=DB::table('members')->limit(4)->get();

        return view('website.teamDetail',$data);
    }



    public function ajaxFooterLoad(){

        return view('website.includes.ajaxFooterLoad');
    }

    public function ajax_post_category_call(){
        $data['category']=DB::table('category')
            ->select("category.*")
            ->get();
        $data['posts']=DB::table('post')
            ->orderBy('post_view','desc')
            ->paginate(5);



        return view('website.ajax_post_category_call',$data);
    }


    public  function todayScheduleAjaxData(){
        $data['today_programs']=DB::table('programs')
            ->select('program_name','program_image','programs.id','schedules.id as sid','program_details','start_time')
            ->join('schedules','schedules.program_id','=','programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))
            ->orderBy('start_time','ASC')->get();

        $current_program = DB::table('programs')
            ->select('schedules.id')
            ->join('schedules', 'schedules.program_id', '=', 'programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))
            ->where('start_time', '<=', date('H:i'))
            ->where('end_time', '>=', date('H:i'))
            ->orderBy('start_time', 'asc')->first();
        if($current_program) {
            $data['program_id'] = $current_program->id;
        } else {
            $data['program_id'] = 0;

        }
        return view('website.todayScheduleAjaxData',$data);

    }


    public  function blog(){
        $data['blogs']=DB::table('post')
            ->select('post_title','post_name','post_picture','post_description','post_view')
            ->paginate(12);
        return view('website.blog',$data);

    }
    public  function category($category_id){
        $data['blogs']=DB::table('post')
            ->select('post_title','post_name','post_picture','post_view','post_description')
            ->join('post_category_relation','post_category_relation.post_id','=','post.post_id')
            ->where('category_id','=',$category_id)
            ->paginate(12);

        return view('website.category',$data);

    }
    public  function post($post_name){
        $data['post']=DB::table('post')
            ->select('youtube','post_id','post_title','post_name','post_picture','post_created_date','post_man','post_description','post_view')
            ->where('post_name','=',$post_name)
            ->first();
        $row_data['post_view']= $data['post']->post_view +1;
        $post_id= $data['post']->post_id;
        $youtube= $data['post']->youtube;
        if($youtube) {

            $data['youtube_video'] = Youtube::getVideoInfo($youtube);
        }

        DB::table('post')->where('post_id','=',$post_id)->update($row_data);

        return view('website.single_post',$data);

    }
public function admin_login(){

    Session::put('id', 12);
    Session::put('status', 'super-admin');
    Session::put('name', 'xxxx');
        return redirect('dashboard');

}





    public function all_comment_count($post_id){

      $main_coummnet= DB::table('comments')->where('post_id',$post_id)->where('status','=',1)->count();
      $sub_coummnet= DB::table('sub_comments')->where('post_id',$post_id)->where('status','=',1)->count();
      echo  $total=$main_coummnet+$sub_coummnet;

    }

    public function all_like_count($post_id){
        $ip= \Request::ip();
        
        $existing_like= DB::table('like_dislike')->where('post_id',$post_id)->where('ip','=',$ip)->count();
        if($existing_like >0){
            $row_data['like']=1;
        } else {
           
            $row_data['like']=0;
        }
        $row_data['total_like']= DB::table('like_dislike')->where('post_id',$post_id)->count();
        return response()->json($row_data);


    }

    public function all_like_submit($post_id){
      $ip= \Request::ip();
        $data['ip']=$ip;
        $data['created_date']=date("Y-m-d");
        $data['post_id']=$post_id;
        $data['status']=1;
        
        $existing_like= DB::table('like_dislike')->where('post_id',$post_id)->where('ip','=',$ip)->count();
        if($existing_like >0){
              DB::table('like_dislike')->where('post_id',$post_id)->where('ip','=',$ip)->delete();
            $row_data['like']=0;
        } else {
            DB::table('like_dislike')->insert($data);
            $row_data['like']=1;
        }
         $row_data['total_like']= DB::table('like_dislike')->where('post_id',$post_id)->count();
        return response()->json($row_data);
      

    }

    public function ajax_pull_data_get(){
        $data['ip']= \Request::ip();
        $today="Y-m-d";
        $data['pulls']=DB::table('pulls')->select('pull_question','pull_id')->where('pull_status','=',1)->where('pull_expire_time', '>=', $today)->get();
        return view('website.ajax_poll',$data);

    }
	
	

    public function vote_count(Request $request){
       // $pull_id= $request->pull_id;
        $pull_id= $request->get('pull_id');
         $ip =\Request::ip();
        $data['ip']=$ip;
        $data['pull_id']=$pull_id;
        $data['option_id']=$request->option_id;
      //  DB::table('vote')->insert($data);
        $already_given_vote= DB::table('vote')->where('pull_id',$pull_id)->where('ip',$ip)->first();
        if($already_given_vote){

        } else{
            $insertGetId = DB::table('vote')->insertGetId($data);
         //   echo $insertGetId;
//            if($insertGetId){
//                DB::table('vote')->where('vote_id',$insertGetId)->delete();
//
//          }

        }

    }
    public function submit_comments(Request $request){
        $data['post_id']= $request->post_id;
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['comments']=$request->text;

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
            echo 'ok';
        }else {
            $data['status']=0;
            $result= DB::table('comments')->insert($data);
            echo 'no';
        }
    }
    public function submit_sub_comments(Request $request){
        $data['comment_id']= $request->comment_id;
        $data['post_id']= $request->post_id;
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['comments']=$request->text;

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
            echo 'ok';
        }else {
            $data['status']=0;
            $result= DB::table('sub_comments')->insert($data);
            echo 'no';
        }
    }


    public function get_comments(Request $request){
        $post_id= $request->post_id;
       $data['comments']=DB::table('comments')->where('post_id',$post_id)->where('status',1)->orderBy('comment_id','desc')->get();
             return view('website.get_comments',$data);

    }
    public function sub_comments_data(Request $request){
        $comment_id= $request->comment_id;
        $data['comments']=DB::table('sub_comments')->where('comment_id',$comment_id)->where('status',1)->orderBy('sub_commets_id','desc')->get();
        return view('website.sub_comments_data',$data);

    }


    public function login_check_ajax(Request $request){
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('users')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            echo 'ok';
            $id = $result->id;
            $email = $result->email;
            $name = $result->name;
            Session::put('user_id', $id);
            Session::put('email', $email);
            Session::put('name', $name);
           // Session::put('user_picture', $result->picture);
          //  return redirect('/');

        } else {
           echo 'Your Email Or Password Invalid Try Again';
        }

    }
    public function hitcounter(){
        $ip= \Request::ip();
        $data['client_ip']=$ip;
        $data['date']=date("Y-m-d");      

        $hitcounter= DB::table('hitcounter')->where('client_ip','=',$ip)->where('date','=',date("Y-m-d"))->count();
        if($hitcounter==0){
            DB::table('hitcounter')->insert($data);

        }  

    }

    public  function getChat($from_user){
        $chats=array();

        $chateData=DB::table('messages')
            ->select('message','from','to','created_at')
            ->where('messages.from',$from_user)
            ->orWhere('messages.to',$from_user)
            ->get();
        if($chateData){
            foreach ($chateData as $key=>$chat){
               $userName= DB::table('users')->select('name')->where('id',$chat->from)->first();
                if($userName){
                    $chats[$key]['name']=$userName->name;
                } else {
                    $adminName= DB::table('admin')->select('name')->where('admin_id',$chat->from)->first();
                    $chats[$key]['name']=$adminName->name;
                }

                $chats[$key]['from']=$chat->from;
                $chats[$key]['user_id']=$from_user;
                $chats[$key]['message']=$chat->message;
                $chats[$key]['created_at']=$chat->created_at;

            }
        }



        $data['chats']=$chats;
        
 
        return view('website.getChat',$data);
    }

    public  function storeChat($messsage){

        $from =Session::get('user_id');
        $admin_user= DB::table('messages')->select('to')->where('from',$from)->first();
        if($admin_user){
            $admin_user=$admin_user->to;
        } else {
            $admin_user='';
        }
        $to = $admin_user;
        $message =$messsage;

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

    public  function carrier(){
       $page= DB::table('page')->where('page_link','=','carrier')->first();
        $data['page_content']=$page->page_content;
        return view('website.customer.carrier',$data);
     }
    public  function applyNow(){
        $user_id =Session::get('user_id');
        if($user_id){
            return view('website.customer.apply_form_1');
            
        } else {

            return redirect('/customer/login');
        }

    }
    public  function applyNowForm2(){
        $user_id =Session::get('user_id');
        if($user_id){
            return view('website.customer.apply_form_2');

        } else {

            return redirect('/customer/login');
        }

    }

    public  function applyNowForm3(){
        $user_id =Session::get('user_id');
        if($user_id){
            return view('website.customer.apply_form_3');
        } else {
            return redirect('/customer/login');
        } 
    }
    public  function applySuccess(){
        
            return view('website.customer.applySuccess');
         
    }











}
