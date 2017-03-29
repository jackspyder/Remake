@extends('layouts.app')

@section('content')

    @include('includes.searchModal')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="panel panel-default">
        <div class="panel-heading tall-header">Inventory
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#invPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#searchModal">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
        </div>
        <div id="invPanel" class="panel-body in">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Barcode</th>
                        <th>Category</th>
                        {{--<th>Brand</th>--}}
                        {{--<th>Model</th>--}}
                        <th>Weight</th>
                        <th>Condition</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr class="clickable" onclick="location.href='/items/{{ $item->id }}'">
                            <td>{{$item->barcode}}</td>
                            <td>{{$item->category}}</td>
                            {{--<td>{{$item->spec->brand}}</td>--}}
                            {{--<td>{{$item->spec->model}}</td>--}}
                            <td>{{$item->weight}}</td>
                            <td>{{$item->condition}}</td>
                            <td>£{{$item->price}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->notes}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ url('/items/create') }}" class="btn btn-primary pull-right">Add Item</a>
            </div>
        </div>
    </div>

@endsection
