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
            <form role="form" method="POST" action="{{ url('/receipts') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">

                            <label for="id" class="control-label">Receipt ID</label>
                            <input name="id" class="form-control">

                            </input>

                            <label for="list[]" class="control-label">Items</label>
                            <select name="list[]" class="form-control select2" multiple>
                                @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->id}}
                                        - {{$item->spec->brand}} {{$item->spec->model}}</option>
                                @endforeach
                            </select>


                        </div>

                        <div class="form-group col-sm-12 col-md-6">

                            {{--<label for="served_by" class="control-label">Served By</label>--}}
                            {{--<input name="served_by" class="form-control">--}}

                            {{--</input>--}}

                            <label for="warranty" class="control-label">Warranty</label>
                            <select name="warranty" class="form-control">
                                <option value="None">None</option>
                                <option value="1 Month">1 Month</option>
                                <option value="3 Months">3 Months</option>
                                <option value="1 Year">1 Year</option>
                            </select>

                            <label for="payment" class="control-label">Payment type</label>
                            <select name="payment" class="form-control">
                                <option>Cash</option>
                                <option>Debit card</option>
                                <option>Credit card</option>
                            </select>

                            </input>

                        </div>

                        <button class="btn btn-primary form-btn pull-right" type="submit">Add Receipt</button>

                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>

@endsection
