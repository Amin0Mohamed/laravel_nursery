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
</head>

<body>
@include('frontend.header.headernav');
<!-- ===================================== -->
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blogs</li>
        </ol>
    </nav>

<!-- ==================start blogs=================== -->
<section class="blog">
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
                <div class="col-12 col-sm-8 offset-sm-1">
                    <div class="card mb-4">
                        <a href="article.html"> <img class="card-img-top" src="/productimages/{{$article->image}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <h2 class="card-title">{{$article->title}}</h2>
                            <p class="card-text">{{$article->content}}</p>
                        </div>
                        <div class="input-group mb-3 card-footer text-muted">
                            <div>
                                <span>{{$article->created_at}}</span>
                                <a href="#">
                                    <img src="img/service1.jpg" alt="error" class="img-fluid" style="width: 50px; height: 50px;border-radius: 50%;">
                                    <span style="color: #aec158">Admin</span>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
            <div class="col-sm-3">
              <div class="card">
                <h4>Class Hours</h4>
                <ul class="class-hr">
                  <li>Sunday <span>9am - 2pm</span></li>
                  <li>Monday <span>9am - 2pm</span></li>
                  <li>Tuesday <span>9am - 2pm</span></li>
                  <li>Wednesday <span>9am - 2pm</span></li>
                  <li>Thursday <span>9am - 2pm</span></li>
                  <li>Friday <span>Holiday</span></li>
                  <li>Saturday <span>Holiday</span></li>

                </ul>
              </div>
              <div>
                  <iframe src="https://player.vimeo.com/video/38259685?title=0&amp;byline=0&amp;portrait=0&amp;color=00ffb6" width="100%" height="205" style="outline: none; border: none"></iframe>
              </div>
              <p><strong><span style="color: #008c99">We care</span> about your dearest..</strong></p>


            </div>
            <hr>
            <div class="col-12 col-sm-8 offset-sm-1">
                @include('flash-message')
                    <form action="{{url('/ArticleReg')}}" method="post" class="contact-form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="ownerID" value="{{Session::get('Uid')}}">
                            <h2>Write Your Article</h2>
                            <div class="input-group mb-3">
                                <input type="text" name="title" placeholder="title" class="form-control">
                                <input type="text" name="content" placeholder="content" class="form-control">
                                <input type="file" name="image"  class="form-control">
                            </div>
                            <div class="input-group mb-3">
                              <textarea name="msg" id="" cols="90" rows="10" placeholder="Write Article" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning btn-sd">Send <i class="fa fa-paper-plane"></i></button>
                        </form>
            </div>
        </div>
    </div>
</section>
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
<script src="js/style.js"></script>
      <script>
      new WOW().init();
      </script>


    </body>
  </html>
