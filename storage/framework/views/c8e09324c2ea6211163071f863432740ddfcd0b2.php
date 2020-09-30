

<?php $__env->startSection('mainContent'); ?>


<style>

   .body-wrapper{margin-top:50px}
     .account-sidebar .innerbox{border:1px solid #ddd;border-radius:5px}
     .account-sidebar .coverphoto{padding:15px;text-align:center}
     .account-sidebar .coverphoto img{border:1px solid #ddd;width:100px;height:100px;border-radius:50%}
      .account-sidebar .coverphoto .name{font-size:24px;font-weight:600;color:#5b5855}
      .account-sidebar ul{margin-top:15px;padding-top:15px;border-top:1px solid #ddd}

     .account-content .page-header{margin:0px;margin-bottom:25px;padding:0px 0px 15px 0px;border-radius:5px}
     .account-content .page-header h1{margin:0px;font:600 20px "ProximaNova", sans-serif;line-height:1;color:#f77274;}
     .account-content .success-txt{padding:0px 0px 5px 0px;}

</style>

<div class="body-wrapper" style="margin-top:100px">
    <div class="container">
        <div class="profile">
            <div class="row">
                <div class="col-sm-3 account-sidebar">
                    <div class="innerbox">
                        <div class="coverphoto">

                            <?php
                            $picture=Session::get('user_picture');
                                if($picture){

                            ?>
                            <img class="avatar" src="<?php echo e(url('/')); ?>/public/uploads/users/<?php echo e($picture); ?>">

                                <?php } else { ?>

                                <img class="avatar" src="https://www.village-bd.com/images/avtar.jpg">

                            <?php }?>



                            <div class="name"> <?php echo e(Session::get('name')); ?></div>
                        </div>
                        <ul class="nav">
                            <li><a href="<?php echo e(url('/')); ?>/myaccount">  My Profile </a></li>

                            <li><a href="<?php echo e(url('/')); ?>/customer/password/changed">  Change
                                    Password </a></li>
                            <li> <a href="<?php echo e(url('/')); ?>/customer/photo/changed">  Change Photo </a> </li>
                            <li><a href="<?php echo e(url('/')); ?>/customer/logout">  Logout </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 account-content">

                    <?php echo $__env->yieldContent('customerContent'); ?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/customer/my_account_home.blade.php ENDPATH**/ ?>