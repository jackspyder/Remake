@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
      <div class="panel-heading tall-header">Sales
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
                  </tr>

                  @foreach($receipts as $receipt)
                    <tr data-toggle="collapse" data-target="#{{$receipt->id}}" class="accordion-toggle clickable">
                      <td>{{$receipt->id}}</td>
                      <td>
                        @foreach($receipt->sales as $sale)
                          <div>{{$sale->item->id}} - {{$sale->item->spec->brand}} {{$sale->item->spec->model}}</div>
                        @endforeach
                      </td>
                      <td>{{$receipt->served_by}}</td>
                      <td>{{$receipt->payment}}</td>
                      <td>{{$receipt->warranty}}</td>
                      <td>{{$receipt->coa}}</td>
                    </tr>
                  @endforeach

              </table>
          </div>
      </div>
  </div>

@endsection
