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
 
class MemberController  extends Controller
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
        $data['main'] = 'Members';
        $data['active'] = 'Members';
        $data['title'] = '';
        $data['members']= DB::table('members')
            ->join('departments','departments.department_id','=','members.department_id')
            ->orderBy('member_id', 'desc')->paginate(10);
        return view('admin.member.index',$data);
    }

    public  function  fetch_data(Request $request){
        if($request->ajax())
        {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $members = DB::table('members')
                ->join('departments','departments.department_id','=','members.department_id')
                ->orWhere('member_name', 'like', '%'.$query.'%')->paginate(10);
            return view('admin.member.pagination', compact('members'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['main'] = 'Members';
        $data['active'] = 'Members';
        $data['title'] = '';
        $data['departments']=DB::table('departments')->orderBy('department_id', 'desc')->get();
        return view('admin.member.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['member_name']=$request->member_name;
        $data['member_parmalink']=$request->member_parmalink;
          $data['member_status']=$request->member_status;
          $data['member_advise']=$request->member_advise;
          $data['member_advise_name']=$request->member_advise_name;
          $data['member_description']=$request->member_description;
          $data['department_id']=$request->department_id;
          $data['create_at']=date('Y-m-d');
        $image = $request->file('member_picture');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/member');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(400, 400, function ($constraint) {
            })->save($destinationPath . '/' . $image_name);
            $data['member_picture']=$image_name;
        }
        $post_id =DB::table('members')->insertGetId($data);

        if ($post_id) {
            return redirect('admin/members')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/members')
                ->with('error', 'No successfully.');
        }
    }



    
    public function edit($id)
    {
        $data['main'] = 'Members';
        $data['active'] = 'Members';
        $data['title'] = '';        $data['departments']=DB::table('departments')->orderBy('department_id', 'desc')->get();

        $data['member'] = DB::table('members')->where('member_id', $id)->first();
        return view('admin.member.edit',$data);


    }

   
    public function update(Request $request, $id)
    {
        $data['member_name']=$request->member_name;
        $data['member_parmalink']=$request->member_parmalink;
        $data['member_status']=$request->member_status;
        $data['member_advise']=$request->member_advise;
        $data['member_advise_name']=$request->member_advise_name;
        $data['member_description']=$request->member_description;
        $data['department_id']=$request->department_id;
        $data['create_at']=date('Y-m-d');


        $image = $request->file('member_picture');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/member');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->resize(400, 400, function ($constraint) {
            })->save($destinationPath . '/' . $image_name);
            $data['member_picture']=$image_name;
        }
        
        $result= DB::table('members')->where('member_id',$id)->update($data);


        if ($result) {
            return redirect('admin/members')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/members')
                ->with('error', 'No successfully.');
        }
    }
  

    public function delete($id)
    {



        $result=DB::table('members')->where('member_id',$id)->delete();
        if ($result) {
            return redirect('admin/members')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/members')
                ->with('error', 'No successfully.');
        }

    }


    public  function  urlCheck(Request $request){
        $post_name = $request->get('url');
        $result= DB::table('members')->where('member_parmalink',$post_name)->first();
        if($result){
            echo 'yes';
        } else {
            echo '';
        }


    }





}
