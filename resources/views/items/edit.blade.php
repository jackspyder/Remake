@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Item</div>
                <div class="panel-body">
                    <h1>Edit Item</h1>

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

                    {{ Form::model($item, array('route' => array('items.update', $item->id), 'method' => 'PATCH')) }}

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

                    <div class="form-group">
                        {{ Form::label('notes', 'Notes') }}
                        {{ Form::text('notes', null, array('class' => 'form-control')) }}
                    </div>

                    {{--Form::select('size', ['L' => 'Large', 'S' => 'Small']);--}}

                    {{ Form::submit('Edit Item', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
