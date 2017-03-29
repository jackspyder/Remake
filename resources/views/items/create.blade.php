@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        {{--Panel head--}}
        <div class="panel-heading tall-header">Edit Item
            {{--Panel minimise button--}}
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#itemPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
        </div>
        {{--Panel Body--}}

        <div class="panel-body" id="itemPanel">
            <!-- if there are creation errors, they will show here -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{--Main Panel content--}}
            <div class="container-fluid">
                <div class="row">

                    {{ Form::model(array('route' => array('items.create'), 'method' => 'POST')) }}

                    {{--Row left--}}
                    <div class="form-group col-sm-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('id', 'ID (barcode)') }}
                            {{ Form::number('id', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('category', 'Category') }}
                            {{ Form::select('category', [
                            'Furniture' => 'Furniture',
                            'Laptops' => 'Laptops',
                            'Desktop PCs' => 'Desktop PCs',
                            'Printers'=>'Printers',
                            'All in ones'=>'All in ones',
                            'Monitors' => 'Monitors',
                            'For Parts' => 'For Parts',
                            'Projectors' => 'Projectors',
                            'Smartboards'=>'Smartboards',
                            'Keyboards'=>'Keyboards',
                            'Mice' => 'Mice',
                            'Speakers' => 'Speakers',
                            'Scanners' => 'Scanners',
                            'Peripherals'=>'Peripherals',
                            'Smartphones'=>'Smartphones',
                            'Tablets'=>'Tablets',
                            'Networks' => 'Networks',
                            'Games Consoles' => 'Games Consoles',
                            'IT Misc' => 'IT Misc',
                            'Servers'=>'Servers',
                            'Electricals'=>'Electricals',
                            ], null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('condition', 'Condition') }}
                            {{ Form::select('condition', [
                            'Very Good' => 'Very Good',
                            'Good' => 'Good',
                            'Fair' => 'Fair',
                            ], null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('weight', 'Weight') }}
                            {{ Form::text('weight', null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    {{--Row Right--}}
                    <div class="form-group col-sm-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('price', 'Price') }}
                            {{ Form::text('price', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('status', 'Status') }}
                            {{ Form::select('status', [
                            'For Sale' => 'For Sale',
                            'For Parts' => 'For Parts',
                            'Storage' => 'Storage',
                            'Sold'=>'Sold',
                            'For Refurbishment'=>'For Refurbishment',
                            ], null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('furniture', 'Furniture Type') }}
                            {{ Form::select('furniture', [
                            'null' => 'N/A',
                            'chairs' => 'Chairs',
                            'setOfChairs' => 'Set of Chairs',
                            'tables'=>'tables',
                            'drawersCabinets'=>'Drawers/Cabinets',
                            'shelves'=>'shelves',
                            'accessories'=>'accessories',
                            'mirrors'=>'mirrors',
                            'frames'=>'frames',
                            'upcycled'=>'upcycled',
                            'crafts'=>'crafts',
                            ], null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('coa', 'C.O.A') }}
                            {{ Form::text('coa', null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    {{--outside the columns--}}
                    <div class="form-group col-sm-12">
                        {{ Form::label('notes', 'Notes') }}
                        {{ Form::textarea('notes', null, array('class' => 'form-control')) }}
                    </div>

                    {{ Form::submit('Edit Item', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading tall-header">Product Specification
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#specPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
        </div>
        <div id="specPanel" class="panel-body in">
            <div class="row">
                <form role="form" method="POST" action="{{ url('/specs') }}">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="brand" class="control-label">Brand</label>
                                <input name="brand" class="form-control" required>

                                </input>

                                <label for="model" class="control-label">Model</label>
                                <input name="model" class="form-control" required>

                                </input>

                                <label for="cpu" class="control-label">CPU</label>
                                <input name="cpu" class="form-control">

                                </input>

                                <label for="ram" class="control-label">RAM</label>
                                <input name="ram" class="form-control">

                                </input>

                                <label for="hdd" class="control-label">HDD</label>
                                <input name="hdd" class="form-control">

                                </input>

                                <label for="odd" class="control-label">ODD</label>
                                <input name="odd" class="form-control">

                                </input>

                                <label for="gpu" class="control-label">GPU</label>
                                <input name="gpu" class="form-control">

                                </input>

                                <label for="battery" class="control-label">Battery</label>
                                <input name="battery" class="form-control">

                                </input>
                            </div>


                            <div class="form-group col-sm-12 col-md-6">
                                <label for="usb" class="control-label">USB</label>
                                <input name="usb" class="form-control">

                                </input>

                                <label for="lan" class="control-label">LAN</label>
                                <input name="lan" class="form-control">

                                </input>

                                <label for="wlan" class="control-label">WLAN</label>
                                <input name="wlan" class="form-control">

                                </input>

                                <label for="os" class="control-label">OS</label>
                                <input name="os" class="form-control">

                                </input>

                                <label for="psu" class="control-label">PSU</label>
                                <input name="psu" class="form-control">

                                </input>

                                <label for="screen_size" class="control-label">Screen Size</label>
                                <input name="screen_size" class="form-control">

                                </input>

                                <label for="screen_rez" class="control-label">Screen Resolution</label>
                                <input name="screen_rez" class="form-control">

                                </input>

                                <button class="btn btn-primary form-control form-btn" type="submit">Add Specification
                                </button>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection