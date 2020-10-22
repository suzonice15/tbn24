@extends('website.master')
@section('mainContent')


    <section id="about" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                  @if($documents)
                      @foreach($documents as $document)
                    <div class="block wow fadeInLeft animated" >
                        <h3> <a href="{{url('/')}}/document-details/{{$document->document_parmalink}}" > <?php echo $document->document_title; ?></a></h3>

                        <?php echo read_more($document->document_description,600); ?>


        <a href="{{$document->document_download}}"  class="btn btn-success pull-right"
           download="">Click to Download
        </a>
                        </div>


                  @endforeach
                      @endif


                        </div>
                        </div>
                        </div>
    </section>




@endsection
