@extends('layouts.app)

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
        <div class="panel-heading tall-header">Customer
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#addPanel">
                <span id="addCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
        </div>
        <div id="addPanel" class="panel-body in">
            <form role="form" method="POST" action="{{ url('/customers') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="category" class="control-label">ID</label>
                            <input name="category" class="form-control">

                            </input>

                            <label for="spec_id" class="control-label">Forename</label>
                            <input name="spec_id" class="form-control">

                            </input>

                            <label for="condition" class="control-label">Surname</label>
                            <input name="condition" class="form-control">

                            </input>
                        </div>

                        <div class="form-group col-sm-12 col-md-6">

                            <label for="weight" class="control-label">Email</label>
                            <input name="weight" class="form-control">

                            </input>

                            <label for="weight" class="control-label">Phone no.</label>
                            <input name="weight" class="form-control">

                            </input>
                        </div>

                        <button class="btn btn-primary form-btn pull-right" type="submit">Add Customer</button>

                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@endsection