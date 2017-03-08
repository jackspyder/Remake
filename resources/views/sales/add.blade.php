@extends('layouts.app')

@section('content')

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
      <div class="panel-heading tall-header">Sale
          <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#addPanel">
              <span id="addCaret" class="fa fa-caret-down" aria-hidden="true"></span>
          </button>
      </div>
      <div id="addPanel" class="panel-body in">
          <form role="form" method="POST" action="{{ url('/sales/add') }}">
              <div class="container-fluid">
                  <div class="row">
                      <div class="form-group col-sm-12 col-md-6">

                          <label for="id" class="control-label">Receipt ID</label>
                          <input name="id" class="form-control">

                          </input>

                          <label for="warranty" class="control-label">Warranty</label>
                          <input name="warranty" class="form-control">

                          </input>

                          <label for="payment" class="control-label">Payment type</label>
                          <select name="payment" class="form-control">
                            <option>Debit card</option>
                            <option>Credit card</option>
                            <option>Cash</option>
                          </select>

                        </input>
                      </div>

                      <div class="form-group col-sm-12 col-md-6">

                        <label for="spec_id" class="control-label">Served By</label>
                        <input name="spec_id" class="form-control">

                        </input>

                        <label for="spec_id" class="control-label">Items</label>
                        <select id="select" class="form-control select2" multiple="multiple">
                          @foreach($items as $item)
                              <option value="{{$item->id}}">{{$item->id}} - {{$item->spec->brand}} {{$item->spec->model}}</option>
                          @endforeach
                        </select>

                      </div>

                      <button class="btn btn-primary form-btn pull-right" type="submit">Add Item</button>

                  </div>
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
      </div>
  </div>

@endsection
