
  <footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
                <div class="col-md-4 column">
                  <h3>Company</h3>
                  <ul class="footer-gd-16">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Useful Links</h3>
                  <ul class="footer-gd-16">
                    <li><a href="registertrainer.php">Register as a Trainer</a></li>
					<li><a href="registertrainer.php">Register as a Dietician</a></li>
					<li><a href="registertrainer.php">Register as a Physiotherapist</a></li>
                    <li><a href="#url">Our Branches</a></li>
                    <li><a href="#url">Latest Media</a></li>
                    <li><a href="about.html">About Company</a></li>
                    <li><a href="#url">Our Packages</a></li>
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Our Services</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Privacy Policy</a></li>
                    <li><a href="#url">Our Terms</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="#">Landing Page</a></li>
                    <li><a href="#url">Our Agents</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
              <h3>Newsletter </h3>
              <div class="end-column">
                <h4>Get latest updates and offers.</h4>
                <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email Address" required="">
                  <button type="submit">Go</button>
                </form>
                <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
              </div>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2020 Homish. All rights reserved.Design by <a href="https://w3layouts.com/" target="_blank">
                  W3Layouts</a>
              </p>
            </div>
            <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                </li>
                <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>
  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 2,
            nav: false
          },
          1000: {
            items:2,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- video popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  <!-- //video popup -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>  