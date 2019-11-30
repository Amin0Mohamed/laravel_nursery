@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">
                <div class="col-sm-3"></div>
               <div class="col-sm-6">
                   <h3 class="text-center font-italic font-weight-bolder " style="margin-bottom: 60px;color: #09c;">نظام إدارة الحضانة</h3>
                   <p class="lead">
                       توفر دور الحضانة بيئة تعتني بالأطفال وجوانب جوانبهم الدينية والصحية والاجتماعية والنفسية التي تقل أعمارهم عن خمس سنوات. هدفها هو توفير الراحة للأم والعائلة مع الأطفال لأنهم لا يستطيعون تركهم في المنزل بمفردهم خلال أوقاتهم المزدحمة. هناك أكثر من 10 حضانات موزعة على مناطق الأفلاج ، والتي تضم أفضل الموظفين والخبراء في دور الحضانة لرعاية الأطفال.
                   </p>
                   <img src="/img/image7.jpg" class="img-responsive img-fluid mx-auto d-block" width="100%" height="200px" alt="not found">
               </div>
                <div class="col-sm-3"></div>
            </div><!-- end of row -->


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
