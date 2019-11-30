@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.nursery')</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.Nursery.index') }}"> @lang('site.nursery')</a></li>
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
                    <form action="{{ route('dashboard.Nursery.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.nur_name')</label>
                            <input type="text" name="nur_name" class="form-control" value="{{ old('nur_name') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.phone')</label>
                            <input type="number" name="phone" class="form-control" value="{{ old('phone') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.requirement')</label>
                            <input type="file" name="requirement" class="form-control" value="{{ old('requirement') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.status')</label>
                            <input type="number" name="status" class="form-control" value="{{ old('status') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.desc')</label>
                            <input type="text" name="desc" class="form-control" value="{{ old('desc') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image1" class="form-control" value="{{ old('image1') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.imageT1')</label>
                            <input type="file" name="imageT1" class="form-control" value="{{ old('imageT1') }}">
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
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
