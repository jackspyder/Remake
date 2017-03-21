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
                                <li><b>Item ID: </b>{{$item->id}}</li>
                                <li><b>Category: </b>{{$item->category}}</li>
                                <li><b>Brand: </b>{{$item->spec->brand}}</li>
                                <li><b>Model: </b>{{$item->spec->model}}</li>
                                <li><b>Weight: </b>{{$item->weight}}</li>
                                <li><b>Condition: </b>{{$item->condition}}</li>
                                <li><b>Price: £</b>{{$item->price}}</li>
                                <li><b>Status: </b>{{$item->status}}</li>
                                <li><b>Notes: </b>{{$item->notes}}</li>
                            </ul>
                        </div>
                        <div id="{{$item->id}}">
                            @include('includes.specTable')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection