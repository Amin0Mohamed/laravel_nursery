@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.students')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.students')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.students')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a style="margin-bottom: 15px"  href="{{route('dashboard.Students.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.name')</th>
                                    <th>@lang('site.age')</th>
                                    <th>@lang('site.nationality')</th>
                                    <th>@lang('site.fname')</th>
                                    <th>@lang('site.fWork')</th>
                                    <th>@lang('site.fMobile')</th>
                                    <th>@lang('site.mName')</th>
                                    <th>@lang('site.mWork')</th>
                                    <th>@lang('site.mMobile')</th>
                                    <th>@lang('site.nName')</th>
                                    <th>@lang('site.nMobile')</th>
                                    <th>@lang('site.address')</th>
                                    <th>@lang('site.status')</th>
                                    <th>@lang('site.rDate')</th>
                                </tr>
                                </thead>
                                @foreach($students as $student)
                                    <tbody>
                                    <tr>
                                        <td>{{$student->sName}} </td>
                                        <td>{{$student->sAge}}</td>
                                        <td>{{$student->sNationality}}</td>
                                        <td>{{$student->fName}} </td>
                                        <td>{{$student->fWork}}</td>
                                        <td>{{$student->fMobile}}</td>
                                        <td>{{$student->mName}} </td>
                                        <td>{{$student->mWork}}</td>
                                        <td>{{$student->mMobile}}</td>
                                        <td>{{$student->nName}} </td>
                                        <td>{{$student->nMobile}}</td>
                                        <td>{{$student->Address}}</td>
                                        <td>{{$student->Status}}</td>
                                        <td>{{$student->rDate}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.Students.edit',['id'=>$student->rid])}}'" class="btn btn-info">@lang('site.edit')</button>
                                        </td>
                                        <td>
                                            <form action="{{route('dashboard.Students.destroy',[$student->rid])}}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete">
                                            </form>

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
