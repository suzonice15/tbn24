
<?php $__env->startSection('mainContent'); ?>

    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h2 class="subtitle " >Contact With Us</h2>
                        <div class="contact-form">

                                <?php if(Session::has('success')): ?>
                                    <div class="callout callout-success">


                                        <h4 style="color:green">
                                            <?php echo e(Session::get('success')); ?>


                                        </h4>
                                    </div>
                                <?php elseif(Session::has('error')): ?>
                                    <div class="callout callout-danger">


                                        <h4 style="color:red">
                                            <?php echo e(Session::get('error')); ?>


                                        </h4>
                                    </div>
                                <?php else: ?>

                                <?php endif; ?>

                                <form id="contact-form" method="post" action="<?php echo e(url('/')); ?>/contact" role="form">
<?php echo csrf_field(); ?>
                                <div class="form-group " data-wow-duration="500ms" data-wow-delay=".6s">
                                    <input type="text" placeholder="Your Name" class="form-control" required="required"
                                           name="name" id="name">
                                </div>

                                <div class="form-group " data-wow-duration="500ms" data-wow-delay=".8s">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email"
                                           id="email">
                                </div>

                                <div class="form-group " data-wow-duration="500ms" data-wow-delay="1s">
                                    <input type="text" placeholder="Subject" required="required" class="form-control"
                                           name="subject" id="subject">
                                </div>

                                <div class="form-group " data-wow-duration="500ms" data-wow-delay="1.2s">
                                    <textarea rows="6" placeholder="Message" required="required" class="form-control"
                                              name="message" id="message"></textarea>
                                </div>
                                <div class="row form-horizonal">
                                    <div class="form-group " data-wow-duration="500ms" data-wow-delay="1.2s">

                                        <div class="col-md-3">

                                           <div style="background: green;padding: 8px;color: white;font-style: italic;/*! font-variant-numeric: diagonal-fractions; */font-size: 17px;"> <?php echo e($number1); ?>+<?php echo e($number2); ?>=</div>

                                        </div>
                                        <div class="col-md-9">
                                            <input type="hidden" name="pure_capta" value="<?php echo e($sum); ?>">

                                            <input type="text" required="required" placeholder="Enter Capcha"
                                                   class="form-control" value=" " name="captcha" id="captcha">
                                        </div>


                                    </div>
                                </div>

                                <div id="submit" class="" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <input type="submit" id="contact-submit" class="btn btn-default btn-send"
                                           value="Send Message">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">


                    <div class="right-contact" style="background-color: #a69494;margin-top: 87px;padding-left: 24px;padding-top: 26px;padding-bottom: 275px;">
                        <ul>

                            <li style="font-size: 20px;color: white;"> <i class="icon-home"></i>

                                <?php echo e($google_map->contact_address); ?>


                            <li style="font-size: 20px;color: white;">

                                <i class="icon-envelope"></i>
                                <?php echo e($google_map->contact_email); ?>



                            </li>
                            <li style="font-size: 20px;color: white;">

                                <i class="icon-phone"></i>
                                <?php echo e($google_map->contact_phone); ?>


                            </li>
                        </ul>


                </div>
                </div>




                </div>

            <div class="row address-details">


                <div class="col-md-12 col-xs-12">
                <div class="map-area">
                    <h2 class="subtitle">Find Us</h2>
                    <div class="map">
                        <iframe src="<?php echo e($google_map->google_map); ?>"
                                style="border:0" allowfullscreen="" width="100%" height="400"
                                frameborder="0"></iframe>

                    </div>
                </div>
                </div>

            </div>
        </div>
    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/contact.blade.php ENDPATH**/ ?>