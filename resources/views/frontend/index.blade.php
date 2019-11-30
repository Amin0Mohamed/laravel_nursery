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
</head>

<body>
 @include('frontend.header.headernav');
<!-- ===================================== -->
<!-- =============stat carousel======================== -->
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/black-board.jpg" class="d-block w-100" alt="error">
        <div class="carousel-caption d-none d-md-block">
          <img src="img/school-kid.png" alt="error" class="sd-img1">
          <img src="img/b-comment.png" alt="error" class="sd-img2">
          <img src="img/welcome-text.png" alt="error" class="sd-img3">
          <img src="img/text-desc.png" alt="error" class="sd-img4">
          <img src="img/b-game.png" alt="error" class="sd-img5">
          <img src="img/b-game.png" alt="error" class="sd-img6">
          <img src="img/b-cloud.png" alt="error" class="sd-img7">
          <img src="img/b-bulb.png" alt="error" class="sd-img8">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg2.jpg" class="d-block w-100" alt="error">
        <div class="carousel-caption d-none d-md-block">
            <img src="img/boom.png" alt="error" class="sd-img9">
            <img src="img/creative-design.png" alt="error" class="sd-img10">
            <img src="img/common-swirl.png" alt="error" class="sd-img11">
            <img src="img/awesome-gallery.png" alt="error" class="sd-img12">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <img style="top:120px;left:530px;white-space: nowrap;" data-ls="offsetxin:0;delayin:800;easingin:easeOutElastic;skewxin:30;skewyin:30;transformoriginin:50% 0% 50%;offsetxout:0;parallaxlevel:1;" src="img/bring.png" alt="error">

            <img style="top:185px;left:530px;white-space: nowrap;" data-ls="offsetxin:2;delayin:1000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-1;" src="img/fun.png" alt="">

            <img class="ls-l" style="top:252px;left:507px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;" src="img/two.png" alt="">

            <img class="ls-l" style="top:250px;left:571px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:3;" src="img/life.png" alt="">
            <img class="ls-l" style="top:355px;left:518px;white-space: nowrap;" data-ls="delayin:2500;parallaxlevel:-2;" src="img/cup-divider.png" alt="">
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <div class="copyright">
    <div class="container text-center m-5 font-weight-bold" style="font-size:20px">
        <p class="copyright-info">The nursery management system is a system that facilitates the user to manage the nursery
            and
            add children of certain ages
            and add classes for them and add questions and articles are answered</p>
        <div class="footer-links">
        </div>
    </div>
</div>
<!-- ===================================== -->
<!-- ============START Activities========================= -->
{{--<section class="activities">--}}
{{--  <div class="container">--}}
{{--    <h2 class="text-center">Our Activities</h2>--}}
{{--    <div class="row use-box">--}}
{{--      <div class="col-sm-6 col-md-3 coll">--}}
{{--        <div class="img-ct">--}}
{{--           <img src="img/service1.jpg" alt="error" class="d-block img-responsive img-activity">--}}
{{--           <div class="overlay">--}}
{{--            <div class="text"><i class="fa fa-link"></i></div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <h4 class="text-center">Active Learning</h4>--}}
{{--        <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>--}}
{{--      </div>--}}
{{--      <div class="col-sm-6 col-md-3 coll">--}}
{{--        <div class="img-ct">--}}
{{--           <img src="img/service2.jpg " alt="error" class="d-block img-responsive img-activity">--}}
{{--           <div class="overlay">--}}
{{--            <div class="text"><i class="fa fa-link"></i></div>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--        <h4 class="text-center">Music Class</h4>--}}
{{--        <p>Decor ostdcaer urabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>--}}
{{--      </div>--}}
{{--      <div class="col-sm-6 col-md-3 coll">--}}
{{--        <div class="img-ct">--}}
{{--           <img src="img/service3.jpg" alt="error" class="d-block img-responsive img-activity">--}}
{{--           <div class="overlay">--}}
{{--            <div class="text"><i class="fa fa-link"></i></div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <h4 class="text-center">Yoga Class</h4>--}}
{{--        <p>Rabitur ultrices posuere mattis. Nam ullamcorper, diam sit euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl gedretu osterftra ligula</p>--}}
{{--      </div>--}}
{{--      <div class="col-sm-6 col-md-3 coll">--}}
{{--        <div class="img-ct">--}}
{{--           <img src="img/service4.jpg" alt="error" class="d-block img-responsive img-activity">--}}
{{--           <div class="overlay">--}}
{{--            <div class="text"><i class="fa fa-link"></i></div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <h4 class="text-center">Kung fu Class</h4>--}}
{{--        <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</section>--}}

