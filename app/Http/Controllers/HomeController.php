<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {



    }

    public function index()
    {
       // $ip = '103.92.214.7';//\Request::ip();
        $ip = '72.229.28.185';
        $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test"));
        $county= $details->country_code;
        if($county=='BD'){
            $data['api']= get_bd_api();
        } else {
            $data['api']= get_api();
        }


        $today="Y-m-d";
        $data['about']=DB::table('page')->select('page_content')->where('page_link','about-us')->first();
        $data['programs']=DB::table('programs')->paginate(6);
        $data['today_programs']=DB::table('programs')
                                ->join('schedules','schedules.program_id','=','programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))

                                ->orderBy('start_time','desc')->get();


        
         return view('website.home',$data);
    }
   

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all_program()
    {

       $data['programs'] =DB::table('programs')
         
           ->orderBy('programs.id','DESC')->paginate(6);
        return view('website.all_program',$data);
     }

    public function today_schedule()
    {

        $data['today_programs']=DB::table('programs')
            ->join('schedules','schedules.program_id','=','programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))

            ->orderBy('start_time','desc')->get();
        return view('website.today_schedule',$data);
    }
    public  function  ajax_program(Request $request){
        if($request->ajax())
        {         
            $programs =DB::table('programs')->orderBy('id','DESC')->paginate(6);
            $view = view('website.ajax_all_program',compact('programs'))->render();
            return response()->json(['html'=>$view]);
        }

    }
    public   function single_program($id){

        $data['program']=DB::table('programs')->
            where('id','=',$id)->first();
       return  view('website.single_program',$data);
      }
    public function about(){
        $data['about']=DB::table('page')->select('page_content')->where('page_link','about-us')->first();
       return view('website.about_us',$data);
     }
    public function documents(){
        $data['about']=DB::table('page')->select('page_content')->where('page_link','documents')->first();
        return view('website.documents',$data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function product($product_name)
    {
       // $data['categories']=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();
        $data['product']=DB::table('product')->select('*')->join('product_relation','product_relation.product_id','product.product_id')->where('product_name',$product_name)->first();
        if(empty($data['product'])){
            return redirect('/');
        }
        $category_row =DB::table('product')->select('category_title','category_name')->join('product_category_relation','product_category_relation.product_id','=','product.product_id')->join('category','category.category_id','=','product_category_relation.category_id')->where('product_name',$product_name)->orderBy('category.category_id','DESC')->first();


$data['category_name']=$category_row->category_name;
$data['category_title']=$category_row->category_title;
        return view('website.product',$data);
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search_engine(Request $request)
    {
        $search_query = $request->search_query;



        $search_query = str_replace(" ", "%", $search_query);
        $data['products'] = DB::table('product')->select('product_title','folder','feasured_image','product_price','sku','discount_price', 'product_name')->where('sku','LIKE','%'.$search_query.'%')
            ->orWhere('product_title','LIKE','%'.$search_query.'%')->paginate(10);
        $data['search_query']=$search_query;

        $view = view('website.search_engine',$data)->render();
        return response()->json(['html'=>$view]);



    }

    public  function search(Request $request){
        $search_query = $request->search;

        $search_query = str_replace(" ", "%", $search_query);
        $products= DB::table('product')->select('product_id','product_title','folder','feasured_image','product_price','sku','discount_price', 'product_name')->where('sku','LIKE','%'.$search_query.'%')
            ->orWhere('product_title','LIKE','%'.$search_query.'%')->get();
        if(count($products)==1){
            $product_url=url('/product').'/'.$products[0]->product_name;
          //  redirect($product_url;
            return redirect("$product_url");

        }
            return view('website.search', compact('products'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function track_order(Request $request)
    {
        if($request->mobile){
            $data['mobile']=$request->mobile;
           $data['order']= DB::table('order_data')->where('customer_phone',$request->mobile)->orderBy('order_id','desc')->first();

$data['mobile']=$request->mobile;

            return view('website.track_order_page',$data);
        } else {
            return view('website.track_order_page');
        }
    }
    public function page($url){
        $data['page']=DB::table('page')->select('*')->where('page_link',$url)->first();
        return view('website.page',$data);

    }
}
