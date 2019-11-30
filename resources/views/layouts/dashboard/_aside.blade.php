<aside class="main-sidebar">
    <section class="sidebar">
        @if(Session::get('Authorize') == 1 || Session::get('Authorize') == 2)
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/productimages/{{Session::get('image')}}" class="img-circle" width="100px" height="100px" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Session::get('name')}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        @endif
        <ul class="sidebar-menu" data-widget="tree">
            @if(Session::get('Authorize') == 1)

                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
                <li><a href="{{ route('dashboard.supervisors.index') }}"><i class="fa fa-th"></i><span>@lang('site.supervisors')</span></a></li>
                <li><a href="{{ route('dashboard.users.index')}}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
                <li><a href="{{ route('dashboard.Nursery.index')}}"><i class="fa fa-th"></i><span>@lang('site.nursery')</span></a></li>
                <li><a href="{{ route('dashboard.Students.index')}}"><i class="fa fa-th"></i><span>@lang('site.students')</span></a></li>
                <li><a href="{{ route('dashboard.Questions.index')}}"><i class="fa fa-th"></i><span>@lang('site.questions')</span></a></li>
                <li><a href="{{ route('dashboard.Answers.index')}}"><i class="fa fa-th"></i><span>@lang('site.answers')</span></a></li>
                <li><a href="{{ route('dashboard.Sections.index')}}"><i class="fa fa-th"></i><span>@lang('site.sections')</span></a></li>
                <li><a href="{{ route('dashboard.Articals.index') }}"><i class="fa fa-th"></i><span>@lang('site.Articals')</span></a></li>
                <li><a href="{{ route('dashboard.advertising.index') }}"><i class="fa fa-th"></i><span>@lang('site.add_advertising')</span></a></li>
            @elseif(Session::get('Authorize') == 2)
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
                <li><a href="{{ route('dashboard.users.index')}}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
                <li><a href="{{ route('dashboard.Nursery.index')}}"><i class="fa fa-th"></i><span>@lang('site.nursery')</span></a></li>
                <li><a href="{{ route('dashboard.Students.index')}}"><i class="fa fa-th"></i><span>@lang('site.students')</span></a></li>
                <li><a href="{{ route('dashboard.Questions.index')}}"><i class="fa fa-th"></i><span>@lang('site.questions')</span></a></li>
                <li><a href="{{ route('dashboard.Answers.index')}}"><i class="fa fa-th"></i><span>@lang('site.answers')</span></a></li>
                <li><a href="{{ route('dashboard.Sections.index')}}"><i class="fa fa-th"></i><span>@lang('site.sections')</span></a></li>
                <li><a href="{{ route('dashboard.Articals.index') }}"><i class="fa fa-th"></i><span>@lang('site.Articals')</span></a></li>
                <li><a href="{{ route('dashboard.advertising.index') }}"><i class="fa fa-th"></i><span>@lang('site.add_advertising')</span></a></li>
            @else
                <p style="font-size: 20px;white-space: pre-wrap;padding: 5px;margin-top: 50%;" class="w-auto text-danger text-center text-capitalize">please go to admin login first</p>
            @endif

        </ul>
    </section>

</aside>