<!-- ===================================== -->
<!-- ==================start learning=================== -->
{{--<section class="learn">--}}
{{--  <div class="container">--}}
{{--    <div class="row use-box">--}}
{{--      <div class="col-sm-12 col-md-6">--}}
{{--        <h3>Play As You Learn</h3>--}}
{{--        <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="learn-title">--}}
{{--              <div class="icon"><i class="fa fa-glass"></i></div>--}}
{{--              <h5>English Summer Camp </h5>--}}
{{--            </div>--}}
{{--            <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="learn-title">--}}
{{--              <div class="icon"><i class="fa fa-tachometer"></i></div>--}}
{{--              <h5>Sport Camp </h5>--}}
{{--            </div>--}}
{{--            <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="learn-title">--}}
{{--              <div class="icon"><i class="fa fa-pencil"></i></div>--}}
{{--              <h5>Drawing & Painting</h5>--}}
{{--            </div>--}}
{{--            <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="learn-title">--}}
{{--              <div class="icon"><i class="fa fa-magic"></i></div>--}}
{{--              <h5>  Personalizing  </h5>--}}
{{--            </div>--}}
{{--            <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="learn-title">--}}
{{--              <div class="icon"><i class="fa fa-bullseye"></i></div>--}}
{{--              <h5>  Swimming Camp  </h5>--}}
{{--            </div>--}}
{{--            <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="learn-title">--}}
{{--              <div class="icon"><i class="fa fa-music"></i></div>--}}
{{--              <h5>  Sing & Dance  </h5>--}}
{{--            </div>--}}
{{--            <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-sm-12 col-md-6">--}}
{{--          <h3>With Music4Kids, Music Is Child's Play! </h3>--}}
{{--          <div class="add-slider">--}}
{{--            <!-- Section: Testimonials v.2 -->--}}
{{--                <div class="text-center my-5">--}}

{{--                <div class="wrapper-carousel-fix">--}}
{{--                  <!-- Carousel Wrapper -->--}}
{{--                  <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"--}}
{{--                    data-interval="false">--}}
{{--                    <!--Slides-->--}}
{{--                    <div class="carousel-inner" role="listbox">--}}
{{--                      <!--First slide-->--}}
{{--                      <div class="carousel-item active">--}}
{{--                        <div class="testimonial">--}}
{{--                          <!--Avatar-->--}}
{{--                          <div class="avatar mx-auto mb-4">--}}
{{--                            <img src="img/service3.jpg" class="rounded-circle img-fluid"--}}
{{--                              alt="First sample avatar image">--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <!--First slide-->--}}
{{--                      <!--Second slide-->--}}
{{--                      <div class="carousel-item">--}}
{{--                        <div class="testimonial">--}}
{{--                          <!--Avatar-->--}}
{{--                          <div class="avatar mx-auto mb-4">--}}
{{--                            <img src="img/service2.jpg" class="rounded-circle img-fluid"--}}
{{--                              alt="Second sample avatar image">--}}
{{--                          </div>--}}

{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <!--Second slide-->--}}
{{--                      <!--Third slide-->--}}
{{--                      <div class="carousel-item">--}}
{{--                        <div class="testimonial">--}}
{{--                          <!--Avatar-->--}}
{{--                          <div class="avatar mx-auto mb-4">--}}
{{--                            <img src="img/service1.jpg" class="rounded-circle img-fluid"--}}
{{--                              alt="Third sample avatar image">--}}
{{--                          </div>--}}

{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <!--Third slide-->--}}
{{--                    </div>--}}
{{--                    <!--Slides-->--}}
{{--                    <!--Controls-->--}}
{{--                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                      </a>--}}
{{--                      <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                      </a>--}}
{{--                    <!--Controls-->--}}
{{--                  </div>--}}
{{--                  <!-- Carousel Wrapper -->--}}
{{--                </div>--}}

{{--              </div>--}}
{{--      </div>--}}
{{--          @if(empty(Session::get('Uid')))--}}
{{--            <a href="{{ url('/LoginView') }}" class="btn btn-outline-warning btn-block btn-rg">Register for Your Child's in Our Classes</a>--}}
{{--          @else--}}
{{--             <a href="{{ url('/services') }}" class="btn btn-outline-warning btn-block btn-rg">Register for Your Child's in Our Classes</a>--}}
{{--           @endif--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  </div>--}}
{{--</section>--}}
<!-- ===================================== -->
<!-- =============start protofolio======================== -->
{{--<section class="protofolio">--}}
{{--  <div class="container">--}}
{{--    <h2 class="text-center">Our protfolio</h2>--}}
{{--    <div class="row">--}}
{{--  <div class="col-md-12">--}}

{{--    <div id="mdb-lightbox-ui"></div>--}}

{{--    <div class="row">--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="img/image1.jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="img/image1.jpg" class="img-fluid">--}}

{{--        <div class="overlay overly1">--}}
{{--          <div class="text"><i class="fa fa-download"></i></div>--}}
{{--        </div>--}}

{{--      </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="img/image2.jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="img/image2.jpg" class="img-fluid" />--}}
{{--          <div class="overlay overly2">--}}
{{--            <div class="text">--}}
{{--              <i class="fa fa-download"></i>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="img/image3.jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="img/image3.jpg" class="img-fluid" />--}}
{{--          <div class="overlay overly3">--}}
{{--            <div class="text"><i class="fa fa-download"></i></div>--}}
{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="img/image4.jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="img/image4.jpg" class="img-fluid" />--}}
{{--          <div class="overlay overly4">--}}
{{--            <div class="text"><i class="fa fa-download"></i></div>--}}
{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="img/image5.jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="img/image5.jpg" class="img-fluid" />--}}
{{--          <div class="overlay overly5">--}}
{{--            <div class="text"><i class="fa fa-download"></i></div>--}}
{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="img/image6.jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="img/img6.jpg" class="img-fluid" />--}}
{{--          <div class="overlay overly6">--}}
{{--            <div class="text"><i class="fa fa-download"></i></div>--}}
{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid"/>--}}
{{--          <div class="overlay overly7">--}}
{{--            <div class="text"><i class="fa fa-download"></i></div>--}}
{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />--}}
{{--          <div class="overlay overly8">--}}
{{--            <div class="text"><i class="fa fa-download"></i></div>--}}
{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col-md-4 proto-img">--}}
{{--        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">--}}
{{--          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />--}}
{{--          <div class="overlay overly9">--}}
{{--            <div class="text"><i class="fa fa-download"></i></div>--}}
{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}
{{--      <div class="col-md-4"></div>--}}
{{--      <div class="col-md-4">--}}
{{--       <button class="btn btn-danger btn-block btn-rg">Show more  <i class="fa fa-chevron-circle-right" style="margin-left: 2px;"></i></button>--}}
{{--      </div>--}}
{{--      <div class="col-md-4"></div>--}}

{{--    </div>--}}

{{--  </div>--}}
{{--</div>--}}

{{--  </div>--}}
{{--</section>--}}
<!-- ===================================== -->
<!-- ===============Start Blogs====================== -->
{{--<section class="blog">--}}
{{--  <div class="container">--}}
{{--      <h2 class="text-center">Recent Blogs</h2>--}}

{{--      <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--          <!-- Blog Post -->--}}
{{--        <div class="card mb-4">--}}
{{--            <img class="card-img-top" src="img/blog_img1.jpg" alt="Card image cap">--}}
{{--            <div class="card-body">--}}
{{--              <h2 class="card-title"> Activities Improves Mind </h2>--}}
{{--              <p class="card-text">Iid venenatis nibh accums. Doinbibe ndum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accumsan...</p>--}}
{{--              <a href="#" class="btn btn-primary btn-rg">Read More <i class="fa fa-chevron-circle-right"></i></a>--}}
{{--            </div>--}}
{{--            <div class="input-group mb-3 card-footer text-muted">--}}
{{--            <div>--}}
{{--              <span> Posted on October 1, 2019 by </span>--}}
{{--              <a href="#">--}}

{{--                  <img src="img/service1.jpg" alt="error" class="img-fluid" style="width: 50px; height: 50px;border-radius: 50%;">--}}
{{--                  <span style="color: #aec158">Admin</span>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--          <!-- Blog Post -->--}}
{{--        <div class="card mb-4">--}}
{{--            <img class="card-img-top" src="img/blog_img2.jpg" alt="Card image cap">--}}
{{--            <div class="card-body">--}}
{{--              <h2 class="card-title"> Activities Improves Mind </h2>--}}
{{--              <p class="card-text">Iid venenatis nibh accums. Doinbibe ndum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accumsan...</p>--}}
{{--              <a href="#" class="btn btn-primary btn-rg">Read More <i class="fa fa-chevron-circle-right"></i></a>--}}
{{--            </div>--}}
{{--            <div class="input-group mb-3 card-footer text-muted">--}}
{{--            <div>--}}
{{--              <span> Posted on October 1, 2019 by </span>--}}
{{--              <a href="#">--}}

{{--                  <img src="img/service1.jpg" alt="error" class="img-fluid" style="width: 50px; height: 50px;border-radius: 50%;">--}}
{{--                  <span style="color: #aec158">Admin</span>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--  </div>--}}
{{--</section>--}}
<!-- ===================================== -->
<!-- ==============start staffs======================= -->
{{--<section class="staff">--}}
{{--  <div class="container">--}}
{{--      <h2 class="text-center">Our staffs</h2>--}}
{{--      <div class="row">--}}
{{--        <div class="col-sm-6 col-md-3">--}}
{{--          <div class="staff-img">--}}
{{--            <img src="img/mask.png" alt="error" class="br-img">--}}
{{--            <img src="img/team1.jpg" alt="error" class="ct-img">--}}
{{--            <div class="overlay overly6">--}}
{{--                <div class="text">--}}
{{--                  <i class="fa fa-facebook"></i>--}}
{{--                  <i class="fa fa-twitter"></i>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--          <h4 class="text-center">Mahmoud Ayad</h4>--}}
{{--          <h6 class="text-center"> Senior Supervisor </h6>--}}
{{--          <p class="text-center staff-info"> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>--}}
{{--        </div>--}}

{{--        <div class="col-sm-6 col-md-3">--}}
{{--          <div class="staff-img">--}}
{{--            <img src="img/mask.png" alt="error" class="br-img">--}}
{{--            <img src="img/team4.jpg" alt="error" class="ct-img">--}}
{{--            <div class="overlay overly6">--}}
{{--                <div class="text">--}}
{{--                  <i class="fa fa-facebook"></i>--}}
{{--                  <i class="fa fa-twitter"></i>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--          <h4 class="text-center">Ahmed Reda</h4>--}}
{{--          <h6 class="text-center"> Teaching Professor </h6>--}}
{{--          <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-md-3">--}}
{{--          <div class="staff-img">--}}
{{--            <img src="img/mask.png" alt="error" class="br-img">--}}
{{--            <img src="img/img27.jpg" alt="error" class="ct-img">--}}
{{--            <div class="overlay overly6">--}}
{{--                <div class="text">--}}
{{--                  <i class="fa fa-facebook"></i>--}}
{{--                  <i class="fa fa-twitter"></i>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--          <h4 class="text-center">Mohamed Osama</h4>--}}
{{--          <h6 class="text-center">  Children Diet </h6>--}}
{{--          <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>--}}
{{--        </div>--}}

{{--        <div class="col-sm-6 col-md-3">--}}
{{--          <div class="staff-img">--}}
{{--            <img src="img/mask.png" alt="error" class="br-img">--}}
{{--            <img src="img/img28.jpg" alt="error" class="ct-img">--}}
{{--            <div class="overlay overly6">--}}
{{--                <div class="text">--}}
{{--                  <i class="fa fa-facebook"></i>--}}
{{--                  <i class="fa fa-twitter"></i>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--          <h4 class="text-center">Mostafa Naser</h4>--}}
{{--          <h6 class="text-center"> Management </h6>--}}
{{--          <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--  </div>--}}
{{--</section>--}}
<!-- ===================================== -->
<!-- ==================start footer=================== -->
{{--<footer class="footer">--}}
{{--  <div class="container">--}}
{{--    <div class="row cl">--}}
{{--      <div class="col-sm-6 col-md-3 rw_ht">--}}
{{--        <aside>--}}
{{--          <h4 class="hd_st red_ln">About Kids Life</h4>--}}
{{--          <p>Happy <a href=""><strong>Kids Life</strong></a> comes with powerful theme options, which empowers you to quickly and easily build incredible store.</p>--}}
{{--          <ul>--}}
{{--          <li> <a href=""> English Grammar Class </a> </li>--}}
{{--          <li> <a href=""> Music class </a> </li>--}}
{{--          <li> <a href=""> Swimming & Karate </a> </li>--}}
{{--          <li> <a href=""> Lot of HTML Styles </a> </li>--}}
{{--          <li> <a href=""> Unique News Page Design </a> </li>--}}
{{--          </ul>--}}
{{--        </aside>--}}

{{--      </div>--}}

{{--      <div class="col-sm-6 col-md-3 rw_ht">--}}
{{--        <aside>--}}
{{--          <h4 class="hd_st green_ln">Last Posts</h4>--}}
{{--          <div class="media">--}}
{{--            <div class="media-left">--}}
{{--              <a href="#">--}}
{{--                <img class="media-object img-post" src="img/service1.jpg" alt="img not found">--}}
{{--              </a>--}}
{{--            </div>--}}
{{--            <div class="media-body">--}}
{{--                <h6><a href="" class="head-post"> Amazing post with all goodies </a></h6>--}}
{{--                <span> March 23, 2019 </span>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <hr>--}}
{{--          <div class="media">--}}
{{--            <div class="media-left">--}}
{{--              <a href="#">--}}
{{--                <img class="media-object img-post" src="img/service2.jpg" alt="img not found">--}}
{{--              </a>--}}
{{--            </div>--}}
{{--            <div class="media-body">--}}
{{--                <h6><a href="" class="head-post"> Amazing post with all goodies </a></h6>--}}
{{--                <span> March 23, 2019 </span>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <hr>--}}
{{--          <div class="media">--}}
{{--            <div class="media-left">--}}
{{--              <a href="#">--}}
{{--                <img class="media-object img-post" src="img/service3.jpg" alt="img not found">--}}
{{--              </a>--}}
{{--            </div>--}}
{{--            <div class="media-body">--}}
{{--                <h6><a href="" class="head-post"> Amazing post with all goodies </a></h6>--}}
{{--                <span> March 23, 2019 </span>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--        </aside>--}}

{{--      </div>--}}

{{--      <div class="col-sm-6 col-md-3 rw_ht">--}}
{{--          <aside>--}}
{{--            <h4 class="hd_st yellow_ln">Twitter Feeds</h4>--}}
{{--            <div class="media">--}}
{{--                <div class="media-left">--}}
{{--                  <a href="#">--}}
{{--                    <!-- <img class="media-object img-post" src="img/twitter_icon.png" alt="img not found"> -->--}}
{{--                    <i class="fa fa-twitter fa-2x"></i>--}}
{{--                  </a>--}}
{{--                </div>--}}
{{--                <div class="media-body">--}}
{{--                    <h6><a href="" class="head-post"> Amazing post with all goodies </a></h6>--}}
{{--                    <span> March 23, 2019 </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            <div class="media">--}}
{{--                <div class="media-left">--}}
{{--                  <a href="#">--}}
{{--                    <!-- <img class="media-object img-post" src="img/twitter_icon.png" alt="img not found"> -->--}}
{{--                    <i class="fa fa-twitter fa-2x"></i>--}}
{{--                  </a>--}}
{{--                </div>--}}
{{--                <div class="media-body">--}}
{{--                    <h6><a href="" class="head-post"> Amazing post with all goodies </a></h6>--}}
{{--                    <span> March 23, 2019 </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            <div class="media">--}}
{{--                <div class="media-left">--}}
{{--                  <a href="#">--}}
{{--                    <!-- <img class="media-object img-post" src="img/twitter_icon.png" alt="img not found"> -->--}}
{{--                    <i class="fa fa-twitter fa-2x"></i>--}}
{{--                  </a>--}}
{{--                </div>--}}
{{--                <div class="media-body">--}}
{{--                    <h6><a href="" class="head-post"> Amazing post with all goodies </a></h6>--}}
{{--                    <span> March 23, 2019 </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            <div class="media">--}}
{{--                <div class="media-left">--}}
{{--                  <a href="#">--}}
{{--                    <!-- <img class="media-object img-post" src="img/twitter_icon.png" alt="img not found"> -->--}}
{{--                    <i class="fa fa-twitter fa-2x"></i>--}}
{{--                  </a>--}}
{{--                </div>--}}
{{--                <div class="media-body">--}}
{{--                    <h6><a href="" class="head-post"> Amazing post with all goodies </a></h6>--}}
{{--                    <span> March 23, 2019 </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--          </aside>--}}

{{--        </div>--}}

{{--        <div class="col-sm-6 col-md-3 rw_ht">--}}
{{--            <aside>--}}
{{--              <h4 class="hd_st blue_ln">Contact</h4>--}}
{{--              <p class="dt-sc-contact-info"><span class="fa fa-map-marker head-post"></span> <br> 4318 Mansion House, Greenland <br>  KSA </p>--}}
{{--              <p class="dt-sc-contact-info"><span class="fa fa-phone head-post"></span> <br> (000) 233 - 3236 </p>--}}
{{--              <p class="dt-sc-contact-info"><span class="fa fa-envelope head-post"></span> <br> <a href="#" class="head-post">--}}
{{--                      NurseryManagment@gmail.com</a></p>--}}
{{--            </aside>--}}
{{--            <aside class="widget">--}}
{{--                <p> We're social </p>--}}
{{--                <form name="frmnewsletter" class="mailchimp-form" action="" method="post">--}}
{{--                    <div class="input-group mb-3">--}}

{{--                        <input type="email" class="form-control" placeholder="@email">--}}
{{--                        <input type="submit" value="Subscribe" class="btn btn-danger">--}}
{{--                      </div>--}}

{{--                </form>--}}
{{--                </aside>--}}

{{--          </div>--}}
{{--    </div>--}}
{{--    <hr>--}}
{{--  </div>--}}

{{--</footer>--}}
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
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>


  </body>
</html>
