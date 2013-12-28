<!DOCTYPE HTML>
<!--
        Miniport 2.5 by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>EDcellence</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <link rel="icon" type="image/png" href="images/edcellence-logo.png">
    <script src="js/config.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/jquery.js"></script>
    <script>
      function fun()
      {
        var name = document.forms['contact-form']['name'];
        var email = document.forms['contact-form']['email'];
        var subject = document.forms['contact-form']['subject'];
        var message = document.forms['contact-form']['message'];
        if (name.value == '')
        {
          document.getElementById('error-name').innerHTML = "Please enter your name";
          name.focus();
          return false;
        }


        if (email.value == "")
        {
          document.getElementById('error-email').innerHTML = "Please enter valid email";
          email.focus();
          return false;
        }
        else if (email.value.indexOf("@", 0) < 0)
        {

          document.getElementById('error-email').innerHTML = "Please enter valid email";
          email.focus();
          return false;
        }
        else if (email.value.indexOf(".", 0) < 0)
        {
          document.getElementById('error-email').innerHTML = "Please enter valid email";
          email.focus();
          return false;
        }


        if (subject.value == "")
        {
          document.getElementById('error-subject').innerHTML = "Please enter subject";
          subject.focus();
          return false;

        }
        if (message.value == "")
        {

          document.getElementById('error-message').innerHTML = "Please enter message";
          message.focus();
          return false;

        }

      }
      function resetForm()
      {
        var form = document.getElementById("contact-form");
        form.reset();
      }
    </script>

    -->
    <noscript>
    <link rel="stylesheet" href="css/skel-noscript.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-desktop.css" />
    <link rel="stylesheet" href="css/tes.css" />
    </noscript>

    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
    <!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->

  </head>
  <body>

    <!-- Nav -->
    <nav id="nav">
      <ul class="container">
        <li><a href="#edcellence">EDcellence</a></li>
        <li><a href="#product">Product</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#demo">Request Demo</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>

    <!-- Home -->

    <div class="wrapper-first-page  wrapper-style1 ">
      <article class="container" id="edcellence">

        <div class="row">

          <div class="4u">
            <span id="logo" class="me image image-full"><img src="images/me.png" alt="" /></span>
          </div>

          <div class="8u">

            <div class="12u">


              <p id="title">Cloud-based Ecosystem for Learning, Assessment and Recruitment Solutions</p>

            </div>
            <div class="6u" id="ed-img">

              <img  class="image image-full image-centered" src="images/cloud-la.svg"/>

            </div>
            <div class="12u" id="pro-button">

              <a href="#product" class="button button-medium">Learn about our product</a>

            </div>

          </div>
        </div>
      </article>

    </div>

    <!-- product -->
    <div class="wrapper wrapper-style2">

      <article id="product">             
        <div class="container">
          <div class="row ">

            <div class="4u">

              <section class="box box-style1">

                <span class="fa featured fa-comments-o"></span>

                <h3>LearnED</h3>
                <p>Interactive learning from anywhere, anytime through your mobile devices.</p>

              </section>


            </div>
            <div class="4u">

              <section class="box box-style1">

                <span class="fa featured fa-thumbs-o-up"></span>
                <h3>TrainED</h3>
                <p>Simulated learning offered in your own regional languages.</p>

              </section>

            </div>
            <div class="4u">

              <section class="box box-style1">

                <span class="fa featured fa-comments-o"></span>
                <h3>AssessED</h3>
                <p>Say no to paper and pen. Solve real-time challenges on the browser.</p>

              </section>

            </div>
          </div>
        </div>
      </article>	
      <article id="product">

        <div class="container">
          <div class="row">
            <div class="4u">

              <section class="box box-style1">
                <span class="fa featured fa-file-o"></span>
                <h3>CodED</h3>
                <p>Build your own app and learn by doing.</p>
              </section>

            </div>
            <div class="4u">

              <section class="box box-style1">
                <span class="fa featured fa-file-o"></span>
                <h3>CertifiED</h3>
                <p>Get certified and recognized by prospective employers.</p>
              </section>

            </div>
            <div class="4u">

              <section class="box box-style1">
                <span class="fa featured fa-thumbs-o-up"></span>
                <h3>EmployeED</h3>
                <p>Showcase your skills profile and find your dream job.</p>
              </section>

            </div>
          </div>
        </div>
        <footer>
        </footer>
      </article>
    </div>
    <div class="wrapper wrapper-style2">
      <article id="features">
        <div class="container">
          <div class="row"  style="position:relative;">
            <span class="keep-scrolling">Keep Scrolling</span>
          </div>
          <div class="row">
            <div class="4u">

              <section class="box box-style1 feature-box-first-3">
                <div>
                  <img class="image fu-image" src="images/thumb.svg" height="150" />
                </div>
                <h3 id="fut5" >Employability guaranteed</h3>
                <div class="fut5-content" >
                  <p class="justify"> Earn credits for learning, monetize, the credits through assessments and build your badge. Stand out and be noticed. Define the challenge, announce the badges and Let the right candidate find you.</p>     
                </div>
              </section>


            </div>
            <div class="4u">

              <section class="box box-style1 feature-box-first-3">

                <div>
                  <img class="image fu-image" src="images/on-demand.svg" height="150"  />
                </div>
                <h3 id="fut2" >On-demand learning environment</h3>
                <div class="fut2-content">
                  <p class="justify">IT budgets for learning solutions are no longer a threat. You will pay only for what you use. With cloud, you can build and release on-demand learning infrastructure. You can create and use machines on-demand.</p>
                </div>

              </section>

            </div>
            <div class="4u">

              <section class="box box-style1 feature-box-first-3">

                <div>
                  <img class="image fu-image" src="images/collaborative.svg" height="150" />
                </div>
                <h3 id="fut3" >Collaborative learning</h3>
                <div class="fut3-content" >
                  <p class="justify">With a cloud-based platform like EDcellence, learners can collaborate with trainers, peers and fellow learners, trainers with their fellow teachers. Discussion forums and chat rooms are there to interact and share knowledge.</p>
                </div>

              </section>

            </div>
          </div>
        </div>



        <div class="container" style="margin-top:5em;position:relative">
          <div class="row">
            <div class="4u">

              <section class="box box-style1 feature-box-height">
                <div>
                  <img class="image fu-image" src="images/assessment.svg" height="150" />
                </div>
                <h3 id="fut4" >Assessment as a service</h3>
                <div class="fut4-content">
                  <p class="justify">Say no to paper and pen test.It may be a self-assessment or a supervised examination; with on-demand environment, you can get assessed based on real-time scenarios and challenges. Once assessed, you will get badges, according to your scores. Recruiters can hire people who can solve real world problems.</p>
                </div>
              </section>

            </div>
            <div class="4u">

              <section class="box box-style1 feature-box-height" >
                <div>
                  <img class="image fu-image" src="images/access.svg"  height="150" />
                </div>
                <h3 id="fut1">Access from anywhere</h3>
                <div class="fut1-content">
                  <p class="justify">EDcellence is a completely cloud-based solution. You can learn from anywhere, anytime on one platform using tablets, mobiles, UBS sticks vis-a vis books and bags. You can have online and offline access and bidirectional sync. You can have industry-certified, interactive/quality content in your regional language. Trainers can reach out to the learners located across the globe.</p>
                </div>
              </section>


            </div>
            <div class="4u">

              <section class="box box-style1 feature-box-height">
                <div>
                  <img class="image fu-image" src="images/build-own.svg"  height="150" />
                </div>
                <h3 id="fut6" >Build your own EDcellence</h3>
                <div class="fut6-content">
                  <p class="justify">You need not accept whatever we offer. EDcellenceis very flexible can be tailored to suit your requirements. Every functionality is a separate service and you can pick and choose what you want and pay for what you use. EDcellence is an extensible ecosystem that provides the platform on which third party tools. Start building and using your own EDcellence!!</p>
                </div>
              </section>

            </div>
          </div>
        </div>
        <footer>
        </footer>
      </article>
    </div>


    <!-- team -->
    <div class="wrapper wrapper-style3">
      <article id="team">

        <div class="container">
          <div class="row">
            <div class="12u">
            </div>
          </div>
          <div class="row">
            <div class="4u">

              <article class="box box-style2">


                <a href="#team" class="image"><img src="images/rajagopalan.jpg" alt=""  height="160" /></a>
                <h4><a href="#team">Rajagopalan V </a></h4>
                <p>Founder, Head of Solutions</p>

              </article>
            </div>
            <div class="4u">
              <article class="box box-style2">


                <a href="#team" class="image"><img src="images/lakshmi.jpg" height="160" alt=""/></a>
                <h4><a href="#team">Lakshmi Narasimhan</a></h4>
                <p>Co-founder, Head of Technology</p>

              </article>
            </div>
            <div class="4u">
              <article class="box box-style2">
                <a href="#team" class="image"><img src="images/vinoudini.jpg" height="160" alt="" /></a>
                <h4><a href="#team">Vinoudini Boj </a></h4>
                <p> Co-founder, Head of Operations </p>
              </article>
            </div>
          </div>

        </div>
        <footer>

          <a href="#demo" class="button button-big">Get in touch with me</a>
        </footer>
      </article>
    </div>

    <!-- demo -->
    <div class="wrapper wrapper-style1">
      <article id="demo" class="container small">
        <header>
          <h3>Want a free demo? Get in touch!</h3>

        </header>


        <div class="row success-message">
          <div class="12u">
            <?php
            $name = "";
            $email = "";
            $subject = "";
            $message = "";

            if (isset($_POST['contact-form'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $subject = $_POST['subject'];
              $message = $_POST['message'];



              if (($name && $email && $subject && $message)) {

                $to = "vinotha.r@edcellence.in";
                $headers = "From:" . $email;
                mail($to, $subject, $message, $headers);
                $connect = mysql_connect("localhost", "edcell12", "pass@#4567") or die(mysql_error());
                mysql_select_db("edcell12_edcellence") or die(mysql_error());
                $date = strftime("%c");
                $insert = "INSERT INTO messages" . "(Name,Email,Subject,Message)" . "VALUES ('$name','$email','$subject','$message')";
                $query = mysql_query($insert);
                if (!$query) {
                  die(mysql_error());
                } else {
                  print "Your message has been sent";
                }
              }
            }
            ?>
          </div>
        </div>
        <div class="row">

          <div class="12u">



            <form method="POST" action="#demo" id="contact-form" onsubmit="return fun()" name="contact-form">
              <div>
                <div class="row half">
                  <div class="6u">
                    <input type="text" name="name" id="name"placeholder="Name" />
                    <div  id="error-name">
                    </div>
                  </div>
                  <div class="6u">
                    <input type="text" name="email" id="email" placeholder="Email" />
                    <div  id="error-email">
                    </div>
                  </div>
                </div>
                <div class="row half">
                  <div class="12u">
                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                    <div  id="error-subject">
                    </div>
                  </div>
                </div>
                <div class="row half">
                  <div class="12u">
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                    <div  id="error-message">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="12u">

                    <input id="contact-form" type="submit" name="contact-form"  class="button button-small" value="Send Message" />
                    <input type="button" name="resetForm" id="resetForm" class="button button-small" value="Reset" onclick="resetForm()" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

    </div>

  </div>
  <hr>
  <div class="wrapper wrapper-style1 wrapper-first">

    <article id="contact">
      <div class="row">
        <div class="4u" >
          <span id="con-ed"> EDcellence</span>
        </div>
        <div class="4u contact-first" >
          <span class="contact-title">Here we are</span>
          <div class="contact-addr">
            Vriksham Learning Solutions Pvt.Ltd.,<br>
            No.10, Iyappan street, West Mambalam</br>
            Chennai - 600 033
          </div>
        </div>
        <div class="4u contact-second">
          <span class="contact-title">Get in touch</span>
          <div class="contact-third"> 
            <span class="contact-number"> Contact: +044-24745407</span></br>
            <span class="contact-mail">Email:&nbsp;<a href="mailto:vino@edcellence.in">contact@edcellence.in</a></span>
          </div>
          <div>
            <ul class="social">
              <li class="linkedin"><a href="http://in.linkedin.com/pub/edcellence-vriksham-learning-solutions-private-ltd/63/b10/ab6" class="fa fa-linkedin"><span>LinkedIn</span></a></li>
              <li class="facebook"><a href="https://www.facebook.com/pages/Vriksham-learning-solutions-pvtltd/162745983926996?rf=160038970858279" class="fa fa-facebook"><span>Facebook</span></a></li>
              <li class="twitter"><a href="https://twitter.com/Ed_excellence" class="fa fa-twitter"><span>Twitter</span></a></li>
              <li class="googleplus"><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>


              <!--   
              <li class="dribbble"><a href="http://dribbble.com/n33" class="fa fa-dribbble"><span>Dribbble</span></a></li>
              <li class="tumblr"><a href="#" class="fa fa-tumblr"><span>Tumblr</span></a></li>
                 
                 <li class="github"><a href="http://github.com/n33" class="fa fa-github"><span>Github</span></a></li>
                
                 <li class="rss"><a href="#" class="fa fa-rss"><span>RSS</span></a></li>
                 <li class="instagram"><a href="#" class="fa fa-instagram"><span>Instagram</span></a></li>
                 <li class="foursquare"><a href="#" class="fa fa-foursquare"><span>Foursquare</span></a></li>
                 <li class="skype"><a href="#" class="fa fa-skype"><span>Skype</span></a></li>
                 <li class="soundcloud"><a href="#" class="fa fa-soundcloud"><span>Soundcloud</span></a></li>
                 <li class="youtube"><a href="#" class="fa fa-youtube"><span>YouTube</span></a></li>
                 <li class="blogger"><a href="#" class="fa fa-blogger"><span>Blogger</span></a></li>
                 <li class="flickr"><a href="#" class="fa fa-flickr"><span>Flickr</span></a></li>
                 <li class="vimeo"><a href="#" class="fa fa-vimeo"><span>Vimeo</span></a></li>
              -->
            </ul>
          </div>
        </div>

      </div>
    </article>
  </div>
  <div class="wrapper wrapper-style4 footer-copyright">
    <footer>
      <ul id="copyright">
        <li>&copy; 2013 EDcellence</li>

      </ul>



    </footer>
  </div>




</body>
</html>