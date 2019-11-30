@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.Articals')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.Articals')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.Articals')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a style="margin-bottom: 10px" href="{{route('dashboard.Articals.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.title')</th>
                                    <th>@lang('site.content')</th>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.ownerID')</th>
                                </tr>
                                </thead>
                                @foreach($articals as $section)
                                    <tbody>
                                    <tr>
                                        <td>{{$section->title}}</td>
                                        <td>{{$section->content}}</td>
                                        <td><img src="/productimages/{{$section->image}}" alt="error" width="80px" height="80px"></td>
                                        <td>{{$section->ownerID}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.Articals.edit',['id'=> $section->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.Articals.destroy',[$section->id]) }}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete">
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->

        </section>
    </div>
@endsection

