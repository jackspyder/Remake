@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Item Details</div>

                <div class="panel-body">
                    <div class="row">

                        <div class="form-group col-sm-12 col-md-6">
                            <ul class="list">
                                <li><b>Barcode: </b>{{$item->barcode}}</li>
                                <li><b>Category: </b>{{$item->category}}</li>
                                <li><b>Brand: </b>{{$item->specs->brand}}</li>
                                <li><b>Model: </b>{{$item->specs->model}}</li>
                                <li><b>Weight: </b>{{$item->weight}}</li>
                                <li><b>Condition: </b>{{$item->condition}}</li>
                                <li><b>Price: </b>£{{$item->price}}</li>
                                <li><b>Status: </b>{{$item->status}}</li>
                                <li><b>C.O.A: </b>{{$item->coa}}</li>
                                <li><b>Notes: </b>{{$item->notes}}</li>
                            </ul>

                            <div id="{{$item->id}}">
                                @include('includes.specTable')
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <ul class="list">
                                    <li><b>Height:</b> {{ $item->dimensions->height }}</li>
                                    <li><b>Width:</b> {{ $item->dimensions->width }}</li>
                                    <li><b>Depth:</b> {{ $item->dimensions->depth }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if($item->deleted_at == null)
                        <a href="{{ route('items.edit', $item) }}" class="btn btn-primary pull-right">Edit
                            Item</a>

                        {{ Form::open(['route' => ['items.destroy', $item->id],'class' => 'pull-left']) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete this Item!',['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    @else
                        {{ Form::open(['action' => ['ItemsController@restore', $item->id],'class' => 'pull-right']) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Restore This Item',['class' => 'btn btn-primary'])}}
                        {{ Form::close() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
