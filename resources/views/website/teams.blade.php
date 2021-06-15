@extends('website.master')
@section('mainContent')

    <style>
        .memberTitle {
            font-family: eina_semibold, sans-serif;
            font-size: 24px;
            line-height: 32px;
            text-align: center;
            font-weight: bold;
            margin-top: -31px;
            color: white;
        }

        .memberSubTitle {
            font-family: eina_semibold, sans-serif;
            font-size: 16px;
            line-height: 18px;
            text-align: center;
            margin-top: -12px;
            color: white;

        }

        .title-class:hover {
            border-bottom: 3px solid white;

        }

    </style>


    <section id="works" class="works" style="background-color: white;margin-top: 90px">
        <div class="container">
            <div class="row" style="color:black">
                <div class="col-md-4"><br><br>
                    <h2>Meet Our Team
                    </h2>

                    <p>

                        Our team is your team. When your mission is to be better, faster and smarter, you need the best
                        people driving your vision forward. You need people who can create focused marketing strategies
                        that align with business goals, who can infuse their creativity into groundbreaking campaigns,
                        and who can analyze data to optimize every tactic along the way. You need Walker Sands. Get to
                        know your team below.
                    </p>

                    <div class="form-group">
                        <label>Filter by Department:</label>
                        <select class="form-control" id="department_id">
                            <?php if($departments) {
                                foreach($departments as $department) {

                                ?>
                            <option value="{{$department->department_id}}">{{$department->department_name}}</option>

                            <?php } }?>

                        </select>
                    </div>


                </div>

                <div class="col-md-8" style="position: relative;
                 right: -120px;">

                    <img class="img-responsive col-xs-12"
                         src="https://1bnznaaikg11oqsn3tvx88r9-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/about_team.jpg">
                </div>

            </div>




        </div>





    </section>
    <br>
    <br>

    <section id="works" class="works" style="background-color: #041C2C;padding-top: 36px;
">
        <div class="container">

            <div class="row">
                <h2 style="color:white;margin-left:15px">All Department Member</h2>


                        <span id="post-data">

                               @include('website.ajax_teams')
                        </span>

            </div>
        </div>
    </section>










    <script type="text/javascript">


        $("#department_id").change(function () {
          let department_id=  $(this).val();

            if(department_id){
                var url = base_url_main + "/ajax_team/"+department_id;
                jQuery.ajax(
                        {
                            url: url,
                            type: "get",
                        }).done(function (data) {
                     console.log(data)
                    if (data.html == " ") {


                        return false;

                    }
                    jQuery("#post-data").html(data);
                });
            }
        })


    </script>


@endsection
