<?php include('includes/header.php') ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-5" data-bg-img="assets/images/bg/01.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Contact us</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>

            <!-- Contact Form -->
            <form id="contact_form">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="hvr-glow btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="hvr-glow btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status === 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-6">
            <h3 class="line-bottom mt-0">Get in touch with us</h3>
            <p>Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus.</p>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
            </ul>

            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Our Faculty Location</h5>
                <p>#University Of Sindh Jamshoro, Sindh Pakistan</p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact Number</h5>
                <p><a href="tel:+325-12345-65478">+92-(0)22-9213181-90</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0"></h5>
                <p><a href="mailto:info@iict.usindh.edu.pk">info@iict.usindh.edu.pk</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.603478487094!2d68.26430821050583!3d25.418080323419805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c7969d688b2c7%3A0xbe153ec895be2a7d!2sFACULTY%20OF%20ENGINEERING%20AND%20TECHNOLOGY%20University%20Of%20Sindh!5e0!3m2!1sen!2s!4v1616096743926!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-111">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark pull-left ">
            <a href="index.html"><img width="" height="" id="logo" src="assets/images/FET-logo1.png" alt=""></a>
            <div class="pull-center logoname">
              <h4 style="color: white">Faculty of Engineering & Technology</h4>
              <h5 style="color: white"> University of Sindh, Pakistan</h5>
            </div>
          </div>
          <div class="widget dark">
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">University of sindh jamshoro, pakistan</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">+92-(0)22-9213181-90</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="mailto:info@iict.usindh.edu.pk">info@iict.usindh.edu.pk</a> </li>
            </ul>
          </div>
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Latest News</h5>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title">Useful Links</h5>
            <ul class="list-border">
              <li><a href="shortcode-sitemap.html">FAQ</a></li>
              <li><a href="shortcode-sitemap.html">Sitemap</a></li>
              <li><a href="page-contact1.html">Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-222">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="font-14 text-black-777 m-0 mb-10">2021 &copy; All Rights Reserved, Faculty of Engineering and Technology, University Of Sindh, Jamshoro</p>
          </div>
        </div>
      </div>
    </div>
  </footer>b
  <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="assets/js/custom.js"></script>

<?php include('includes/footer.php') ?>
