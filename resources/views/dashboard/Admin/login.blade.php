<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>حضانة</title>
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

<section class="login d-flex justify-content-center align-items-center w-75 m-auto">
    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-sm-5 col-md-4 ph">
                <img src="/img/admins.jpeg" class="img-responsive img-fluid mx-auto d-block" width="100%;" alt="not found">
            </div>
            <div class="col-sm-7 col-md-8 log">
                <h4 class="text-center">تسجيـل</h4> <hr class="ln">
                <form action="{{route('dashboard.loginadmin')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-element">
                        <input type="email" class="form-control" name="email" placeholder="أدخل الإيـميـل"/>
                    </div>
                    <br>
                    <div class="form-element">
                        <input type="password" class="form-control" name="password" placeholder="أدخل الرقم السري"/>
                    </div>
                    <button type="submit" class="btn btn-outline-success mt-5 w-50 " style="display: block; margin: auto">تسجيـل الدخـول</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------------------------start footer----------------------------- -->

<!-- --------------------------------------------end footer--------------------------- -->

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
