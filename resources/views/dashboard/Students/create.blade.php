@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.students')</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.Students.index') }}"> @lang('site.students')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')
                    <form action="{{ route('dashboard.Students.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="sName" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.age')</label>
                            <input type="number" name="sAge" class="form-control" value="{{ old('sAge') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.nationality')</label>
                            <input type="text" name="sNationality" class="form-control" value="{{ old('sNationality') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.fName')</label>
                            <input type="text" name="fName" class="form-control" value="{{ old('fName') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.fWork')</label>
                            <input type="text" name="fWork" class="form-control" value="{{ old('fWork') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.fMobile')</label>
                            <input type="text" name="fMobile" class="form-control" value="{{ old('fMobile') }}" />
                        </div>

                        <div class="form-group">
                            <label>@lang('site.mName')</label>
                            <input type="text" name="mName" class="form-control" value="{{ old('mName') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.mWork')</label>
                            <input type="text" name="mWork" class="form-control" value="{{ old('mWork') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.mMobile')</label>
                            <input type="text" name="mMobile" class="form-control" value="{{ old('mMobile') }}" />
                        </div>

                        <div class="form-group">
                            <label>@lang('site.nName')</label>
                            <input type="text" name="nName" class="form-control" value="{{ old('nName') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.nMobile')</label>
                            <input type="text" name="nMobile" class="form-control" value="{{ old('nMobile') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}" />
                        </div>

                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.status')</label>
                            <input type="number" name="status" class="form-control" value="{{ old('status') }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.rDate')</label>
                            <input type="date" name="rDate" class="form-control" value="{{ old('rDate') }}" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
