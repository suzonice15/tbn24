<?php

namespace App\Http\Controllers\admin;
 
use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
        $this->middleware('AdminLoginCheck');
    }
    public function index()
    {
        $data['main'] = '  News List  ';
        $data['active'] = ' News List ';
        $data['title'] = '';
        $news  = DB::table('news')->orderBy('news_id', 'desc')->paginate(10);
        return view('admin.news.index', compact('news'), $data);
    }

    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $news  =DB::table('news')->select("*")
                ->where('news_title', 'LIKE', '%' . $query . '%')->orderBy('news_id', 'desc')->paginate(10);

            return view('admin.news.pagination', compact('news'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['news_title']=$request->news_title;
        $data['news_body']=$request->news_body;
        $data['status']=$request->status;

        $result =DB::table('news')->insert($data);
        if ($result) {
            return redirect('admin/news')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/news')
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
        $data['new'] = DB::table('news')->where('news_id', $id)->first();
        return view('admin.news.edit',$data);


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
        $data['news_title']=$request->news_title;
        $data['news_body']=$request->news_body;
        $data['status']=$request->status;
        $result= DB::table('news')->where('news_id',$id)->update($data);


         if ($result) {
            return redirect('admin/news')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/news')
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
        $result = DB::table('news')->where('news_id', $id)->delete();
        if ($result) {
            return redirect('admin/news')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/news')
                ->with('error', 'No successfully.');
        }
    }
}
