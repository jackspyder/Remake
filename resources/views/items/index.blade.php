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
                        <th>ID</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Weight</th>
                        <th>Condition</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr data-toggle="collapse" data-target="#{{$item->id}}" class="accordion-toggle clickable">
                            <td>{{$item->id}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->spec->brand}}</td>
                            <td>{{$item->spec->model}}</td>
                            <td>{{$item->weight}}</td>
                            <td>{{$item->condition}}</td>
                            <td>£{{$item->price}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->notes}}</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="hiddenRow">
                                <div id="{{$item->id}}" class="collapse">
                                    @include('includes.specTable')
                                    <a href="/items/{{ $item->id }}" class=" btn btn-primary">View Item</a>
                                </div>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
