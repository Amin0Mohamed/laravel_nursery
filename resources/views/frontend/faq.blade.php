<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Nursery managment</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bahianita|Barriecito|Chakra+Petch|Dancing+Script|Indie+Flower|Josefin+Sans|Lalezar|Libre+Baskerville|Lobster|Nunito|Open+Sans+Condensed:300|PT+Sans|Righteous|Squada+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel='stylesheet' type='text/css'>



      <link rel="stylesheet" href="css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">

      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/hover.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/contact.css">
      <link rel="stylesheet" href="css/blogs.css">
      <link rel="stylesheet" href="css/ourstaff.css">
      <link rel="stylesheet" href="css/faq.css">
</head>

<body>
@include('frontend.header.headernav');
<!-- ===================================== -->
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">FAQ</li>
        </ol>
    </nav>
<!-- ===================================== -->
<section class="faq">
    <div class="container">
        <h2 class="text-center">Questions</h2>
    </div>
</section>
<!-- ===================================== -->
<!-- ==================start learning=================== -->
<section class="learn">
        <div class="container">
          <div class="row use-box">
            <div class="col-sm-12 col-md-12">
                <h3 style="text-align: center"> Nursery Video </h3>
                <div>
                        <iframe  src="https://player.vimeo.com/video/38259685?title=0&amp;byline=0&amp;portrait=0&amp;color=00ffb6" width="100%" height="205" style="outline: none; border: none"></iframe>
                </div>

            <a href="{{ url('/services') }}" class="btn btn-outline-warning btn-block btn-rg">Register for Your Child's in Our Classes</a>
          </div>
        </div>
        </div>
      </section>
      <!-- ===================================== -->
      <!-- ===================================== -->
      <section class="questitionform">
          <div class="container">
                <form action="{{url('QuestionReq')}}" method="post" class="contact-form">
                    {{csrf_field()}}
                    <input type="hidden" name="ownerID" value="{{Session::get('Uid')}}">
                        <h2 class="text-center">Write Your Questitions</h2>
                        <div class="input-group mb-3">
                        </div>
                        <div class="input-group mb-3">
                          <textarea name="Detail" id="" cols="120" rows="10" placeholder="Write Questition" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning btn-sd">Send <i class="fa fa-paper-plane"></i></button>
                    </form>
          </div>
      </section>
      <!-- ===================================== -->
  <!-- ===================================== -->
  <div class="copyright">
      <div class="container">
      <p class="copyright-info">© 2019 Kids Life. All rights reserved. Design by  Team Nursery </p>
      <div class="footer-links">
      <p>Follow us</p>
      <ul class="dt-sc-social-icons">
          <ul class="social">
              <li><a href="#" title="Facebook" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" title="Youtube" class="dt-sc-tooltip-top youtube"><span class="fa fa-youtube"></span></a></li>
              <li><a href="#" title="Twitter" class="dt-sc-tooltip-top twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" title="Google Plus" class="dt-sc-tooltip-top gplus"><span class="fa fa-google-plus"></span></a></li>
          </ul>
      </ul>
      </div>
      </div>
  </div>

  <a id="scroll-top" title="Go to Top" class="back-to-top" style="display: inline; cursor: pointer;">To Top ↑</a>


  <!-- ===================================================================== -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

      <script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/scripte.js"></script>
      <script src="js/contact.js"></script>
      <script src="js/jquery.nicescroll.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script>
      new WOW().init();
      </script>


    </body>
  </html>
