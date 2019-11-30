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
      <link rel="stylesheet" href="css/aboutus.css">
      <link rel="stylesheet" href="css/services.css">
      <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <!-- ===================================== -->
<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="img/service1.jpg" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="">{{Session::get('name')}}</a></h2>

                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="">{{Session::get('email')}}</a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none btn-edit" id="btnDiscard" value="Discard Changes" />
                                    <a href="{{url('homepage')}}" class="btn btn-primary btn-edit">Home Page</a>
                                    <a href="{{url('services')}}" class="btn btn-info btn-edit">Sevices</a>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="registerdata-tab" data-toggle="tab" href="#registerdata" role="tab" aria-controls="registerdata" aria-selected="false">Register Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="nurserydata-tab" data-toggle="tab" href="#nurserydata" role="tab" aria-controls="nurserydata" aria-selected="false">Nursery Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sectiondata-tab" data-toggle="tab" href="#sectiondata" role="tab" aria-controls="sectiondata" aria-selected="false">Section Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="blogdata-tab" data-toggle="tab" href="#blogdata" role="tab" aria-controls="blogdata" aria-selected="false">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="answerdata-tab" data-toggle="tab" href="#answerdata" role="tab" aria-controls="answerdata" aria-selected="false">Q & A</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">

                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="row">
                                            <div col-sm-4 col-md-8>
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Bascic User Information</th>
                                                    </tr>
                                                    </thead>
                                                    @foreach($user as $us)
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <form action="{{url('/UpdatUser',['id'=>$us->Uid])}}" method="post" style="display: inline-block">
                                                                    {{csrf_field()}}
                                                                    <input type="text" class="form-control" name="name" value="{{$us->name}}">
                                                                    <br>
                                                                    <input type="email" class="form-control" name="email" value="{{$us->email}}">
                                                                    <br>
                                                                    <input type="password" class="form-control" name="password" value="{{$us->password}}" readonly>
                                                                    <br>
                                                                    <input type="password" class="form-control" name="newpass" placeholder="enter new password" value="">
                                                                    <br>
                                                                    <input type="password" class="form-control" name="confirmnewpass" placeholder="Confirm new password" value="">
                                                                    <br>
                                                                    <input  type="submit" value="@lang('site.edit')" class="btn btn-danger text-center form-control">
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="registerdata" role="tabpanel" aria-labelledby="registerdata-tab">
                                        @if(count($register) >0)
                                            <div class="row">
                                                <div col-sm-4 col-md-8>
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>ChildName</th>
                                                            <th>Age</th>
                                                            <th>FatherName</th>
                                                            <th>MotherName</th>
                                                            <th>Father Mobile</th>
                                                            <th>DOB</th>
                                                            <th>Address</th>
                                                        </tr>
                                                        </thead>
                                                        @foreach($register as $regis)
                                                            <tbody>
                                                        <tr>
                                                            <td>{{$regis->sName}}</td>
                                                            <td>{{$regis->sAge}}</td>
                                                            <td>{{$regis->fName}}</td>
                                                            <td>{{$regis->mName}}</td>
                                                            <td>{{$regis->fMobile}}</td>
                                                            <td>{{$regis->rDate}}</td>
                                                            <td>{{$regis->Address}}</td>
                                                            <td>
                                                                <form action="{{url('/Studelete',['id'=>$regis->rid])}}" method="post" style="display: inline-block">
                                                                    {{csrf_field()}}
                                                                    <input type="submit" value="@lang('site.delete')" class="btn btn-danger">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        @else
                                            <div class="container">
                                                <div class="con w-50 m-auto text-center">
                                                    <h3 style="margin-bottom: 50px;padding: 10px">no data </h3>
                                                    <img src="img/error.jpg" alt="gftdtr" width="300px" height="250px">
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="tab-pane fade" id="nurserydata" role="tabpanel" aria-labelledby="nurserydata-tab">
                                        @if(count($nursery) >0)
                                        <div class="row">
                                            <div col-sm-4 col-md-8>
                                                    <table class="table table-hover">
                                                            <thead>
                                                              <tr>
                                                                  <th>NurseryName</th>
                                                                  <th>Address</th>
                                                                  <th>Phone</th>
                                                                  <th>Descr</th>
                                                                  <th>FirstImage</th>
                                                              </tr>
                                                            </thead>
                                                        @foreach($nursery as $nurs)
                                                            <tbody>
                                                              <tr>
                                                                  <td>{{$nurs->Nur_name}}</td>
                                                                  <td>{{$nurs->Address}}</td>
                                                                  <td>{{$nurs->Phone}}</td>
                                                                  <td>{{$nurs->Desc}}</td>
                                                                  <td>
                                                                      <img style="display: inline" width="50px" height="50px"  src="/productimages/{{$nurs->image1}}" alt="error">
                                                                  </td>
                                                                  <td>
                                                                      <form action="{{url('/Nurdelete',['id'=>$nurs->Nur_id])}}" method="post" style="display: inline-block">
                                                                          {{csrf_field()}}
                                                                          <input type="submit" value="@lang('site.delete')" class="btn btn-danger">
                                                                      </form>
                                                                  </td>
                                                              </tr>

                                                            </tbody>
                                                        @endforeach
                                                          </table>
                                            </div>
                                        </div>
                                        @else
                                            <div class="container">
                                                <div class="con w-50 m-auto text-center">
                                                    <h3 style="margin-bottom: 50px;padding: 10px">no data </h3>
                                                    <img src="img/error.jpg" alt="gftdtr" width="300px" height="250px">
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="tab-pane fade" id="sectiondata" role="tabpanel" aria-labelledby="sectiondata-tab">
                                        @if(count($section) >0)
                                            <div class="row">
                                                    <div col-sm-4 col-md-8>
                                                            <table class="table table-hover">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>SectionName</th>
                                                                        <th>Descrption</th>

                                                                      </tr>
                                                                    </thead>
                                                                @foreach($section as $sec)
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>{{$sec->Name}}</td>
                                                                        <td>{{$sec->Desc}}</td>

                                                                        <td>
                                                                            <form action="{{url('/Secdelete',['id'=>$sec->sid])}}" method="post" style="display: inline-block">
                                                                                {{csrf_field()}}
                                                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger">
                                                                            </form>
                                                                        </td>
                                                                    </tr>

                                                                    </tbody>
                                                                @endforeach
                                                                  </table>
                                                    </div>
                                            </div>
                                        @else
                                            <div class="container">
                                                <div class="con w-50 m-auto text-center">
                                                    <h3 style="margin-bottom: 50px;padding: 10px">no data </h3>
                                                    <img src="img/error.jpg" alt="gftdtr" width="300px" height="250px">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="tab-pane fade" id="blogdata" role="tabpanel" aria-labelledby="blogdata-tab">
                                        @if(count($blog) >0)
                                            <div class="row">
                                                    <div col-sm-4 col-md-8>
                                                            <table class="table table-hover">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>Title</th>
                                                                        <th>Content</th>
                                                                      <!-- <th>Available</th> -->
                                                                        <th>Image</th>

                                                                      </tr>
                                                                    </thead>
                                                                @foreach($blog as $blo)
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>{{$blo->title}}</td>
                                                                        <td>{{$blo->content}}</td>
                                                                        <td>
                                                                            <img style="display: inline" width="50px" height="50px"  src="/productimages/{{$blo->image}}" alt="error">
                                                                        </td>
                                                                        <td>
                                                                            <form action="{{url('/Blodelete',['id'=>$blo->id])}}" method="post" style="display: inline-block">
                                                                                {{csrf_field()}}
                                                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger">
                                                                            </form>
                                                                        </td>
                                                                    </tr>

                                                                    </tbody>
                                                                @endforeach
                                                                  </table>
                                                    </div>
                                                </div>
                                        @else
                                            <div class="container">
                                                <div class="con w-50 m-auto text-center">
                                                    <h3 style="margin-bottom: 50px;padding: 10px">no data </h3>
                                                    <img src="img/error.jpg" alt="gftdtr" width="300px" height="250px">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="tab-pane fade" id="answerdata" role="tabpanel" aria-labelledby="answerdata-tab">
                                        @if(count($question) >0)
                                            <div class="row">
                                                    <div col-sm-4 col-md-8>
                                                            <table class="table table-hover">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>Questitions</th>
                                                                        <th>Answers</th>
                                                                      </tr>
                                                                    </thead>
                                                                @foreach($question as $que)
                                                                    @if(!empty($answer))
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>{{$que->Detail}}</td>
                                                                         <td>{{$answer->Detail}}</td>
                                                                        <td>
                                                                            <form action="{{url('/QuAndelete',['idq'=>$que->qid,'ida'=>$answer->aid])}}" method="post" style="display: inline-block">
                                                                                {{csrf_field()}}
                                                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger">
                                                                            </form>
                                                                        </td>
                                                                    </tr>

                                                                    </tbody>
                                                                    @endif
                                                                @endforeach

                                                            </table>
                                                    </div>
                                                </div>
                                        @else
                                            <div class="container">
                                                <div class="con w-50 m-auto text-center">
                                                    <h3 style="margin-bottom: 50px;padding: 10px">no data </h3>
                                                    <img src="img/error.jpg" alt="gftdtr" width="300px" height="250px">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
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
        <script src="js/prfile.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>


      </body>
    </html>
