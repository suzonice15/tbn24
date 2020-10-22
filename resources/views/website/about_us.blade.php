@extends('website.master')
@section('mainContent')


    <section id="about" style="padding-bottom: 10px;height: 500px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="block wow  " >
                    <h2>ABOUT US</h2>
                    <?php echo $about->page_content ?>

                </div>

            </div>

        </div>
    </div>
</section>



@endsection
