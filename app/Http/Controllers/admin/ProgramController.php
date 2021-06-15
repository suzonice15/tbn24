<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use DB;
use Image;
use Session;

class ProgramController extends Controller
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
        $data['main'] = ' Program List ';
        $data['active'] = ' Program List ';
        $data['title'] = '';

        $programs  = Program::orderBy('programs.id', 'desc')->paginate(50);

        return view('admin.program.index', compact('programs'), $data);
    }

    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $programs  =Program::select("*")
                ->where('program_name', 'LIKE', '%' . $query . '%')
                ->OrWhere('youtube', 'LIKE', '%' . $query . '%')
                ->orderBy('programs.id', 'desc')->paginate(50);

            return view('admin.program.pagination', compact('programs'));
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['program_name']=$request->program_name;
        $data['program_details']=$request->program_details;
        $data['status']=$request->status;
        $data['youtube']=$request->youtube;

        $image = $request->file('program_img');
        if ($image) {

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/uploads/program');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(220, 220, function ($constraint) {

            })->save($destinationPath . '/' . $image_name);
            $data['program_image']=$image_name;

        }


        $data['created_at']=date('Y-m-d');
        $result =DB::table('programs')->insert($data);
        if ($result) {
            return redirect('admin/programs')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/programs')
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
        $data['program'] = DB::table('programs')->where('id', $id)->first();
        return view('admin.program.edit',$data);


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
        $data['program_name']=$request->program_name;
        $data['program_details']=$request->program_details;
        $data['status']=$request->status;
        $data['youtube']=$request->youtube;
        $image = $request->file('program_img');
        if ($image) {

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/uploads/program');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(220, 220, function ($constraint) {

            })->save($destinationPath . '/' . $image_name);
            $data['program_image']=$image_name;

        }


        $result= DB::table('programs')->where('id',$id)->update($data);
        if ($result) {
            return redirect('admin/programs')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/programs')
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
        $result = DB::table('programs')->where('id', $id)->delete();
        if ($result) {
            return redirect('admin/programs')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/programs')
                ->with('error', 'No successfully.');
        }
    }
   
}
