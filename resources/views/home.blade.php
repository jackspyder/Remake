
<input type="hidden" id="forsale" value="{{$counts['forsale']}}" />
<input type="hidden" id="forparts" value="{{$counts['forparts']}}" />
<input type="hidden" id="storage" value="{{$counts['storage']}}" />
<input type="hidden" id="sold" value="{{$counts['sold']}}" />
<input type="hidden" id="refurbishment" value="{{$counts['refurbishment']}}" />

@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Dashboard!</b></div>

                <div class="panel-body">
                    <canvas id="mycanvas"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
