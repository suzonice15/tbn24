<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use  Session;
use Image;
use Illuminate\Support\Facades\Redirect;
use AdminHelper;
use URL;
use App\User;
use Pusher\Pusher;
use App\Message;


class ChatController extends Controller
{
    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
                $this->middleware('AdminLoginCheck');

    }

   
   public function chat()
    {
  $status= Session::get('id');
         if(!$status)
         {
            return redirect('/admin');
         }
        $data['main'] = 'Chat';
        $data['active'] = 'Chat';
        $data['title'] = '  ';
        $data['users']  = DB::select("select users.id, users.name,  users.email, count(is_read) as unread 
        from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0          
        group by users.id, users.name, users.email order by unread DESC ");
        return view('admin.chat.index', $data);
    }
	
	  
   public function ajaxChatUsers()
    {

       
        $data['users']  = DB::select("select users.id, users.name,  users.email, count(is_read) as unread 
        from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0          
        group by users.id, users.name, users.email order by unread DESC ");
        return view('admin.chat.users', $data);
    }
	


    public function getMessage($user_id)
    {
        $my_id =Session::get('id');

        // Make read all unread message
        $rowData['is_read']=1;
        $rowData['to']=$my_id;

        DB::table('messages')->where('from',$user_id)->update($rowData);

        // Get all message from selected user
        $data['messages'] = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

       $data['admin_id']= Session::get('id');

        return view('admin.chat.message',$data);
    }

    public function sendMessage(Request $request)
    {
        $from =Session::get('id');
        $to = $request->receiver_id;
        $message = $request->message;

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
    
}
