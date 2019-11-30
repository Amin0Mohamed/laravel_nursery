@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.nursery')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.nursery')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.nursery')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a style="margin-bottom: 15px" href="{{route('dashboard.Nursery.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.nur_name')</th>
                                    <th>@lang('site.address')</th>
                                    <th>@lang('site.phone')</th>
                                    <th>@lang('site.requirement')</th>
                                    <th>@lang('site.status')</th>
                                    <th>@lang('site.desc')</th>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.imageT1')</th>
                                    <th>@lang('site.ownerID')</th>
                                </tr>
                                </thead>
                                @foreach($nursery as $nurser)
                                    <tbody>
                                    <tr>
                                        <td>{{$nurser->Nur_name}} </td>
                                        <td>{{$nurser->Address}}</td>
                                        <td>{{$nurser->Phone}}</td>
                                        <td>{{$nurser->Requirement}} </td>
                                        <td>{{$nurser->Status}}</td>
                                        <td>{{$nurser->Desc}}</td>
                                        <td>
                                            <img style="display: inline" width="50px" height="50px"  src="/productimages/{{$nurser->image1}}" alt="error">
                                        </td>
                                        <td>
                                            <img style="display: inline" width="50px" height="50px"  src="/productimages/{{$nurser->imageT1}}" alt="error">
                                        </td>
                                        <td>{{$nurser->ownerID}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.Nursery.edit',['id1'=>$nurser->Nur_id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.Nursery.destroy',[$nurser->Nur_id])}}" method="post" style="display: inline-block">
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
