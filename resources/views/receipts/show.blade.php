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
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($receipt->items as $item)
                                                <tr class="clickable"
                                                    onclick="location.href='/items/{{ $item->id }}'">
                                                    <td>{{$item->barcode}}</td>
                                                    <td>{{$item->specs->brand}}</td>
                                                    <td>{{$item->specs->model}}</td>
                                                    <td>£{{ $item->price }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li><b>Served by: </b>{{$receipt->served_by}}</li>
                                <li><b>Payment Type: </b>{{$receipt->payment}}</li>
                                <li><b>Warranty: </b>{{$receipt->warranty}}</li>
                                <li><b>Discount: </b>£{{$receipt->discount}}</li>
                                <li><b>Created at: </b>{{$receipt->created_at->toDayDateTimeString()}}</li>
                            </ul>

                        </div>

                    </div>
                    @if($receipt->deleted_at == null)
                        {{ Form::open(['route' => ['receipts.destroy', $receipt->id],'class' => 'pull-left']) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete this Receipt!',['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    @else
                        {{ Form::open(['action' => ['ReceiptsController@restore', $receipt->id],'class' => 'pull-right']) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Restore This Receipt',['class' => 'btn btn-primary'])}}
                        {{ Form::close() }}
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection