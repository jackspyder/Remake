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
                      <th>Customer</th>
                      <th>Warranty</th>
                      <th>COA</th>
                  </tr>
              </table>
          </div>
      </div>
  </div>

@endsection
