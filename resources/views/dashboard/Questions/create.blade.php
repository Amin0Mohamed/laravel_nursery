@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.questions')</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.Questions.index') }}"> @lang('site.questions')</a></li>
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
                    <form action="{{ route('dashboard.Questions.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.detail')</label>
                            <input type="text" name="detail" class="form-control" value="{{ old('detail') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.qSt')</label>
                            <input type="number" name="qSt" class="form-control" value="{{ old('qSt') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.uid1')</label>
                            <input type="number" name="uid1" class="form-control" value="{{ old('uid1') }}">
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
