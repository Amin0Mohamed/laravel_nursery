@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.Students.index') }}"> @lang('site.students')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.edit')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.Students.update', [$change->rid]) }}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="sName" class="form-control" value="{{ $change->sName }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.age')</label>
                            <input type="number" name="sAge" class="form-control" value="{{ $change->sAge }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.nationality')</label>
                            <input type="text" name="sNationality" class="form-control" value="{{ $change->sNationality }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.fName')</label>
                            <input type="text" name="fName" class="form-control" value="{{ $change->fName }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.fWork')</label>
                            <input type="text" name="fWork" class="form-control" value="{{ $change->fWork }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.fMobile')</label>
                            <input type="text" name="fMobile" class="form-control" value="{{ $change->fMobile }}" />
                        </div>

                        <div class="form-group">
                            <label>@lang('site.mName')</label>
                            <input type="text" name="mName" class="form-control" value="{{ $change->mName }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.mWork')</label>
                            <input type="text" name="mWork" class="form-control" value="{{ $change->mWork }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.mMobile')</label>
                            <input type="text" name="mMobile" class="form-control" value="{{ $change->mMobile }}" />
                        </div>

                        <div class="form-group">
                            <label>@lang('site.nName')</label>
                            <input type="text" name="nName" class="form-control" value="{{ $change->nName }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.nMobile')</label>
                            <input type="text" name="nMobile" class="form-control" value="{{ $change->nMobile }}" />
                        </div>

                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ $change->Address }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.status')</label>
                            <input type="number" name="status" class="form-control" value="{{ $change->Status }}" />
                        </div>
                        <div class="form-group">
                            <label>@lang('site.rDate')</label>
                            <input type="date" name="rDate" class="form-control" value="{{ $change->rDate }}" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
