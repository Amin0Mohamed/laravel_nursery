@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.sections')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.sections')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.sections')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a style="margin-bottom: 10px" href="{{route('dashboard.Sections.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.name')</th>
                                    <th>@lang('site.desc')</th>
                                    <th>@lang('site.available')</th>
                                    <th>@lang('site.ownerID')</th>
                                </tr>
                                </thead>
                                @foreach($sections as $section)
                                    <tbody>
                                    <tr>
                                        <td>{{$section->Name}}</td>
                                        <td>{{$section->Desc}}</td>
                                        <td>{{$section->Available}}</td>
                                        <td>{{$section->ownerID}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.Sections.edit',['id'=> $section->sid])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.Sections.destroy',[$section->sid]) }}" method="post" style="display: inline-block">
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

