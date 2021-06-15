<?php

namespace App\Http\Controllers\admin;
 
use Illuminate\Http\Request;
use DB;
use Session;

class PopularVideoController extends Controller
{
    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
        $this->middleware('AdminLoginCheck');
    }
    public function index()
    {
          $status= Session::get('id');
         if(!$status)
         {
            return redirect('/admin');
         }
        $data['main'] = 'Popular Video List';
        $data['active'] = ' Popular Video List ';
        $data['title'] = '';
        $videos  = DB::table('popular_video')->orderBy('id', 'desc')->paginate(50);
        return view('admin.popularvideo.index', compact('videos'), $data);
    }

    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $videos  =DB::table('popular_video')->select("*")
                ->where('video_name', 'LIKE', '%' . $query . '%')->orderBy('id', 'desc')->paginate(50);
            return view('admin.popularvideo.pagination', compact('videos'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.popularvideo.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['video_name']=$request->video_name;
        $data['video_id']=$request->video_id;
        $data['order_by']=$request->order_by;

        $result =DB::table('popular_video')->insert($data);
        if ($result) {
            return redirect('admin/popular/video')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/popular/video')
                ->with('error', 'No successfully.');
        }
    }

    
    public function edit($id)
    {
        $data['video'] = DB::table('popular_video')->where('id', $id)->first();
        return view('admin.popularvideo.edit',$data);


    }

 
    public function update(Request $request,$id)
    {
        $data['video_name']=$request->video_name;
        $data['video_id']=$request->video_id;
        $data['order_by']=$request->order_by;

        $result= DB::table('popular_video')->where('id',$id)->update($data);


         if ($result) {
            return redirect('admin/popular/video')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/popular/video')
                ->with('error', 'No successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\news  $faq
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $result = DB::table('popular_video')->where('id', $id)->delete();
        if ($result) {
            return redirect('admin/popular/video')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/popular/video')
                ->with('error', 'No successfully.');
        }
    }
}
