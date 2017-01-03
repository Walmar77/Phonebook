@extends('index')

@section('content')

       @include('_common._form')
       <hr>
        <div class="text-right"><b>Всего записей:</b> <i class="badge">2</i></div>

        <div class="note">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>Info</span>
                    </h3>
                </div>

                <div class="panel-body">
                    2656562358956
                    <hr/>
                    <div class="pull-right">
                        <a class="btn btn-info" href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                        <button class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
@endsection
