@extends('layouts.app')

@section('content')

    @include('includes.salesModal')

    <div class="panel panel-default">
        <div class="panel-heading tall-header">Receipts
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
                        <th>COA</th>
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
                                        - {{$item->spec->brand}} {{$item->spec->model}}</div>
                                @endforeach
                            </td>
                            <td>{{$receipt->served_by}}</td>
                            <td>{{$receipt->payment}}</td>
                            <td>{{$receipt->warranty}}</td>
                            <td>{{$receipt->coa}}</td>
                            <td>{{$receipt->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
