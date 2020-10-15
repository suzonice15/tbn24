@extends('website.master')
@section('mainContent')


    <section id="about" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">


                            <div class="block wow fadeInLeft animated" >
                                <h3>  <?php echo $document->document_title; ?></h3>

                                <?php echo $document->document_description; ?>


                                <a href="{{$document->document_download}}" click="" to=""
                                   download=""> <h1>Click to Download</h1>
                                </a>
                            </div>




                </div>
            </div>
        </div>
    </section>




@endsection
