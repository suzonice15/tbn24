
@extends('layouts.master')
@section('pageTitle')
    Add New Page
    @endsection
@section('mainContent')
<div class="box-body">

<div class="row">
        
    </div>

<form   style="height:500px;" class="form app-lb-ajax-form bv-form" enctype="multipart/form-data" action="{{ url('admin/question/update') }}/{{ $question->question_id }}" method="post" >
    @csrf
    <div class="row ">

        <div class="clearfix form-horizontal">

            <div class="row">
                <div class="col-md-8 col-sm-8">


                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">Qeustion Name</label>
                            <div class="col-md-9">
                                <input required id="question_title" name="question_title" placeholder="question title" autocomplete="off" type="text"   value="{{$question->question_title}}" class="form-control"   >
                                 
                            </div>
                        </div> 

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">option1</label>
                            <div class="col-md-9">
                                <input required id="option1" name="option1"   value="{{$question->option1}}" placeholder="option1" autocomplete="off" type="text"     class="form-control"   >
                                 
                            </div>
                        </div> 

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">option2</label>
                            <div class="col-md-9">
                                <input required id="option2" name="option2" placeholder="option2" autocomplete="off" type="text"   value="{{$question->option2}}" class="form-control"   >
                                 
                            </div>
                        </div> 


                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">option3</label>
                            <div class="col-md-9">
                                <input required id="option3" name="option3" placeholder="option3" autocomplete="off" type="text"   value="{{$question->option3}}" class="form-control"   >
                                 
                            </div>
                        </div> 

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">option4</label>
                            <div class="col-md-9">
                                <input required id="option4" name="option4" placeholder="option4" autocomplete="off" type="text"   value="{{$question->option4}}" class="form-control"   >
                                 
                            </div>
                        </div> 

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">Currect Answer</label>
                            <div class="col-md-9">
                                <input required id="option4" min="1" max="4" name="currect_answer" placeholder="1" autocomplete="off" type="number"  value="{{$question->currect_answer}}"  class="form-control"   >
                                 
                            </div>
                        </div> 

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name"> </label>
                            <div class="col-md-9">

                            <button type="submit" class="btn btn-success btn-sm">Submit</button>

                            </div>
                        </div> 
                       
                       
                        </div>
                          
                </div>

            </div>


        </div>
         


    </div>
</form>

</div>
@endsection



