@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Receipt Details</div>

                <div class="panel-body">
                    <div class="row">

                        <div class="" col-md-4>
                            <ul class="list">
                                <li><b>Receipt ID: </b>{{$receipt->id}}</li>
                                <li><b>Item List: </b>
                                    @foreach($receipt->items as $item)
                                        <div>{{$item->id}}
                                            - {{$item->specs->brand}} {{$item->specs->model}} - £{{ $item->price }}</div>
                                    @endforeach
                                </li>
                                <li><b>Served by: </b>{{$receipt->served_by}}</li>
                                <li><b>Payment Type: </b>{{$receipt->payment}}</li>
                                <li><b>Warranty: </b>{{$receipt->warranty}}</li>
                                <li><b>Discount: </b>£{{$receipt->discount}}</li>
                                <li><b>Created at: </b>{{$receipt->created_at->toDayDateTimeString()}}</li>
                            </ul>

                        </div>

                    </div>


                    {{ Form::open(['route' => ['receipts.destroy', $receipt->id],'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Receipt!',['class' => 'btn btn-warning'])}}
                    {{ Form::close() }}
                </div>

            </div>
        </div>
    </div>
@endsection