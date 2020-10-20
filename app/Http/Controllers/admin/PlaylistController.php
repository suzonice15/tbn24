<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use  Session;
use Image;
use AdminHelper;
use URL;
use Illuminate\Support\Facades\Redirect;

class PlaylistController extends Controller
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
        $this->middleware('AdminLoginCheck');
    }

    public function index()
    {
         
        $data['main'] = ' Playlist List ';
        $data['active'] = ' Playlist List ';
        $data['title'] = '  ';       
        $data['playlists']= DB::table('playlists')->select('playlists.*')
           ->orderBy('playlist_id', 'desc')->paginate(50);
        return view('admin.playlist.index',$data);
    }

    public  function  fetch_data(Request $request){
        if($request->ajax())
        {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $categories = DB::table('category')
                ->orWhere('category_title', 'like', '%'.$query.'%')->paginate(50);
            return view('admin.category.pagination', compact('categories'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.playlist.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['playlist_name']=$request->playlist_name;
        $data['playlist_link']=$request->playlist_link;
        $data['playlist_status']=$request->playlist_status;
        $data['order_by']=$request->order_by;
 

        $result =DB::table('playlists')->insert($data);
        if ($result) {
            return redirect('admin/playlist')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/playlist')
                ->with('error', 'No successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories']=DB::table('category')->get();

        $data['playlist'] = DB::table('playlists')->where('playlist_id', $id)->first();
        return view('admin.playlist.edit',$data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['playlist_name']=$request->playlist_name;
        $data['playlist_link']=$request->playlist_link;
        $data['playlist_status']=$request->playlist_status;
        $data['order_by']=$request->order_by;
        

        $result =DB::table('playlists')->where('playlist_id','=',$id)->update($data);
        if ($result) {
            return redirect('admin/playlist')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/playlist')
                ->with('error', 'No successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $user_id=1;//AdminHelper::Admin_user_autherntication();
        $url=  URL::current();

        if($user_id < 1){
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect',$url)->send();

        }

        $result=DB::table('playlists')->where('playlist_id',$id)->delete();
        if ($result) {
            return redirect('admin/playlist')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/playlist')
                ->with('error', 'No successfully.');
        }

    }



}
