@extends('website.master')
@section('mainContent')


    <section id="about" style="padding-bottom: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="block wow fadeInLeft animated" data-wow-delay=".3s" data-wow-duration="500ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <h2>ABOUT US</h2>
                    <?php echo $about->page_content ?>

                </div>

            </div>

        </div>
    </div>
</section>



@endsection
