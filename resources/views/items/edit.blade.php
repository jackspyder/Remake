@extends('layouts.app')

@section('content')

    {{ Form::model($item, array('route' => array('items.update', $item->id), 'method' => 'PATCH')) }}

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

            {{--Main Panel Content--}}
            <div class="container-fluid">
                <div class="row">



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

                </div>
            </div>
        </div>
    </div>



    <div class="panel panel-default">
        {{--Panel head--}}
        <div class="panel-heading tall-header">Add Specifications
            {{--Panel minimise button--}}
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#specPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
        </div>

        <div class="panel-body" id="specPanel">

            {{--Main Panel Content--}}
            <div class="container-fluid">
                <div class="row">
                    {{  Form::setModel($item->specs)  }}
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
                            {{ Form::text('odd', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('gpu', 'Graphics Card (GPU)') }}
                            {{ Form::text('gpu', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('battery', 'Battery') }}
                            {{ Form::text('battery', null, array('class' => 'form-control')) }}
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
                            {{ Form::text('lan', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('wlan', 'Wireless Card (WLAN)') }}
                            {{ Form::text('wlan', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('os', 'Operating System') }}
                            {{ Form::text('os', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('psu', 'Power Supply') }}
                            {{ Form::text('psu', null, array('class' => 'form-control')) }}
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
                    {{  Form::setModel($item->dimensions)  }}
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

    {{ Form::submit('Add Dimensions', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection