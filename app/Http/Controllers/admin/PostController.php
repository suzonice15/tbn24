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

class PostController  extends Controller
{
   

    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
        $this->middleware('AdminLoginCheck');
    }

    public function index()
    {
        $user_id=1;//AdminHelper::Admin_user_autherntication();
        $url=  URL::current();

        if($user_id < 1){
              Redirect::to('admin')->with('redirect',$url)->send();
        }
        $data['main'] = 'Posts';
        $data['active'] = 'Posts';
        $data['title'] = '';
        $data['posts']= DB::table('post')->orderBy('post_id', 'desc')->paginate(10);
        return view('admin.post.index',$data);
    }

    public  function  fetch_data(Request $request){
        if($request->ajax())
        {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $posts = DB::table('post')
                ->orWhere('post_title', 'like', '%'.$query.'%')->paginate(10);
            return view('admin.post.pagination', compact('posts'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['main'] = 'Posts';
        $data['active'] = 'Posts';
        $data['title'] = '';
        $data['categories']=DB::table('category')->orderBy('category_id', 'desc')->get();
        return view('admin.post.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['post_title']=$request->post_title;
        $data['post_name']=$request->post_name;
        $data['post_man']=session::get('name');
         $data['post_description']=$request->post_description;
          $data['post_status']=$request->post_status;
        $image = $request->file('post_picture');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/post');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(400, 400, function ($constraint) {
            })->save($destinationPath . '/' . $image_name);
            $data['post_picture']=$image_name;
        }
        $post_id =DB::table('post')->insertGetId($data);

        $category_id = $request->category_id;
        if($category_id) {
            foreach ($category_id as $key => $cat) {
                $category_data['post_id'] = $post_id;
                $category_data['category_id'] = $cat;
                DB::table('post_category_relation')->insert($category_data);

            }
        }
        if ($post_id) {
            return redirect('admin/post')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/post')
                ->with('error', 'No successfully.');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data['main'] = 'Posts';
        $data['active'] = 'Posts';
        $data['title'] = '';
        $data['categories']=DB::table('category')->orderBy('category_id', 'desc')->get();
        $data['product_categories'] = DB::table('post_category_relation')->where('post_id', $id)->orderBy('post_id', 'ASC')->get();

        $data['post'] = DB::table('post')->where('post_id', $id)->first();
        return view('admin.post.edit',$data);


    }

   
    public function update(Request $request, $id)
    {
        $data['post_title']=$request->post_title;
        $data['post_name']=$request->post_name;
        $data['post_description']=$request->post_description;
        $data['post_status']=$request->post_status;
        $image = $request->file('post_picture');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/post');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(400, 400, function ($constraint) {
            })->save($destinationPath . '/' . $image_name);
            $data['post_picture']=$image_name;
        }
        $result= DB::table('post')->where('post_id',$id)->update($data);
        DB::table('post_category_relation')->where('post_id', $id)->delete();
        $category_id = $request->category_id;
        if($category_id) {
            foreach ($category_id as $key => $cat) {
                $category_data['post_id'] = $id;
                $category_data['category_id'] = $cat;
                DB::table('post_category_relation')->updateOrInsert($category_data);

            }
        }

        if ($result) {
            return redirect('admin/post')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/post')
                ->with('error', 'No successfully.');
        }
    }
  

    public function delete($id)
    {
        $user_id=1;//AdminHelper::Admin_user_autherntication();
        $url=  URL::current();

        if($user_id < 1){
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect',$url)->send();

        }

        $result=DB::table('post')->where('post_id',$id)->delete();
        if ($result) {
            return redirect('admin/post')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/post')
                ->with('error', 'No successfully.');
        }

    }
    public function destroy($id)
    {
        //
    }
    public  function  urlCheck(Request $request){
        $post_name = $request->get('url');
      $result= DB::table('post')->where('post_name',$post_name)->first();
        if($result){
            echo 'This category exit';
        } else {
            echo '';
        }


    }

    

}
