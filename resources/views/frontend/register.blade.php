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
      <link rel="stylesheet" href="css/register.css">
</head>

<body>
  <!-- ================start register===================== -->
  <!-- ===================================== -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Register</li>
    </ol>
</nav>

  <section class="register">
        <div class="row">
            <div class="col-md-5">
                <div class="img-reg">
                    <img src="img/illustration-team.png" alt="error" class="img-fluid img-sign">
                </div>
            </div>

            <div class="col-md-6">
                    <div class="container">
                <div class="card reg-form">
                    @include('flash-message')
                        <form method="post" action="{{url('/StuReg')}}" class="register-form" id="register-form">
                            {{csrf_field()}}
                            <input type="hidden" name="ownerID" value="{{Session::get('Uid')}}">

                                <h2 class="text-center">student registration form</h2>
                                <fieldset>
                                    <legend>Student Data</legend>

                                    <div class="form-group">
                                        <label for="name">Name :</label>
                                        <input type="text" name="sName" placeholder="Student Name" id="name" value="{{ old('sName') }}" onkeyup="reg_name()">
                                        <span id="mes_name"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="birth_date">Age :</label>
                                        <input type="number" name="sAge" placeholder="Student Age" id="birth_date" value="{{ old('sAge') }}" onkeyup="reg_age()">
                                        <span id="mes_age"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="birth_date">Nationallity:</label>
                                        <input type="text" name="sNationality" placeholder="Student Nationallity" id="snation" value="{{ old('sNationality') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="birth_date">Date of Birth :</label>
                                        <input type="date" name="rDate" id="birth_date" value="{{ old('rDate') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address :</label>
                                        <input type="text" name="Address" placeholder="Status / City / Country" id="address" value="{{ old('Address') }}" >
                                    </div>

                                </fieldset>
                                <fieldset>
                                    <legend>Parent's Data</legend>

                                    <div class="form-group">
                                        <label for="name">Father Name :</label>
                                        <input type="text" name="fName" placeholder="Father Name" id="fname" value="{{ old('fName') }}" onkeyup="reg_fname()">
                                        <span id="mes_fname"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Mother Name :</label>
                                        <input type="text" name="mName" placeholder="Mother Name" id="mname" value="{{ old('mName') }}" onkeyup="reg_mname()">
                                        <span id="mes_mname"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Father Mobile Nunmber :</label>
                                        <input type="number" name="fMobile" placeholder="Father mobile Nunmber" id="phone1" value="{{ old('fMobile') }}" onkeyup="reg_ph1()" >
                                        <span id="mes_phone1"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Mother Mobile Nunmber :</label>
                                        <input type="number" name="mMobile" placeholder="Mother mobile Nunmber" id="phone2" value="{{ old('mMobile') }}" onkeyup="reg_ph2()">
                                        <span id="mes_phone2"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Father Work :</label>
                                        <input type="text" name="fWork" placeholder="Father Work" id="name1"  value="{{ old('fWork') }}" onkeyup="reg_fwork_name()">
                                        <span id="mes_work_name1"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Mother Work :</label>
                                        <input type="text" name="mWork" placeholder="Mother Work" id="name2"  value="{{ old('mWork') }}" onkeyup="reg_mwork_name()" >
                                        <span id="mes_work_name2"></span>
                                    </div>

                                </fieldset>


                                <div class="form-submit">
                                <!-- <input type="reset" value="Reset All" class="submit" name="reset" id="reset"> -->
                                    <input type="submit" value="Register" class="btn btn-warning btn-block" name="submit" id="submit">
                                </div>
                        </form>
                </div>
                </div>
            </div>
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
      <script src="js/style.js"></script>
      <script>
      new WOW().init();
      </script>


    </body>
  </html>
