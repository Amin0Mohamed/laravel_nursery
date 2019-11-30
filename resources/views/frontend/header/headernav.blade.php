<!-- =====start haad ======== -->
<div class="head-pg">
    <div class="container">
        <div class="head-left">
            <img src="img/logo.png" alt="error" srcset="">
        </div>

        <div class="head-right">
            @if(empty(Session::get('Uid')))
                    <p class="mail">
                        <span class="fa fa-envelope"></span>
                        <a href="{{url('/LoginView')}}"><span>Register|login</span></a>
                    </p>
            @elseif(!empty(Session::get('Uid')))
                    <p class="mail">
                        <span class="fa fa-envelope"></span>
                        <a href="{{url('/profileuser')}}"><span>{{Session::get('name')}}</span></a>
                    </p>

                <div class="logout">
                    <p class="mail">
                        <span class="fa fa-envelope"></span>
                        <a href="{{url('/Logout',['id'=>Session::get('Uid')])}}"><span>logout</span></a>
                    </p>
                </div>

            @endif
        </div>

    </div>
</div>



<!-- =====START NAV=============== -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Nursery Managment</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link link1" href="{{url('/homepage')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link2" href="{{url('about')}}">abouts us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link3" href="{{url('staff')}}">our staffs</a>
                </li>
                @if(!empty(Session::get('Uid')))
                    <li class="nav-item">
                        <a class="nav-link link4" href="{{url('services')}}">services</a>
                    </li>
                @endif
                @if(!empty(Session::get('Uid')))
                <li class="nav-item">
                    <a class="nav-link link5" href="{{url('blogs')}}">blogs</a>
                </li>
                @endif
                @if(!empty(Session::get('Uid')))
                    <li class="nav-item">
                        <a class="nav-link link1" href="{{url('faq')}}">FAQ</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link link6" href="{{url('contact')}}">contact us</a>
                </li>
            </ul>
{{--            <ul class="social-icons">--}}
{{--                <li><a href="#" title="Facebook" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>--}}
{{--                <li><a href="#" title="Youtube" class="dt-sc-tooltip-top youtube"><span class="fa fa-youtube"></span></a></li>--}}
{{--                <li><a href="#" title="Twitter" class="dt-sc-tooltip-top twitter"><span class="fa fa-twitter"></span></a></li>--}}
{{--                <li><a href="#" title="Google Plus" class="dt-sc-tooltip-top gplus"><span class="fa fa-google-plus"></span></a></li>--}}
{{--            </ul>--}}

        </div>

    </div>

</nav>
