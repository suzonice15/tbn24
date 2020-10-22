@extends('website.master')
@section('mainContent')



<section id="about" style="padding-bottom: 10px;">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5">
				<div class="block" style="visibility: visible;">

					<img   width="100%" src="{{url('/')}}/public/uploads/program/{{$program->program_image}}" alt="{{$program->program_name}}" class="img-thumbnail img-responsive">
					<h2>{{$program->program_name}}</h2>
					<p class="text-justify">

					 {{$program->program_details}}

					</p>


				</div>

			</div>
			<div class="col-md-7 col-sm-7">

				<div class="panel panel-default" style="
    margin-top: 19px;
" >
					<div class="panel-heading" style="background-color:#CB0000;color:white;text-align: center" > Weekly Schedule List
					</div>
					<div class="panel-body">

						<table class="table table-bordered">
							<thead>
							<tr>
								<th style="text-align: center">Date</th>
								<th style="text-align: center">Day</th>
								<th style="text-align: center">Show Time</th>

							</tr>
							</thead>
							<tbody>

							<?php if($schedules) {
							foreach ($schedules as $schedule){
							?>
							<tr>

								<td style="text-align: center">{{ date("d-m-Y",strtotime($schedule->schedule_date))}}</td>
								<td style="text-align: center">{{$schedule->day}}</td>
								<td style="text-align: center">{{ date("h:i a",strtotime($schedule->start_time))}}  - {{ date("h:i a",strtotime($schedule->end_time))}}</td>



							</tr>
							<?php }}?>

							</tbody>
						</table>

					</div>
				</div>


			</div>

		</div>
	</div>
</section>


<section id="about" style="padding-bottom: 10px;">
	<span class="program-playlist"></span>

</section>

<input type="hidden" id="program_id" value="<?php echo $program->youtube ?>">
<script>
var playlist_id= $('#program_id').val();

	$.ajax({
		type:"GET",
		url:"{{url('get-single-playlist-by-program-id')}}/"+playlist_id,
		success:function(data)
		{

			$('.program-playlist').html(data);

		}
	})
</script>



@endsection
