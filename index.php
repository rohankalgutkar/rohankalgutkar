<?php
  $from = new DateTime('1994-06-19');
  $to   = new DateTime('today');
  $age = $from->diff($to)->y;
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="UTF-8">

    <title>Rohan Kalgutkar • Web Designer & Graphic Artist</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="I create beautiful responsive websites and design epic logos. Based in Mumbai.">
    <meta name="keywords" content="Rohan, Kalgutkar, Rohan Kalgutkar, Mumbai, Web, Web Designer, Design, Logo">
    <meta name="author" content="Rohan Kalgutkar">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--    Favicons    -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <div class="preloader">
      <div class="spinner">
        <span class="spinner-rotate"></span>
      </div>
    </div>


    <!-- NAVIGATION SECTION -->
    <div class="navbar custom-navbar navbar-fixed-top" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="smoothScroll" href="#home">Home</a></li>
            <li><a class="smoothScroll" href="#about">About</a></li>
            <li><a class="smoothScroll" href="#contact">Contact</a></li>
          </ul>
        </div>

      </div>
    </div>


    <!-- HOME SECTION -->
    <section id="home">

      <div class="container">
        <div class="row">

          <div class="col-md-offset-1 col-md-2 col-sm-3">
            <img src="images/avatar.jpeg" class="wow fadeInUp img-responsive img-circle" data-wow-delay="0.2s" alt="about image">
          </div>

          <div class="col-md-8 col-sm-8">
            <h1 class="wow fadeInUp top-margin-med" data-wow-delay="0.6s">Hey there, I'm Rohan Kalgutkar.</h1>
            <h2>Freelance Web Developer &amp; Entrepreneur.</h2>
            <a href="docs/rohan-kalgutkar-resume.pdf" class="wow fadeInUp btn btn-default section-btn" data-wow-delay="1s" target="_blank"><i class="fa fa-download"></i> Résumé</a>
            <a href="#contact" class="wow fadeInUp btn btn-default section-btn" data-wow-delay="1s"><i class="fa fa-pencil-square-o"></i> Contact</a>
          </div>

        </div>
      </div>
    </section>


    <!-- ABOUT SECTION -->
    <section id="about">
      <div class="container">
        <div class="row">

          <div class="col-md-8 col-sm-12">
            <div class="about-thumb">
              <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                <h2>A Little Bit Of My Story</h2>
                <p><strong>Software Engineer &amp; Co-founder of <a href="http://www.thetstory.co">thetstory.co</a> – A Home Decor Company</strong></p>
              </div>
              <div class="wow fadeInUp" data-wow-delay="0.8s">
                <p>Currently working as a developer at Vistaar Systems for Gerdau and GE.
                  <br> I love backend scripting and handle the technical side at thetstoryco.
                  <br> I'm
                  <?php echo $age ?>. A self-proclaimed geek, rock a bread, and based in Mumbai.
                </p>
              </div>
              <ul class="social-icon">
                <li class="wow fadeInLeft" data-wow-delay="1s"><a href="https://www.instagram.com/daft_ro/" class="fa fa-instagram"></a></li>
                <li class="wow fadeInUp" data-wow-delay="1.2s"><a href="https://www.linkedin.com/in/rohankalgutkar/" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 col-sm-12">
            <div class="wow fadeInUp" data-wow-delay="0.4s">
              <h2>On Instagram</h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.6s" id="instafeed">
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- SKILL SECTION -->
    <section id="skill">
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-6">
            <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
              <h2>Expertise</h2>
              <p>What I do and what I love</p>
              <div class="col-md-6">
                <ul class="no-ul-padding">
                  <li>Portfolios</li>
                  <li>Landing Pages</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="no-ul-padding">
                  <li>Logo Design</li>
                  <li>Ecommerce</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-offset-1 col-md-6 col-sm-6">
            <div class="skill-thumb">

              <div class="wow fadeInUp" data-wow-delay="1s">
                <strong>Graphic Design</strong>
                <span class="pull-right">80%</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                </div>
              </div>

              <div class="wow fadeInUp" data-wow-delay="1.2s">
                <strong>Front End</strong>
                <span class="pull-right">90%</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                </div>
              </div>

              <div class="wow fadeInUp" data-wow-delay="1.4s">
                <strong>Node.js</strong>
                <span class="pull-right">75%</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact">
      <!-- <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-4">
            <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
              <h2>Drop a message</h2>
              <p><strong>Have any projects? I'd love to collaborate.</strong></p>
            </div>
          </div>
          <div class="col-md-offset-1 col-md-6 col-sm-6">
            <p>
              <a href="mailto:hello@rohankalgutkar.in" class="no-link-deco"><i class="fa fa-envelope"></i> hello@rohankalgutkar.in</a> &nbsp;
              <i class="fa fa-phone-square"></i> 9619817506
            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <p>&copy;
              <?php echo date('Y')?> @daft_ro.
              <!--VlexoFree_LinkBack.</p>
          </div>
        </div>
      </div> -->
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-6">
            <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
              <h2>Drop a message</h2>
              <p><strong>Have any projects? I'd love to collaborate.</strong></p>
            </div>
          </div>

          <div class="col-md-offset-1 col-md-6 col-sm-6 top-spacer">
            <p>
              <a href="mailto:hello@rohankalgutkar.in" class="no-link-deco"><i class="fa fa-envelope"></i> hello@rohankalgutkar.in</a> </p>
              <p>
              <i class="fa fa-phone-square"></i> 9619817506
            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 text-middle">
            <p>&copy;
              <?php echo date('Y')?> @daft_ro.
              <!--VlexoFree_LinkBack.--></p>
          </div>
        </div>
      </div>
      </div>
    </section>


    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script type="text/javascript">
      var userFeed = new Instafeed({
        get: 'user',
        userId: '494202955',
        accessToken: '494202955.fb0d2cb.89daf89f5e114a079dba5e8033e88463',
        template: '<a href="{{link}}"><img src="{{image}}" class="img-responsive" alt="instagram image"/></a>',
        limit: 6
      });
      userFeed.run();
    </script>

  </body>

  </html>
