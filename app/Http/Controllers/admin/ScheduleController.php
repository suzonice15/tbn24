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
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $time_zone = get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
       // $this->middleware('AdminLoginCheck');
    }

    public function index()
    {
          $status= Session::get('id');
         if(!$status)
         {
            return redirect('/admin');
         }
        $data['main'] = '  Schedule List  ';
        $data['active'] = '  Schedule List ';
        $data['title'] = '';
        $today = "Y-m-d";
        $data['programs'] = DB::table('programs')->get();
        $schedules = DB::table('schedules')->select('schedules.*', 'program_name')->leftJoin('programs', 'programs.id', '=', 'schedules.program_id')
            ->orderBy('schedules.id', 'desc')
            ->paginate(50);

        return view('admin.schedule.index', compact('schedules'), $data);

    }

    public function schedule_weekly_day_view()
    {
        $data['main'] = 'Schedule List';
        $data['active'] = 'Schedule List';
        $data['title'] = '';
        $today = "Y-m-d";

        $start_date = Carbon::now()->startOfWeek();
        $end_date = Carbon::now()->endOfWeek();


        $data['sundays'] = DB::table('schedules')->select('day','schedules.id','schedules.start_time','schedules.end_time', 'programs.program_name')->join('programs', 'programs.id', '=', 'schedules.program_id')
            ->where('schedule_date', '>=', $start_date)
            ->where('schedule_date', '<=', $end_date)
                    ->get();
        


        return view('admin.schedule.schedule_weekly_day_view', $data);

    }


    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $schedules = DB::table('schedules')->select('schedules.*', 'programs.program_name')->leftJoin('programs', 'programs.id', '=', 'schedules.program_id')
                ->orderBy('schedules.id', 'desc')
                ->paginate(50);
            return view('admin.schedule.pagination', compact('schedules'));
        }

    }

    public function pagination_by_program_id(Request $request)
    {

        if ($request->ajax()) {

            $program_id = $request->get('program_id');
            $schedule_date = $request->get('schedule_date');
            if ($schedule_date) {
                if ($program_id == 1) {
                    $date = date('Y-m-d', strtotime($schedule_date));
                    $schedules = DB::table('schedules')
                        ->select('schedules.*', 'programs.program_name')
                        ->join('programs', 'programs.id', '=', 'schedules.program_id')
                        ->whereDate('schedule_date', '=', $date)
                        ->orderBy('schedules.start_time', 'asc')
                        ->paginate(5000);
                } else {
                    $date = date('Y-m-d', strtotime($schedule_date));
                    $schedules = DB::table('schedules')
                        ->select('schedules.*', 'programs.program_name')
                        ->join('programs', 'programs.id', '=', 'schedules.program_id')
                        ->where('program_id', '=', $program_id)
                        ->whereDate('schedule_date', '=', $date)
                        ->orderBy('schedules.start_time', 'asc')
                        ->paginate(5000);
                }

            } else {
                if ($program_id == 1) {
                    $schedules = DB::table('schedules')
                        ->select('schedules.*', 'programs.program_name')
                        ->join('programs', 'programs.id', '=', 'schedules.program_id')
                        ->orderBy('schedules.start_time', 'asc')
                        ->paginate(50000);
                } else{
                    $schedules = DB::table('schedules')
                        ->select('schedules.*', 'programs.program_name')
                        ->join('programs', 'programs.id', '=', 'schedules.program_id')
                        ->where('program_id', '=', $program_id)
                        ->orderBy('schedules.start_time', 'asc')
                        ->paginate(5000);
                }
            }

            return view('admin.schedule.pagination', compact('schedules'));
        }
    }


    public function schedule_fetch_data_or_insert_data(Request $request)
    {

        if ($request->ajax()) {
            $schedule_date = date('Y-m-d', strtotime($request->get('schedule_date')));
            $day = date('l', strtotime($request->get('schedule_date')));
            $currentDate = \Carbon\Carbon::now();
            $nowDate = $currentDate->subDays($currentDate->dayOfWeek +8); // gives 2016-02-06
            $schedules = DB::table('schedules')
                ->select('schedules.*', 'programs.program_name')
                ->join('programs', 'programs.id', '=', 'schedules.program_id')
                ->whereDate('schedule_date', '=', $schedule_date)
                ->orderBy('schedules.start_time', 'asc')
                ->paginate(100);
            if (sizeof($schedules) > 0) {

                return view('admin.schedule.pagination', compact('schedules'));
            } else {


                $new_data = DB::table('schedules')
                    ->select('schedules.*', 'programs.program_name')
                    ->join('programs', 'programs.id', '=', 'schedules.program_id')
                    ->where('schedule_date', '>', $nowDate)
                    ->where('day', '=',$day)
                    ->get();

             if(sizeof($new_data) > 0) {

                 foreach ($new_data as $schedule) {
                     $data['schedule_date'] = $schedule_date;
                     $data['program_id'] = $schedule->program_id;
                     $data['start_time'] = $schedule->start_time;
                     $data['chat_status'] = $schedule->chat_status;
                     $data['end_time'] = $schedule->end_time;
                     $data['schedule_note'] = $schedule->schedule_note;
                     $data['created_at'] = $schedule_date;
                     $data['day'] = $day;
                    $result = DB::table('schedules')->insert($data);
                 }
             }
                $schedules = DB::table('schedules')
                    ->select('schedules.*', 'programs.program_name')
                    ->join('programs', 'programs.id', '=', 'schedules.program_id')
                    ->whereDate('schedule_date', '=', $schedule_date)
                    ->orderBy('schedules.start_time', 'asc')
                    ->paginate(100);
                return view('admin.schedule.pagination', compact('schedules'));


            }


        }
    }
        



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['programs'] = DB::table('programs')->get();
        return view('admin.schedule.create', $data);

    }

    public function schedule_weekly_create()
    {
        $data['programs'] = DB::table('programs')->get();
        return view('admin.schedule.schedule_weekly_create', $data);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['schedule_date'] = date('Y-m-d', strtotime($request->schedule_date));
        $data['program_id'] = $request->program_id;
        $data['start_time'] = $request->start_time;
        $data['chat_status'] = $request->chat_status;
        $data['end_time'] = $request->end_time;
        $data['schedule_note'] = $request->schedule_note;
        $data['created_at'] = date('Y-m-d');
        $data['day'] =date('l', strtotime($request->schedule_date));
        $result = DB::table('schedules')->insert($data);
        if ($result) {
            return redirect('admin/schedules')
                ->with('success', 'Added successfully.');
        } else {
            return redirect('admin/schedules')
                ->with('error', 'No successfully.');
        }
    }

    public function schedule_weekly_store(Request $request)
    {
        $data['schedule_date'] = date('Y-m-d', strtotime($request->schedule_date));
        $data['program_id'] = $request->program_id;
        $data['start_time'] = $request->start_time;
        $data['chat_status'] = $request->chat_status;
        $data['end_time'] = $request->end_time;
        $data['schedule_note'] = $request->schedule_note;
        $data['created_at'] = date('Y-m-d');
        $data['day'] = date('l', strtotime($request->schedule_date));
        $result = DB::table('schedules')->insert($data);
        if ($result) {
            return redirect('admin/schedule-weekly')
                ->with('success', 'Added successfully.');
        } else {
            return redirect('admin/schedule-weekly')
                ->with('error', 'No successfully.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['programs'] = DB::table('programs')->get();
        $data['schedule'] = DB::table('schedules')->where('id', $id)->first();
        return view('admin.schedule.edit', $data);


    }

    public function schedule_weekly_edit($id)
    {
        $data['programs'] = DB::table('programs')->get();
        $data['schedule'] = DB::table('schedules')->where('id', $id)->first();
        return view('admin.schedule.schedule_weekly_edit', $data);


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['schedule_date'] = date('Y-m-d', strtotime($request->schedule_date));
        $data['program_id'] = $request->program_id;
        $data['start_time'] = $request->start_time;
        $data['chat_status'] = $request->chat_status;
        $data['end_time'] = $request->end_time;
        $data['schedule_note'] = $request->schedule_note;
        $data['created_at'] = date('Y-m-d');
        $data['day'] =date('l', strtotime($request->schedule_date));

        $result = DB::table('schedules')->where('id', $id)->update($data);
        if ($result) {
            return redirect('admin/schedules')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/schedules')
                ->with('error', 'No successfully.');
        }

    }

    public function schedule_weekly_update(Request $request, $id)
    {
        $data['schedule_date'] = date('Y-m-d', strtotime($request->schedule_date));
        $data['program_id'] = $request->program_id;
        $data['start_time'] = $request->start_time;
        $data['chat_status'] = $request->chat_status;
        $data['end_time'] = $request->end_time;
        $data['schedule_note'] = $request->schedule_note;
        $data['created_at'] = date('Y-m-d');
        $data['day'] = date('l', strtotime($request->schedule_date));
        $result = DB::table('schedules')->where('id', $id)->update($data);
        if ($result) {
            return redirect('admin/schedule-weekly')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/schedule-weekly')
                ->with('error', 'No successfully.');
        }

    }


    public function schedule_weekly()
    {
        $data['main'] = ' Schedule Weekly List ';
        $data['active'] = ' Schedule Weekly List  ';
        $data['title'] = '';
        $today = "Y-m-d";
        $data['programs'] = DB::table('programs')->get();
        $start_date = Carbon::now()->startOfWeek();
        $end_date = Carbon::now()->endOfWeek();
        $schedules = DB::table('schedules')->select('schedules.*', 'programs.program_name')->join('programs', 'programs.id', '=', 'schedules.program_id')
            ->where('schedule_date', '>', $start_date)
            ->where('schedule_date', '<', $end_date)
            ->orderBy('schedules.id', 'desc')

            ->paginate(50);
        return view('admin.schedule.schedule_weekly', compact('schedules'), $data);

    }


    public function schedule_weekly_pagination(Request $request)
    {
        if ($request->ajax()) {

            $start_date = Carbon::now()->startOfWeek();
            $end_date = Carbon::now()->endOfWeek();
            $schedules = DB::table('schedules')->join('programs', 'programs.id', '=', 'schedules.program_id')
                ->where('schedule_date', '>', $start_date)
                ->where('schedule_date', '<', $end_date)
                ->orderBy('schedules.id', 'desc')

                ->paginate(50);

            return view('admin.schedule.pagination_schedule_weekly', compact('schedules'));
        }

    }

    public function fetch_data_using_week(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('day_id');

            $start_date = Carbon::now()->startOfWeek();
            $end_date = Carbon::now()->endOfWeek();
            $schedules = DB::table('schedules')->select('schedules.*','program_name')->join('programs', 'programs.id', '=', 'schedules.program_id')
                ->where('schedule_date', '>=', $start_date)
                ->where('schedule_date', '<', $end_date)
                ->where('day', '=', $query)
                ->orderBy('schedules.id', 'desc')
                ->get();
           

            return view('admin.schedule.fetch_data_using_week', compact('schedules'));
        }
    }

    public function fetch_data_using_program_week(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('program_id');
            $start_date = Carbon::now()->startOfWeek();
            $end_date = Carbon::now()->endOfWeek();
            $schedules = DB::table('schedules')->select('schedules.*','program_name')->join('programs', 'programs.id', '=', 'schedules.program_id')
                ->where('schedule_date', '>', $start_date)
                ->where('schedule_date', '<', $end_date)
                ->where('program_id', '=', $query)
                ->orderBy('schedules.id', 'desc')
                ->get();

            return view('admin.schedule.fetch_data_using_week', compact('schedules'));
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user_id = 1;//AdminHelper::Admin_user_autherntication();
        $url = URL::current();

        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }

        $result = DB::table('schedules')->where('id', $id)->delete();
        if ($result) {
            return redirect('admin/schedules')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/schedules')
                ->with('error', 'No successfully.');
        }

    }

    public function schedule_weekly_delete($id)
    {
        $user_id = 1;//AdminHelper::Admin_user_autherntication();
        $url = URL::current();
        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }

        $result = DB::table('schedules')->where('id', $id)->delete();
        if ($result) {
            return redirect('admin/schedule-weekly')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('admin/schedule-weekly')
                ->with('error', 'No successfully.');
        }
    }

    public function weakly_data_delete($id)
    {
        $user_id = 1;//AdminHelper::Admin_user_autherntication();
        $url = URL::current();
        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }

        $result = DB::table('schedules')->where('id', $id)->delete();
        if ($result) {
            return redirect('schedules/schedule-weekly-day-view')
                ->with('success', 'Deleted successfully.');
        } else {
            return redirect('schedules/schedule-weekly-day-view')
                ->with('error', 'No successfully.');
        }
    }

    public function weekly_day_view_edit($id){

        $data['programs'] = DB::table('programs')->get();
        $data['schedule'] = DB::table('schedules')->where('id', $id)->first();
        return view('admin.schedule.schedule_weekly_day_view_edit', $data);
    }
    public function weekly_day_view_update(Request $request,$id){
        $data['schedule_date'] = date('Y-m-d', strtotime($request->schedule_date));
        $data['program_id'] = $request->program_id;
        $data['start_time'] = $request->start_time;
        $data['chat_status'] = $request->chat_status;
        $data['end_time'] = $request->end_time;
        $data['schedule_note'] = $request->schedule_note;
        $data['created_at'] = date('Y-m-d');
        $data['day'] =date('l', strtotime($request->schedule_date));

        $result = DB::table('schedules')->where('id', $id)->update($data);
        if ($result) {
            return redirect('schedules/schedule-weekly-day-view')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('/schedules/schedule-weekly-day-view')
                ->with('error', 'No successfully.');
        }
    }




}
