<?php

namespace App\Http\Controllers\admin;
 
use Illuminate\Http\Request;
use DB;

class PullController extends Controller
{
    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
        $this->middleware('AdminLoginCheck');
    }


    public function index()
    {
        $data['main'] = 'Poll List
 ';
        $data['active'] = 'Poll List
';
        $data['title'] = '';
        $pulls  = DB::table('pulls')
            ->orderBy('pull_id', 'desc')->paginate(10);
        return view('admin.pull.index', compact('pulls'), $data);
    }

    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $pulls =DB::table('pulls')->select("*")
                ->where('pull_question', 'LIKE', '%' . $query . '%')->orderBy('pull_id', 'desc')->paginate(10);

            return view('admin.pull.pagination', compact('pulls'));
        }

    }


    public function pull_result()
    {
        $data['main'] = 'Result List';
        $data['active'] = 'Result List';
        $data['title'] = '';
        $pulls  = DB::table('pulls')
            ->orderBy('pull_id', 'desc')->paginate(10);
        return view('admin.pull.pull_result', compact('pulls'), $data);
    }

    public function pull_result_pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $pulls =DB::table('pulls')->select("*")
                ->where('pull_question', 'LIKE', '%' . $query . '%')->orderBy('pull_id', 'desc')->paginate(10);

            return view('admin.pull.pull_result_pagination', compact('pulls'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pull.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['pull_question']=$request->pull_question;
        $data['pull_expire_time']=date('Y-m-d',strtotime($request->pull_expire_time));
        $data['pull_status']=$request->pull_status;



        $pull_id =DB::table('pulls')->insertGetId($data);

        $number = count($request->name);
        if($number > 0)
        {
            for($i=0; $i<$number; $i++)
            {
                if(trim($request->name[$i] != ''))
                {
                    $row_data['option_name']=$request->name[$i];
                    $row_data['pull_id']=$pull_id;
                    DB::table('pull_add_option')->insert($row_data);


                }
            }

        }


        if ($pull_id) {
            return redirect('admin/pulls')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/pulls')
                ->with('error', 'No successfully.');
        }
    }


    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pull'] = DB::table('pulls')->where('pull_id', $id)->first();
        $data['options'] = DB::table('pull_add_option')->where('pull_id', $id)->get();
        return view('admin.pull.edit',$data);


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data['pull_question']=$request->pull_question;
        $data['pull_expire_time']=date('Y-m-d',strtotime($request->pull_expire_time));
        $data['pull_status']=$request->pull_status;

        $pull_id=  DB::table('pulls')->where('pull_id',$id)->update($data);
        DB::table('pull_add_option')->where('pull_id',$id)->delete();
        if($request->name){
            $number = count($request->name);
        } else {
            $number =0;
        }

        if($number > 0)
        {
            for($i=0; $i<$number; $i++)
            {
                if(trim($request->name[$i] != ''))
                {
                    $row_data['option_name']=$request->name[$i];
                    $row_data['pull_id']=$id;
                    DB::table('pull_add_option')->insert($row_data);


                }
            }
        }

         if ($pull_id) {
            return redirect('admin/pulls')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/pulls')
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
        $result = DB::table('pulls')->where('pull_id', $id)->delete();
        if ($result) {
            return redirect('admin/pulls')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/pulls')
                ->with('error', 'No successfully.');
        }
    }
}
