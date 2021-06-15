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

class DepartmentController  extends Controller
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
                
               
         
        $data['main'] = 'Departments';
        $data['active'] = 'Departments';
        $data['title'] = '';
        $data['departments']= DB::table('departments')->orderBy('department_id', 'desc')->paginate(50);
        return view('admin.department.index',$data);
                
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['main'] = 'Departments';
        $data['active'] = 'Departments';
        $data['title'] = '';
         return view('admin.department.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['department_name']=$request->department_name;
        $post_id =DB::table('departments')->insertGetId($data);

        if ($post_id) {
            return redirect('admin/departments')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/departments')
                ->with('error', 'No successfully.');
        }
    }

     

    
    public function edit($id)
    {
        $data['main'] = 'Departments';
        $data['active'] = 'Departments';
        $data['title'] = '';
        $data['department'] = DB::table('departments')->where('department_id', $id)->first();
        return view('admin.department.edit',$data);


    }

   
    public function update(Request $request, $id)
    {
        $data['department_name']=$request->department_name;
        $result= DB::table('departments')->where('department_id',$id)->update($data);
        if ($result) {
            return redirect('admin/departments')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/departments')
                ->with('error', 'No successfully.');
        }
    }
  

    public function delete($id)
    {



        $result=DB::table('departments')->where('department_id',$id)->delete();
        if ($result) {
            return redirect('admin/departments')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/departments')
                ->with('error', 'No successfully.');
        }

    }

    

}
