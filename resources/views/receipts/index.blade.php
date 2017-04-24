@extends('layouts.app')

@section('content')

    @include('includes.salesModal')

    <div class="panel panel-default">
        <div class="panel-heading tall-header"><b>Receipts</b>
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#salesPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#searchModal">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
        </div>
        <div id="salesPanel" class="panel-body in">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Items</th>
                        <th>Served by</th>
                        <th>Payment type</th>
                        <th>Warranty</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($receipts as $receipt)
                        <tr class="clickable" onclick="location.href='/receipts/{{ $receipt->id }}'">
                            <td>{{$receipt->id}}</td>
                            <td>
                                @foreach($receipt->items as $item)
                                    <div>{{$item->id}}
                                        - {{$item->specs->brand}} {{$item->specs->model}}</div>
                                @endforeach
                            </td>
                            <td>{{$receipt->served_by}}</td>
                            <td>{{$receipt->payment}}</td>
                            <td>{{$receipt->warranty}}</td>
                            <td>{{$receipt->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ url('/receipts/create') }}" class="btn btn-primary pull-right">Add Receipt</a>
        </div>

    </div>

    <div class="panel panel-default">
        <div class="panel-heading tall-header"><b>Deleted Receipts</b>
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#salesTrash">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="false"></span>
            </button>
        </div>
        <div id="salesTrash" class="panel-body collapse">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Items</th>
                        <th>Served by</th>
                        <th>Payment type</th>
                        <th>Warranty</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trashed as $trash)
                        <tr class="clickable" onclick="location.href='/receipts/{{ $trash->id }}'">
                            <td>{{$trash->id}}</td>
                            <td>
                                @foreach($trash->items as $item)
                                    <div>{{$item->id}}
                                        - {{$item->specs->brand}} {{$item->specs->model}}</div>
                                @endforeach
                            </td>
                            <td>{{$trash->served_by}}</td>
                            <td>{{$trash->payment}}</td>
                            <td>{{$trash->warranty}}</td>
                            <td>{{$trash->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
