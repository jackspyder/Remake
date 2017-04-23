@extends('layouts.app')

@section('content')
    <div class="form-group">
        {{ Form::open(['url' => '/items', 'method' => 'POST']) }}
        <div class="panel panel-default">
            {{--Panel head--}}
            <div class="panel-heading tall-header">Add New Item
                {{--Panel minimise button--}}
                <button type="button" class="btn btn-default pull-right" data-toggle="collapse"
                        data-target="#itemPanel">
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


                        {{--Row left--}}
                        <div class="form-group col-sm-12 col-md-6">

                            <div class="form-group">
                                {{ Form::label('barcode', 'Barcode') }}
                                {{ Form::number('barcode', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('category', 'Category') }}
                                {{ Form::select('category', [
                                'Furniture' => 'Furniture',
                                '1100.Laptops' => '1100.Laptops',
                                '1200.Desktop PCs' => '1200.Desktop PCs',
                                '1300.Printers'=>'1300.Printers',
                                '1400.All in ones'=>'1400.All in ones',
                                '1500.Monitors' => '1500.Monitors',
                                '1510.Projectors' => '1510.Projectors',
                                '1520.Smartboards'=>'1520.Smartboards',
                                '1600.Replacement parts' => '1600.Replacement parts',
                                '1710.Keyboards'=>'1710.Keyboards',
                                '1720.Mice' => '1720.Mice',
                                '1730.Speakers' => '1730.Speakers',
                                '1740.Scanners' => '1740.Scanners',
                                '1750.Peripherals'=>'1750.Peripherals',
                                '1760.Smartphones'=>'1760.Smartphones',
                                '1770.Tablets'=>'1770.Tablets',
                                '1780.Networks' => '1780.Networks',
                                '1790.Games Consoles' => '1790.Games Consoles',
                                '1800.IT Misc' => '1800.IT Misc',
                                '1900.Servers'=>'1900.Servers',
                                '4000.Electricals'=>'4000.Electricals',
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
                                'For Refurbishment'=>'For Refurbishment',
                                'Storage' => 'Storage',
                                'For Sale' => 'For Sale',
                                'For Parts' => 'For Parts',
                                'Sold'=>'Sold',
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

                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            {{--Panel head--}}
            <div class="panel-heading tall-header">Add Specifications
                {{--Panel minimise button--}}
                <button type="button" class="btn btn-default pull-right" data-toggle="collapse"
                        data-target="#specPanel">
                    <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
                </button>
            </div>

            <div class="panel-body" id="specPanel">

                {{--Main Panel Content--}}
                <div class="container-fluid">
                    <div class="row">

                        {{--Row Left--}}
                        <div class="form-group col-sm-12 col-md-6">

                            <div class="form-group">
                                {{ Form::label('brand', 'Brand') }}
                                {{ Form::text('brand', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('model', 'Model') }}
                                {{ Form::text('model', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('cpu', 'CPU') }}
                                {{ Form::text('cpu', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('ram', 'Memory (RAM)') }}
                                {{ Form::text('ram', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('hdd', 'Hard Drive (HDD)') }}
                                {{ Form::text('hdd', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('odd', 'Optical Drive') }}
                                {{ Form::select('odd', [
                                'yes'=>'Yes',
                                'no' => 'No',
                                ], null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('gpu', 'Graphics Card (GPU)') }}
                                {{ Form::text('gpu', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('battery', 'Battery') }}
                                {{ Form::select('battery', [
                                'yes'=>'Yes',
                                'no' => 'No',
                                ], null, array('class' => 'form-control')) }}
                            </div>
                        </div>

                        {{--Row Right--}}
                        <div class="form-group col-sm-12 col-md-6">

                            <div class="form-group">
                                {{ Form::label('usb', 'USB Ports') }}
                                {{ Form::text('usb', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('lan', 'Network Port (LAN)') }}
                                {{ Form::select('lan', [
                                 'yes'=>'Yes',
                                 'no' => 'No',
                                 ], null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('wlan', 'Wireless Card (WLAN)') }}
                                {{ Form::select('wlan', [
                                'yes'=>'Yes',
                                'no' => 'No',
                                ], null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('os', 'Operating System') }}
                                {{ Form::text('os', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('psu', 'Power Supply') }}
                                {{ Form::select('psu', [
                                'yes'=>'Yes',
                                'no' => 'No',
                                ], null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('screen_size', 'Screen Size') }}
                                {{ Form::text('screen_size', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('screen_rez', 'Screen Resolution') }}
                                {{ Form::text('screen_rez', null, array('class' => 'form-control')) }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            {{--Panel head--}}
            <div class="panel-heading tall-header">Add Furniture Dimensions
                {{--Panel minimise button--}}
                <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#dimPanel">
                    <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
                </button>
            </div>

            <div class="panel-body" id="dimPanel">

                {{--Main Panel Content--}}
                <div class="container-fluid">
                    <div class="row">

                        {{--Row Left--}}
                        <div class="form-group col-sm-12 col-md-6">

                            <div class="form-group">
                                {{ Form::label('height', 'Height') }}
                                {{ Form::text('height', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('width', 'Width') }}
                                {{ Form::text('width', null, array('class' => 'form-control')) }}
                            </div>

                        </div>

                        {{--Row Right--}}
                        <div class="form-group col-sm-12 col-md-6">

                            <div class="form-group">
                                {{ Form::label('depth', 'Depth') }}
                                {{ Form::text('depth', null, array('class' => 'form-control')) }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{ Form::submit('Submit Item', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}


    </div>
@endsection