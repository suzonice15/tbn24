<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  Cart;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
          $items = \Cart::getContent();


      $data['categories']=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();

        return view('website.checkout',$data);
    }
    public  function checkoutStore(Request $request){
         $data['order_status'] ='new';
        $data['shipping_charge'] = $request->shipping_charge;
        $data['created_time'] = date("Y-m-d h:i:s");
        $data['created_by'] = 'Customer';
     //$data['modified_time'] = date("Y-m-d h:i:s");
        $data['order_date'] = date("Y-m-d");
        $data['order_total'] =$request->order_total;
        $data['products'] = serialize($request->products);
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_address'] = $request->customer_address;
        $data['staff_id'] = 0;
         $data['payment_type'] = $request->payment_type;
        $data['order_area'] = $request->order_area;
        //// $customer_name = $data['customer_name'];
        // $customer_email = $data['customer_email'];
        // $site_title = get_option('site_title');
        // $site_email = get_option('email');




        $order_id=DB::table('order_data')->insertGetId($data);


        $row_data['order_id']= $order_id;


        if ($order_id) {
            $product_ids = $request->product_id;
//            foreach ($product_ids as $product_id){
//                $product_row = single_product_information($product_id);
//              $row_data['vendor_id']= $product_row->vendor_id;
//              $row_data['product_id']= $product_id;
//              $row_data['order_date']=  $data['order_date'] ;
//             // DB::insert('vendor_orders',$row_data);
//                DB::table('vendor_orders')->insertGetId($row_data);
//            }


            return  redirect('thank-you?order_id='.$order_id);
        } else {

            return redirect('/chechout')->with('error', 'Error to Create this order');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thankYou(Request $request)
    {
        $items = \Cart::clear();

        $id= $request->order_id;
        $data['order']=DB::table('order_data')->where('order_id',$id)->first();
        $data['categories']=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();

        return view('website.thank_you',$data);



    }
    public function cart(){

   /////     $data['order']=DB::table('order_data')->where('order_id',$id)->first();
    //    $data['categories']=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();

        return view('website.cart');

    }

    public  function  plus_cart_item(Request $request){
        if($request->ajax())
        {

            $product_id = $request->get('product_id');
            Cart::update($product_id, array(
                'quantity' => 1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            ));

            //  return view('website.category_ajax', compact('products'));
            $view = view('website.cart_ajax')->render();
            $items = \Cart::getContent();
            //Cart::clear();
            $total=0;
            $quantity=0;
            foreach($items as $row) {

                $total = \Cart::getTotal();
                $quantity +=$row->quantity;

            }
            $quantity= Cart::getContent()->count();
//        $data['total']=$total;
//        $data['count']=$quantity;
            $data1=[
                'total'=>$total,
                'count'=>$quantity,
            ];

           // return response()->json(['result'=>$data1]);

            return response()->json(['html'=>$view,'result'=>$data1]);
        }

    }

    public function minus_cart_item(Request $request){
        if($request->ajax())
        {

            $product_id = $request->get('product_id');
            Cart::update($product_id, array(
                'quantity' => -1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            ));

            //  return view('website.category_ajax', compact('products'));
            $view = view('website.cart_ajax')->render();

            $items = \Cart::getContent();
            //Cart::clear();
            $total=0;
            $quantity=0;
            foreach($items as $row) {

                $total = \Cart::getTotal();
                $quantity +=$row->quantity;

            }
            $quantity= Cart::getContent()->count();
//        $data['total']=$total;
//        $data['count']=$quantity;
            $data1=[
                'total'=>$total,
                'count'=>$quantity,
            ];

            // return response()->json(['result'=>$data1]);

            return response()->json(['html'=>$view,'result'=>$data1]);
        }

    }
    public function remove_cart_item(Request $request){
        if($request->ajax())
        {

            $product_id = $request->get('product_id');
            Cart::remove($product_id);
            //  return view('website.category_ajax', compact('products'));
            $view = view('website.cart_ajax')->render();

            $items = \Cart::getContent();
            //Cart::clear();
            $total=0;
            $quantity=0;
            foreach($items as $row) {

                $total = \Cart::getTotal();
                $quantity +=$row->quantity;

            }
            $quantity= Cart::getContent()->count();
//        $data['total']=$total;
//        $data['count']=$quantity;
            $data1=[
                'total'=>$total,
                'count'=>$quantity,
            ];

            // return response()->json(['result'=>$data1]);

            return response()->json(['html'=>$view,'result'=>$data1]);
        }

    }
    public function add_to_wishlist(Request $request)
    {
       // $request->session()->put('my_name','Virat Gandhi');
        $wishlist = array();
        $product_id=$request->product_id;
        if($request->session()->has('wishlist')){
           // $wishlist = $this->session->userdata('wishlist');
            $wishlist=$request->session()->get('wishlist');

        }
        array_push($wishlist, $product_id);

        $wishlist = array_unique($wishlist);

        $request->session()->put('wishlist', $wishlist);




    }

    public  function wishlist(Request $request){

        $wishlist=$request->session()->get('wishlist');

        if($request->session()->has('wishlist'))
        {
            $wishlist=$request->session()->get('wishlist');
            $data['products']=DB::table('product')->whereIn('product_id',$wishlist)->get();

        } else {
            $data['products']='';

        }



        return view('website.wishlist',$data);


    }
    public function remove_wish_list(Request $request)
    {
        $wishlist = array();

        $product_id=$request->product_id;
        if($request->session()->has('wishlist')){
            // $wishlist = $this->session->userdata('wishlist');
            $wishlist=$request->session()->get('wishlist');

        }

            $key = array_search($product_id, $wishlist);

            unset($wishlist[$key]);

            $wishlist = array_values($wishlist);

            ///  $this->session->set_userdata('wishlist', $wishlist);
            $request->session()->put('wishlist', $wishlist);


        $products=DB::table('product')->whereIn('product_id',$wishlist)->get();

        $view = view('website.wishlist_ajax',compact('products'))->render();

        return response()->json(['html'=>$view]);


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
