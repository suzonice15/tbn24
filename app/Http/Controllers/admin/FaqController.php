<?php

namespace App\Http\Controllers\admin;
 
use Illuminate\Http\Request;
use DB;

class FaqController extends Controller
{
    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
        $this->middleware('AdminLoginCheck');
    }
    public function index()
    {
        $data['main'] = '  Faq List  ';
        $data['active'] = ' Faq List ';
        $data['title'] = '';

        $faqs  = DB::table('faqs')->orderBy('faq_id', 'desc')->paginate(50);
        return view('admin.faq.index', compact('faqs'), $data);
    }

    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $faqs  =DB::table('faqs')->select("*")
                ->where('answers', 'LIKE', '%' . $query . '%')->orderBy('faq_id', 'desc')->paginate(50);

            return view('admin.faq.pagination', compact('faqs'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['answers']=$request->answers;
        $data['questions']=$request->questions;

        $result =DB::table('faqs')->insert($data);
        if ($result) {
            return redirect('admin/faq')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/faq')
                ->with('error', 'No successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\Faq  $faq
     * @return \Illuminate\Http\Response
     */
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
        $data['faq'] = DB::table('faqs')->where('faq_id', $id)->first();
        return view('admin.faq.edit',$data);


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
        $data['answers']=$request->answers;
        $data['questions']=$request->questions;
        $result= DB::table('faqs')->where('faq_id',$id)->update($data);


         if ($result) {
            return redirect('admin/faq')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/faq')
                ->with('error', 'No successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $result = DB::table('faqs')->where('faq_id', $id)->delete();
        if ($result) {
            return redirect('admin/faq')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/faq')
                ->with('error', 'No successfully.');
        }
    }
}
