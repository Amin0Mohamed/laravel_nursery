@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.questions')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.questions')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.questions')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.detail')</th>
                                </tr>
                                </thead>
                                @foreach($quest as $que)
                                    <tbody>
                                    <tr>
                                        <td>{{$que->Detail}} </td>
                                        <td>
                                            <button onclick="window.location='{{url('/dashboard/ReplyQ',['qid'=> $que->qid,'ownerID'=>$que->ownerID])}}'" class="btn btn-info">@lang('site.Answer Question')</button>
                                            <form action="{{route('dashboard.Questions.destroy',[$que->qid])}}" method="post" style="display: inline-block">
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
