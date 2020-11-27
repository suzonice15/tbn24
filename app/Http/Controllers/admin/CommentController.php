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

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $time_zone = get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
        $this->middleware('AdminLoginCheck');
    }

    public function index()
    {

        $data['main'] = ' Comments List ';
        $data['active'] = ' Comments List ';
        $data['title'] = '  ';
        $data['comments'] = DB::table('comments')->select('comments', 'created_data', 'comment_id', 'created_data', 'name', 'email', 'post_title')
            ->join('post', 'post.post_id', '=', 'comments.post_id')
            ->where('status', 0)
            ->orderBy('comment_id', 'desc')->paginate(50);
        return view('admin.comment.index', $data);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $comments =  DB::table('comments')->select('comments', 'created_data', 'comment_id', 'created_data', 'name', 'email', 'post_title')
                ->join('post', 'post.post_id', '=', 'comments.post_id')
                ->orWhere('post_title', 'like', '%' . $query . '%')
                ->where('status', 0)
                ->paginate(50);
            return view('admin.comment.pagination', compact('comments'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.playlist.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['playlist_name'] = $request->playlist_name;
        $data['playlist_link'] = $request->playlist_link;
        $data['playlist_status'] = $request->playlist_status;
        $data['order_by'] = $request->order_by;


        $result = DB::table('playlists')->insert($data);
        if ($result) {
            return redirect('admin/playlist')
                ->with('success', 'created successfully.');
        } else {
            return redirect('admin/playlist')
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
        $data['comment'] = DB::table('comments')->where('comment_id', $id)->first();
        return view('admin.comment.edit', $data);


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
        $data['comments'] = $request->comments;
        $data['status'] = $request->status;


        $result = DB::table('comments')->where('comment_id', '=', $id)->update($data);
        if ($result) {
            return redirect('admin/comment')
                ->with('success', 'Updated successfully.');
        } else {
            return redirect('admin/comment')
                ->with('error', 'No successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request)
    {
        if (isset($request->comment_id)) {
            foreach ($request->comment_id as $id) {
                $result = DB::table('comments')->where('comment_id', $id)->delete();
            }

            if ($result) {
                return redirect('admin/comment')
                    ->with('success', 'Deleted successfully.');
            } else {
                return redirect('admin/comment')
                    ->with('error', 'No successfully.');
            }

        }


    }
}
