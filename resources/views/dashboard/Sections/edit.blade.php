@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.sections')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.Sections.index') }}"> @lang('site.sections')</a></li>
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

                    <form action="{{ route('dashboard.Sections.update', [$change->sid]) }}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{$change->Name }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.desc')</label>
                            <input type="text" name="desc" class="form-control" value="{{ $change->Desc}}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.available')</label>
                            <input type="number" name="available" class="form-control" value="{{ $change->Available}}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.ownerID')</label>
                            <select  id="" name="ownerID"  class="form-control">
                                <option value="@lang('site.ownerID')"></option>
                                @foreach( $last_users as $last_user )
                                    <option value="{{ $last_user->Uid }}">{{ $last_user->Uid }}</option>
                                @endforeach
                            </select>
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
