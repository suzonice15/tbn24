<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use DB;
use Image;
use Session;

class QuestionController extends Controller
{
    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
        $this->middleware('AdminLoginCheck');
    }
    

    public function exams()
    {
          $status= Session::get('id');
         if(!$status)
         {
            return redirect('/admin');
         }
        $data['main'] = 'Exams ';
        $data['active'] = 'Exams';
        $data['title'] = '';

        $exams  = DB::table('jobs_form_1')->orderBy('jobs_form_id', 'desc')->paginate(15);
        return view('admin.question.exam', compact('exams'), $data);
    }
    public function exam_pagination (Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $exams  =DB::table('jobs_form_1')
                ->where('name', 'LIKE', '%' . $query . '%')    
                ->orWhere('email', 'LIKE', '%' . $query . '%')                
                ->orderBy('jobs_form_id', 'desc')->paginate(15);

            return view('admin.question.exam_pagination', compact('exams'));
        }

    }
    
    public function index()
    {
          $status= Session::get('id');
         if(!$status)
         {
            return redirect('/admin');
         }
        $data['main'] = ' questions List ';
        $data['active'] = ' questions List ';
        $data['title'] = '';

        $questions  = DB::table('question_title')->orderBy('question_id', 'desc')->paginate(15);
        return view('admin.question.index', compact('questions'), $data);
    }

    public function fetch_data (Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $questions  =DB::table('question_title')
                ->where('question_title', 'LIKE', '%' . $query . '%')                
                ->orderBy('question_id', 'desc')->paginate(15);

            return view('admin.question.pagination', compact('questions'));
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['main'] = ' questions  ';
        $data['active'] = ' Create questions  ';
        return view('admin.question.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['question_title']=$request->question_title;
        $data['currect_answer']=$request->currect_answer;
        $data['option1']=$request->option1;
        $data['option2']=$request->option2;  
        $data['option3']=$request->option3;       
        $data['option4']=$request->option4;   
     
        $data['created_at']=date('Y-m-d');
        $result =DB::table('question_title')->insert($data);
        if ($result) {
            return redirect('admin/question')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/question')
                ->with('error', 'No successfully.');
        }
    }

   
    public function examEdit($user_id)
    {

        $data['main'] = 'Exam';
        $data['active'] = 'Exam ';
        $data['user'] = DB::table('jobs_form_1')->where('user_id', $user_id)->first();
        $data['exams']= DB::table('exams')->join('question_title','question_title.question_id','=','exams.question_id')
        ->where('exams.user_id',$data['user']->user_id)
        ->get();
        return view('admin.question.examEdit',$data);

       
    }

    
    public function edit($id)
    {
        $data['main'] = 'questions';
        $data['active'] = 'Update questions';
        $data['question'] = DB::table('question_title')->where('question_id', $id)->first();
        return view('admin.question.edit',$data);


    }

     
    public function update(Request $request, $id)
    {
        $data['question_title']=$request->question_title;
        $data['currect_answer']=$request->currect_answer;
        $data['option1']=$request->option1;
        $data['option2']=$request->option2;  
        $data['option3']=$request->option3;       
        $data['option4']=$request->option4;   
        $result= DB::table('question_title')->where('question_id',$id)->update($data);
        if ($result) {
            return redirect('admin/question')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/question')
                ->with('error', 'No successfully.');
        }

    }

     
    public function delete($id)
    {
        $result = DB::table('question_title')->where('question_id', $id)->delete();
        if ($result) {
            return redirect('admin/question')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/question')
                ->with('error', 'No successfully.');
        }
    }
    public function examDelete($id)
    {
        $result = DB::table('jobs_form_1')->where('user_id', $id)->delete();
        if ($result) {
            return redirect('admin/exams')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/exams')
                ->with('error', 'No successfully.');
        }
    }

    
   
}
