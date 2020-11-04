@extends('website.master')
@section('mainContent')

     
    <br> <br>
    <br>

      <div class="container">
        <div class="row">
            <div class="col-md-12">
           
			<br>  
			<br>  
    <?php
    if(election()){
        echo election();
    }

    ?>

	   </div>
    </div>
    </div>

@endsection
