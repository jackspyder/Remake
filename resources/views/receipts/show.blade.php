@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Item Details</div>

                <div class="panel-body">
                    <div class="row">

                        <div class="" col-md-4>
                            <ul class="list">
                                <li><b>Receipt ID: </b>{{$receipt->id}}</li>
                                <li><b>Item List: </b>
                                    @foreach($receipt->sales as $sale)
                                        <div>{{$sale->item->id}}
                                            - {{$sale->item->spec->brand}} {{$sale->item->spec->model}}</div>
                                    @endforeach
                                </li>
                                <li><b>Served by: </b>{{$receipt->served_by}}</li>
                                <li><b>Payment Type: </b>{{$receipt->payment}}</li>
                                <li><b>Warranty: </b>{{$receipt->warranty}}</li>
                                <li><b>COA: </b>{{$receipt->coa}}</li>
                                <li><b>Created at: </b>{{$receipt->created_at->toDayDateTimeString()}}</li>
                            </ul>

                        </div>

                        {{--<div id="{{$item->id}}">--}}
                            {{--@include('includes.specTable')--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection