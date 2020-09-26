<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use  Session;
use Image;
use AdminHelper;
use URL;
use app\Program;
use app\Schedule;
use Illuminate\Support\Facades\Redirect;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['main'] = '  Schedule List  ';
        $data['active'] = '  Schedule List ';
        $data['title'] = '';
        $today="Y-m-d";
        $data['programs']=DB::table('programs')->get();



        $schedules  =DB::table('schedules')->join('programs','programs.id','=','schedules.program_id')

            ->orderBy('schedules.id', 'desc')
            ->paginate(10);

//        $schedules  =DB::table('schedules')->join('programs','programs.id','=','schedules.program_id')
//            ->whereDate('schedule_date', '=', date('Y-m-d'))
//            ->orderBy('schedules.id', 'desc')
//            ->paginate(10);
        return view('admin.schedule.index', compact('schedules'), $data);

    }



    public function pagination(Request $request)
    {
        if ($request->ajax()) {

          //  $query = $request->get('program_id');
           // $query = str_replace(" ", "%", $query);
//            $programs  =Program::select("*")
//                ->where('program_id', 'LIKE', '%' . $query . '%')
//                ->orderBy('programs.id', 'desc')
//                ->paginate(10);
            $schedules  =DB::table('schedules')->select('schedules.*','programs.program_name')->join('programs','programs.id','=','schedules.program_id')
                ->orderBy('schedules.id', 'desc')
                ->paginate(10);

            return view('admin.schedule.pagination', compact('schedules'));
        }

    }
    public function pagination_by_program_id(Request $request){

        if ($request->ajax()) {

            $program_id = $request->get('program_id');
            $schedule_date = $request->get('schedule_date');
            if($schedule_date){
                $date=date('Y-m-d',strtotime($schedule_date));
            }
            $schedules  =DB::table('schedules')->join('programs','programs.id','=','schedules.program_id')
                ->where('program_id','=',$program_id)
                ->whereDate('schedule_date', '=',$date)
                ->orderBy('schedules.id', 'desc')
                ->paginate(5000);

            return view('admin.schedule.pagination', compact('schedules'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['programs']=DB::table('programs')->get();
        return view('admin.schedule.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['schedule_date']=date('Y-m-d',strtotime($request->schedule_date));
        $data['program_id']=$request->program_id;
        $data['start_time']=$request->start_time;
        $data['chat_status']=$request->chat_status;
        $data['end_time']=$request->end_time;
        $data['schedule_note']=$request->schedule_note;
        $data['created_at']=date('Y-m-d');
        $data['day']=date('D');
        $result= DB::table('schedules')->insert($data);
        if ($result) {
            return redirect('admin/schedules')
                ->with('success', 'Added successfully.');
        } else {
            return redirect('admin/schedules')
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
        $data['programs']=DB::table('programs')->get();

        $data['schedule'] = DB::table('schedules')->where('id', $id)->first();
        return view('admin.schedule.edit',$data);


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
        $data['schedule_date']=date('Y-m-d',strtotime($request->schedule_date));
        $data['program_id']=$request->program_id;
        $data['start_time']=$request->start_time;
        $data['chat_status']=$request->chat_status;
        $data['end_time']=$request->end_time;
        $data['schedule_note']=$request->schedule_note;
        $data['created_at']=date('Y-m-d');
        $data['day']=date('D');

        $result= DB::table('schedules')->where('id',$id)->update($data);
        if ($result) {
            return redirect('admin/schedules')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/schedules')
                ->with('error', 'No successfully.');
        }

    }



    public function schedule_weekly()
    {
        $data['main'] = ' Schedule Weekly List ';
        $data['active'] = ' Schedule Weekly List  ';
        $data['title'] = '';
        $today="Y-m-d";
        $data['programs']=DB::table('programs')->get();
        $schedules  =DB::table('schedules')->join('programs','programs.id','=','schedules.program_id')
            ->orderBy('schedules.id', 'desc')
            ->paginate(10);

        return view('admin.schedule.index', compact('schedules'), $data);

    }



    public function schedule_weekly_pagination(Request $request)
    {
        if ($request->ajax()) {

            //  $query = $request->get('program_id');
            // $query = str_replace(" ", "%", $query);
//            $programs  =Program::select("*")
//                ->where('program_id', 'LIKE', '%' . $query . '%')
//                ->orderBy('programs.id', 'desc')
//                ->paginate(10);
            $schedules  =DB::table('schedules')->select('schedules.*','programs.program_name')->join('programs','programs.id','=','schedules.program_id')
                ->orderBy('schedules.id', 'desc')
                ->paginate(10);

            return view('admin.schedule.pagination', compact('schedules'));
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
        $user_id=1;//AdminHelper::Admin_user_autherntication();
        $url=  URL::current();

        if($user_id < 1){
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect',$url)->send();

        }

        $result=DB::table('schedules')->where('id',$id)->delete();
        if ($result) {
            return redirect('admin/schedules')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/schedules')
                ->with('error', 'No successfully.');
        }
    }
}
