<?php
/*
Template Name: Contact Template
*/

get_header();
?>

<style type="text/css">
    .wpcf7-validation-errors{
        display: none;
    }
    .custom-radio-current2{
        color: #fff !important;
    }

    
</style>
<div class="clear"></div>



<div class="page-bg contact-bg">
    <div class="container">

        <div class="text-center caption">TELL US WHAT<br>YOU HAVE IN MIND</div>

    </div>
</div>



<section>
    <div class="content">

    <div class="container">

        <div class="text-center"><h3 class="text-center">GET A RESPONSE TODAY</h3>
            <div class="red-line"></div>
        </div>


        <div class="clear20"></div>

<div class="text-center">We love hearing about exciting new ideas. Your message will be confidentially sent to the TechVerx management. It'll be placed to the top of the stack and we'll respond to you today. If you'd prefer to speak to someone right away,<br>call us at +1-844-539-3562</div>

        <div class="clear40"></div><div class="clear20"></div>

        <div class="row btns">
            <div class="col-md-5 quick"><a href="#" class="btn btn-default btn-orange btn-block btn-orange-current btn-contact">QUICK MESSAGE</a></div>
            <div class="col-md-2 text-center"><div class="or-seprator">or</div></div>
            <div class="col-md-5 project"><a href="#" class="btn btn-default btn-orange btn-block btn-contact">KICK START PROJECT</a></div>
        </div>

        <div class="clear40"></div>

        <div class="frm-message lg-fields contact-main-form">

       <?php echo do_shortcode( '[contact-form-7 id="47" title="Contact Main"]' ); ?>
       <!--      <form class="lg-fields">
                <label>I am *</label>
                <input class="form-control" value="" class="" id="">
                <div class="clear40"></div>
                <label>My email *</label>
                <input class="form-control" value="" class="" id="">
                <div class="clear40"></div>
                <label>Message *</label>
                <textarea class="form-control padding-normal" value="" class="" id="" rows="5"></textarea>
                <div class="clear40"></div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" checked="checked"> Keep me updated with Techverx USA news and goodies
                    </label>
                </div>

                <div class="clear30"></div>
                <div class="text-center"><button class="btn btn-default btn-orange btn-orange-current btn-contact-2">SEND MESSAGE</button></div>
            </form> -->

            <div class="clear40"></div>

        </div>

        <div class="frm-project lg-fields project-contact-form">

          <?php echo do_shortcode( '[contact-form-7 id="50" title="Project Form"]' ); ?>
<!-- 
            <form class="lg-fields">

                <div class="row">
                    <div class="col-md-6">
                        <label>I am *</label>
                        <input type="text" class="form-control" value="" class="" id="">
                    </div>
                    <div class="col-md-6">
                        <label>My email *</label>
                        <input type="email" class="form-control" value="" id="">
                    </div>
                </div>

                <div class="clear40"></div>
                <label>My phone *</label>
                <input type="text" class="form-control" value="" id="">
                <div class="clear40"></div>
                <label>My company *</label>
                <input class="form-control" value="" id="">
                <div class="clear40"></div>
                <label>My location *</label>
                <input class="form-control" value="" id="">
                <div class="clear40"></div>
                <label>Project/Idea overview*</label>
                <textarea class="form-control padding-normal" value="" class="" id="" rows="5"></textarea>
                <div class="clear40"></div>



                <label>Project Type</label>

                <div class="row custom-check">
                    <div class="col-md-4">
                        <div class="checkbox">
                        <input type="checkbox" class="hidden-check">
                            <label class="btn-orange btn-contact-2 click-change">
                               Web Application
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="checkbox">
                        <input type="checkbox" class="hidden-check">
                            <label class="btn-orange btn-contact-2 click-change">
                              Mobile App
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="checkbox">
                        <input type="checkbox" class="hidden-check">
                            <label class="btn-orange btn-contact-2 click-change">
                               Ecommerce
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row custom-check">
                    <div class="col-md-4">
                        <div class="checkbox">
                        <input type="checkbox" class="hidden-check">
                            <label class="btn-orange btn-contact-2 click-change">
                               Code Review
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="checkbox">
                        <input type="checkbox" class="hidden-check">
                            <label class="btn-orange btn-contact-2 click-change">
                               Web Design
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="checkbox">
                        <input type="checkbox" class="hidden-check trigger-other">
                            <label class="btn-orange btn-contact-2 click-change">
                               Other
                            </label>
                        </div>
                    </div>
                </div>

              <div class="row specify-other">
                <div class="clear40"></div>
                <label>Please Specify</label>
                <input class="form-control" value="" class="" id="">
              </div>


                <div class="clear40"></div>


                <label>Ideal Start Date?</label>
                <div class="row text-left custom-radios">
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio" name="optionsRadiosDate" id="optionsRadios1" value="option1" checked>
                            <div class="custom-radio first-radio">Immediately</div>
                          </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio" name="optionsRadiosDate" id="optionsRadios2" value="option2">
                            <div class="custom-radio">This Month</div>
                          </label>
                        </div>
                    </div>
                </div>
                <div class="row text-left custom-radios">
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio" name="optionsRadiosDate" id="optionsRadios3" value="option3">
                            <div class="custom-radio">Near Future</div>
                          </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio" name="optionsRadiosDate" id="optionsRadios4" value="option4">
                            <div class="custom-radio">This Year</div>
                          </label>
                        </div>
                    </div>
                </div>
                <div class="clear40"></div>


                <label>Bullpark Budget?</label>
                <div class="row text-left custom-radios2">
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio2" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            <div class="custom-radio2 first-radio">Under $25K</div>
                          </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio2" name="optionsRadios" id="optionsRadios2" value="option2">
                            <div class="custom-radio2">$25k - $50k</div>
                          </label>
                        </div>
                    </div>
                </div>
                <div class="row text-left custom-radios2">
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio2" name="optionsRadios" id="optionsRadios3" value="option3">
                            <div class="custom-radio2">$50k - $100k</div>
                          </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                          <label>
                            <input type="radio" class="realradio2" name="optionsRadios" id="optionsRadios4" value="option4">
                            <div class="custom-radio2">Not Sure</div>
                          </label>
                        </div>
                    </div>
                </div>
                <div class="clear40"></div>



                <label>Anything else we need to know</label>
                <textarea class="form-control padding-normal" value="" class="" id="" rows="5"></textarea>
                <div class="clear40"></div>

                <label>I heard about Techverx USA through</label>
                <input class="form-control" value="" class="" id="">
                <div class="clear40"></div>

                <label>Some useful files (if any):</label>
                <input type="file" class="form-control file" class="" id="">
                <div class="clear40"></div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" checked="checked"> Keep me updated with Techverx USA news and goodies
                    </label>
                </div>

                <div class="clear30"></div>
                <div class="text-center"><button class="btn btn-default btn-orange btn-orange-current btn-contact-2">SEND PROJECT REQUEST</button></div>
            </form> -->

            <div class="clear40"></div>

        </div>

    </div>
</div>
</section>
<?php get_footer();?>