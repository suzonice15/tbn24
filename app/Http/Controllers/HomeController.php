<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
 use Alaouy\Youtube\Facades\Youtube;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {



    }

    public function index()
    {




       // $ip = '103.92.214.7';//\Request::ip();
        $ip = '103.92.214.8';
        $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test"));
       
        $county= $details->country_code;
        if($county=='BD'){
            $data['api']= get_bd_api();
        } else {
            $data['api']= get_api();
        }


        $today="Y-m-d";
        $data['about']=DB::table('page')->select('page_content')->where('page_link','about-us')->first();
        $data['programs']=DB::table('programs')->paginate(6);
        $data['today_programs']=DB::table('programs')
                                ->join('schedules','schedules.program_id','=','programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))

                                ->orderBy('start_time','desc')->get();


        
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
         
           ->orderBy('programs.id','DESC')->paginate(6);
        return view('website.all_program',$data);
     }

    public function today_schedule()
    {

        $data['today_programs']=DB::table('programs')
            ->join('schedules','schedules.program_id','=','programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))

            ->orderBy('start_time','desc')->get();
        return view('website.today_schedule',$data);
    }
    public  function  ajax_program(Request $request){
        if($request->ajax())
        {         
            $programs =DB::table('programs')->orderBy('id','DESC')->paginate(6);
            $view = view('website.ajax_all_program',compact('programs'))->render();
            return response()->json(['html'=>$view]);
        }

    }
    public   function single_program($id){

        $data['program']=DB::table('programs')->
            where('id','=',$id)->first();
       return  view('website.single_program',$data);
      }
    public function about(){
        $data['about']=DB::table('page')->select('page_content')->where('page_link','about-us')->first();
       return view('website.about_us',$data);
     }
    public function documents(){
        $data['about']=DB::table('page')->select('page_content')->where('page_link','documents')->first();
        return view('website.documents',$data);
    }
    public function contact(){
       $data['number1']=rand(1,20);
       $data['number2']=rand(1,20);
        $data['sum']= $data['number1']+ $data['number2'];



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

        $pure_capta=$request->pure_capta;
        if($pure_capta==$request->captcha) {

            $data['contact_name'] = $request->name;
            $data['contact_email'] = $request->email;
            $data['contact_subject'] = $request->subject;
            $data['contact_message'] = $request->message;
            $result = DB::table('contacts')->insert($data);
            if ($result) {
                return redirect('/contact')
                    ->with('success', 'message receive successfully.');
            } else {
                return redirect('/contact')
                    ->with('error', 'No successfully.');
            }
        } else {
            return redirect('/contact')
                ->with('error', 'Invalid Captcha');

        }

 
    }



 
    

    public function programVideo(){

        $videoList = Youtube::listChannelVideos('UCv_oQ-sRZoJdEX4K5fQ6q6w', 12);
        $playlists = Youtube::getPlaylistsByChannelId('UCv_oQ-sRZoJdEX4K5fQ6q6w');
        $data['videoLists']=$videoList;
        $data['playlists']=$playlists;

//        echo '<pre>';
//        print_r($playlists);
//        exit();
//
        
        return view('website.program_video',$data);

    }
    public function youtubePlaylist($playlist){

        //$videoList = Youtube::listChannelVideos('UCv_oQ-sRZoJdEX4K5fQ6q6w', 12);
       // $playlists = Youtube::getPlaylistsByChannelId('UCv_oQ-sRZoJdEX4K5fQ6q6w');
       // $data['videoLists']=$videoList;
        //$data['playlists']=$playlists;

        $data['videoLists'] = Youtube::getPlaylistItemsByPlaylistId($playlist);


      

        return view('website.youtubePlaylist',$data);

    }


    
    public function page($url){
        $data['page']=DB::table('page')->select('*')->where('page_link',$url)->first();
        return view('website.page',$data);

    }
}
