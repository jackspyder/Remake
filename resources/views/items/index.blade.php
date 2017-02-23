@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">Items</div>
    <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Weight</th>
            <th>Condition</th>
            <th>Status</th>
            <th>Notes</th>
          </tr>
        </thead>
        <tbody>
          @foreach($items as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->category}}</td>
              <td>{{$item->weight}}</td>
              <td>{{$item->condition}}</td>
              <td>{{$item->status}}</td>
              <td>{{$item->notes}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>

@endsection
