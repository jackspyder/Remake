
<input type="hidden" id="forsale" value="{{$counts['forsale']}}" />
<input type="hidden" id="forparts" value="{{$counts['forparts']}}" />
<input type="hidden" id="storage" value="{{$counts['storage']}}" />

@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    {{$counts['forsale']}}
                    <canvas id="mycanvas"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
