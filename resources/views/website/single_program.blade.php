@extends('website.master')
@section('mainContent')



<section id="about" style="padding-bottom: 10px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="block   " style="visibility: visible;">
					<h2>{{$program->program_name}}</h2>
					<p class="text-justify" style="min-height: 500px;">

					 {{$program->program_details}}

					</p>
					

				</div>

			</div>
			<div class="col-md-4 col-sm-4">
								<img width="100%" src="{{url('/')}}/public/uploads/program/{{$program->program_image}}" alt="{{$program->program_name}}" class="img-thumbnail img-responsive">
							</div>

		</div>
	</div>
</section>


@endsection
