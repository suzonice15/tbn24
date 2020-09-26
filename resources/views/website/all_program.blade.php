@extends('website.master')
@section('mainContent')


    <section id="works" class="works">
        <div class="container">
            <br>
            <div class="section-heading" style="margin-top: 92px; margin-bottom: 10px;">
                <h1 class="title wow fadeInDown animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">Our Programs</h1>
            </div>

            <div class="row">


                        <span id="post-data">

                               @include('website.ajax_all_program')
                        </span>

               </div>
        </div>
    </section>










    <script type="text/javascript">

        var page = 1;
        //jQuery('.ajax-load').show();
        jQuery(window).scroll(function() {
            page++;
            loadMoreData(page);
        });
        function loadMoreData(page){

            var url=base_url_main+"/ajax_program?page="+page;
            jQuery.ajax(

                    {
                        url:url,
                        type: "get",
                    }).done(function(data){
                        // console.log(data.html)
                        if(data.html == " "){


                            return false;

                        }
                        jQuery("#post-data").append(data.html);
                    })

                    .fail(function(jqXHR, ajaxOptions, thrownError)

                    {

                        // alert('server not responding...');

                    });

        }


    </script>


@endsection
