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

class DocumentController  extends Controller
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
        $data['main'] = 'Documents';
        $data['active'] = 'Documents';
        $data['title'] = '';
        $data['documents']= DB::table('document')->orderBy('document_id', 'desc')->paginate(50);


        return view('admin.document.index',$data);
    }

    public  function  fetch_data(Request $request){
        if($request->ajax())
        {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $documents= DB::table('document')
                ->orWhere('document_title', 'like', '%'.$query.'%')->paginate(50);
            return view('admin.document.pagination', compact('documents'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['main'] = 'Documents';
        $data['active'] = 'Documents';
        $data['title'] = '';
         return view('admin.document.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['document_title']=$request->document_title;
        $data['document_parmalink']=$request->document_parmalink;
        $data['document_description']=$request->document_description;
        $data['document_download']=$request->document_download;
        $data['document_status']=$request->document_status;

//        $image = $request->file('post_picture');
//        if ($image) {
//            $image_name = time() . '.' . $image->getClientOriginalExtension();
//            $destinationPath = public_path('/uploads/post');
//            $resize_image = Image::make($image->getRealPath());
//            $resize_image->resize(400, 400, function ($constraint) {
//            })->save($destinationPath . '/' . $image_name);
//            $data['post_picture']=$image_name;
//        }
        $post_id =DB::table('document')->insertGetId($data);

        if ($post_id) {
            return redirect('admin/document')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/document')
                ->with('error', 'No successfully.');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data['main'] = 'Documents';
        $data['active'] = 'Documents';
        $data['title'] = '';

        $data['document'] = DB::table('document')->where('document_id', $id)->first();
        return view('admin.document.edit',$data);


    }

   
    public function update(Request $request, $id)
    {
        $data['document_title']=$request->document_title;
        $data['document_parmalink']=$request->document_parmalink;
        $data['document_description']=$request->document_description;
        $data['document_download']=$request->document_download;
        $data['document_status']=$request->document_status;

//        $image = $request->file('post_picture');
//        if ($image) {
//            $image_name = time() . '.' . $image->getClientOriginalExtension();
//            $destinationPath = public_path('/uploads/post');
//            $resize_image = Image::make($image->getRealPath());
//            $resize_image->resize(400, 400, function ($constraint) {
//            })->save($destinationPath . '/' . $image_name);
//            $data['post_picture']=$image_name;
//        }
        $result= DB::table('document')->where('document_id',$id)->update($data);


        if ($result) {
            return redirect('admin/document')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/document')
                ->with('error', 'No successfully.');
        }
    }
  

    public function delete($id)
    {


        $result=DB::table('document')->where('document_id',$id)->delete();
        if ($result) {
            return redirect('admin/document')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/document')
                ->with('error', 'No successfully.');
        }

    }
    public function destroy($id)
    {
        //
    }
    public  function  urlCheck(Request $request){
        $post_name = $request->get('url');
      $result= DB::table('document')->where('document_parmalink',$post_name)->first();
        if($result){
            echo 'This category exit';
        } else {
            echo '';
        }


    }

    

}
