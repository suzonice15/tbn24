@extends('layouts.master')

@section('mainContent')
<div class="box-body">

<?php
         
$right_answer=DB::table('exams')->where('user_id',$user->user_id)->where('answer','=',1)->count();
        $wrong_answer=DB::table('exams')->where('user_id',$user->user_id)->where('answer','=',0)->count();
?>
    <div class="row">

    <div class="col-md-6 col-12">
    <table class="table table-bordered">
  
  <tbody>
  <tr>       
      <td colspan="2"><b>Personal Information</b></td>
     </tr>
  <tr>       
      <td scope="col">Name</td>
      <td scope="col">{{$user->name}}</td>
    </tr>

    <tr>       
      <td scope="col">Email </td>
      <td scope="col">{{$user->email}}</td>
    </tr>
    <tr>       
      <td scope="col">Father Name</td>
      <td scope="col">{{$user->father_name}}</td>
    </tr>
    <tr>       
      <td scope="col">Mother Name</td>
      <td scope="col">{{$user->mother_name}}</td>
    </tr>

    <tr>       
      <td scope="col">Birth Day</td>
      <td scope="col">{{$user->date_of_birth}}</td>
    </tr>
    
    <tr>       
      <td scope="col">Gender</td>
      <td scope="col">{{$user->gender}}</td>
    </tr>

    <tr>       
      <td scope="col">Maritus Status</td>
      <td scope="col">{{$user->maritus_status}}</td>
    </tr>

    <tr>       
      <td scope="col">Nationality </td>
      <td scope="col">{{$user->nationality}}</td>
    </tr>

    <tr>       
      <td scope="col">Region </td>
      <td scope="col">{{$user->region}}</td>
    </tr>
    
    <tr>       
      <td scope="col">Blood </td>
      <td scope="col">{{$user->blood}}</td>
    </tr>

    <tr>       
      <td scope="col">Present Address </td>
      <td scope="col">{{$user->present_address}}</td>
    </tr>

    <tr>       
      <td scope="col">Parmanent Address </td>
      <td scope="col">{{$user->parmanent_address}}</td>
    </tr>

    <tr>       
      <td scope="col">Nationalid </td>
      <td scope="col">{{$user->national_id}}</td>
    </tr>
    <tr>       
      <td scope="col">Educational Qualification</td>
      <td scope="col">{{$user->educational_qualification}}</td>
    </tr>
    <tr>       
      <td scope="col">Exparience </td>
      <td scope="col">{{$user->experience}}</td>
    </tr>

    <tr>       
      <td scope="col">Referance #1 </td>
      <td scope="col">{{$user->referene_1}}</td>
    </tr>

    <tr>       
      <td scope="col">Referance #2 </td>
      <td scope="col">{{$user->referene_2}}</td>
    </tr>
    
    
    
  </tbody>
</table>
    
    </div>
    
    <div class="col-md-3 col-12">
    <img  class="img-responsive" style="background-color: rebeccapurple;border: 1px solid #ddd;" src="{{url('/')}}/uploads/users/{{$user->my_picture}}"/>
    
    
    
    </div>

    <div class="col-md-3 col-12">
    <table class="table table-bordered" style="margin-top:5px">
  
  <tbody>
  
  <tr>       
      <td scope="col">Right Answer</td>
      <td scope="col">{{$right_answer}}</td>
    </tr>

    <tr>       
      <td scope="col">Wrong Anser </td>
      <td scope="col">{{$wrong_answer}}</td>
    </tr> 
    <tr>       
      <td scope="col">Cv  </td>
      <td scope="col"><a href="{{url('/')}}/uploads/users/{{$user->my_cv}}"><i class="fa fa-fw fa-download"></i></a></td>
    </tr>
  </tbody>
  </table>
    </div>

    <div class="col-md-6 col-12">
    <table class="table table-bordered" style="margin-top:5px">
  
  <tbody>
@if($exams)
@foreach($exams as $exam)
    <tr>       
      <td scope="col">{{$exam->question_title}}</td>
      <td scope="col">
      <?php if($exam->given_exam==1) {
        if($exam->given_exam==$exam->currect_answer){   
        ?>   
     <span style="color:green"> 1.{{$exam->option1}}</span>
     <?php } else { ?>
     
      <span style="color:red">  1.{{$exam->option1}}</span>
     <?php }  } else {  ?>
      <span style="color:black">  1.{{$exam->option1}}</span>

     <?php } ?>
      <br>
      <?php if($exam->given_exam==2) {
        if($exam->given_exam==$exam->currect_answer){   
        ?>   
     <span style="color:green"> 2.{{$exam->option2}}</span>
     <?php } else { ?>
     
      <span style="color:red">  2.{{$exam->option2}}</span>
     <?php }  } else {  ?>
      <span style="color:black">  2.{{$exam->option2}}</span>

     <?php } ?>
      <br>
      <?php if($exam->given_exam==3) {
        if($exam->given_exam==$exam->currect_answer){   
        ?>   
     <span style="color:green"> 3.{{$exam->option3}}</span>
     <?php } else { ?>
     
      <span style="color:red">  3.{{$exam->option3}}</span>
     <?php }  } else {  ?>
      <span style="color:black">  3.{{$exam->option3}}</span>

     <?php } ?>
      <br>
      <?php if($exam->given_exam==4) {
        if($exam->given_exam==$exam->currect_answer){   
        ?>   
     <span style="color:green"> 4.{{$exam->option4}}</span>
     <?php } else { ?>
     
      <span style="color:red">  4.{{$exam->option4}}</span>
     <?php }  } else {  ?>
      <span style="color:black">  4.{{$exam->option4}}</span>

     <?php } ?>
      
      </td>
    </tr>

    @endforeach
    @else
    <tr>       
      <td colspan="2">Candidate does not attend to exam</td>
       
    </tr>
    @endif

    
    
  </tbody>
  </table>
    </div>


       
    </div>
     
</div>
 

  @endsection

