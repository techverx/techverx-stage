

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 left">
                        <h4>TECHVERX USA</h4>
                        <p>15403 Foster Drive North <br>Hugo, Minnesota 55038<br>+1 845 205 5842</p>
                        <div class="clear10"></div>
                        <h4>TECHVERX HOUSE</h4>
                        <p>335 R, Main Boulevard,<br>Johar Town, Phase II<br>Lahore, Pakistan<br>+92 42 35956398</p>
                        <div class="clear10"></div>
                        <h4>DROP US A LINE</h4>
                        <p><a href="mailto:hello@techverx.com">hello@techverx.com</a></p>
                    </div>
                    <div class="col-md-4 col-sm-4 middle text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/images/techverx-bottom.gif" class="img-responsive center-block">
                        <div class="clear40"></div>
                        <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/techverx-logo.png" class="img-responsive center-block"></a>
                        <div class="clear40"></div>
                        <a href="<?php echo site_url(); ?>">HOME</a> / 
                        <a href="<?php echo get_page_link(8); ?>">ABOUT</a><br>
                        <a href="<?php echo get_page_link(12); ?>">SERVICES</a> / 
                        <a href="<?php echo get_page_link(14); ?>">WORK</a><br>
                        <a href="<?php echo get_page_link(29); ?>">TEAMS</a> / 
                        <a href="<?php echo get_page_link(32); ?>">CONTACT</a><br>
                        <a href="<?php echo get_page_link(35); ?>">BLOG</a>
                    </div>
                    <div class="col-md-4 col-sm-4 right text-center">
                        <h4>FOLLOW US</h4>
                        <div class="clear10"></div>
                        <div class="socials">
                            <a href="https://www.linkedin.com/company/techverx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/b-linkedin.gif"></a>
                            <a href="https://www.facebook.com/TechVerx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/b-facebook.gif"></a>
                            <a href="https://twitter.com/TechVerx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/b-twitter.gif"></a>
                            <br>
                           
                          <!--   <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/b-google.gif"></a>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/b-instagram.gif"></a>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/b-youtube.gif"></a>
                         -->
                        </div>
                        <div class="clear20"></div>
                        <h4>JOIN OUR<br>NEWSLETTER</h4>
                        <div class="clear10"></div>
                        <div class="text-center">
                        <!-- <input class="form-control width-auto"> -->
                        <?php get_sidebar('newsletter'); ?>
                        </div>
                    </div>
                </div>

                <div class="clear20"></div>

                <div class="copyrights text-center">
                   TECHVERX USA © MMXVI
                </div>

            </div>            
        </div>
<!-- Scripts Start -->
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/techverx/jquery-1.11.3.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/techverx/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/techverx/jquery.flexslider.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/techverx/custom.js"></script>
<!-- Scripts End -->

<div class="modal fade" id="hireTeam" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
   <?php echo do_shortcode( '[contact-form-7 id="49" title="Hiring Form"]' ); ?>
   </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>

