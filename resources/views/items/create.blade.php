@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading tall-header">Item
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#itemPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
        </div>
        <div id="itemPanel" class="panel-body in">
            <form role="form" method="POST" action="{{ url('/items') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="id" class="control-label">ID</label>
                            <input name="id" class="form-control">

                            </input>

                            <label for="category" class="control-label">Category</label>
                            <select name="category" class="form-control">
                                <option value="Furniture">Furniture</option>
                                <option value="Laptops">Laptops</option>
                                <option value="Desktop PCs">Desktop PCs</option>
                                <option value="Printers">Printers</option>
                                <option value="All in ones">All in ones</option>
                                <option value="Monitors">Monitors</option>
                                <option value="Projectors">Projectors</option>
                                <option value="Smartboards">Smartboards</option>
                                <option value="Replacement parts">Replacement parts</option>
                                <option value="Keyboards">Keyboards</option>
                                <option value="Mice">Mice</option>
                                <option value="Speakers">Speakers</option>
                                <option value="Scanners">Scanners</option>
                                <option value="Peripherals">Peripherals</option>
                                <option value="Smartphones">Smartphones</option>
                                <option value="Tablets">Tablets</option>
                                <option value="Networks">Networks</option>
                                <option value="Games Consoles">Games Consoles</option>
                                <option value="IT Misc">IT Misc</option>
                                <option value="Servers">Servers</option>
                                <option value="Electricals">Electricals</option>
                            </select>

                            <label for="spec_id" class="control-label">Product</label>
                            <select name="spec_id" class="form-control">
                                @foreach($specs as $spec)
                                    <option value="{{$spec->id}}">{{$spec->brand}} - {{$spec->model}}</option>
                                @endforeach
                            </select>

                            <label for="condition" class="control-label">Condition</label>
                            <select name="condition" class="form-control">
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-12 col-md-6">
                            <label for="weight" class="control-label">Weight</label>
                            <input name="weight" class="form-control">

                            </input>

                            <label for="price" class="control-label">Price</label>
                            <input name="price" class="form-control">

                            </input>

                            <label for="status" class="control-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="For Sale">For Sale</option>
                                <option value="For Parts">For Parts</option>
                                <option value="Storage">Storage</option>
                                <option value="Sold">Sold</option>
                                <option value="For Refurbishment">For Refurbishment</option>
                            </select>

                            <label for="furniture" class="control-label">Furniture Type</label>
                            <select name="" class="form-control">
                                <option value="null">N/A</option>
                                <option value="Chairs">Chairs</option>
                                <option value="Set of Chairs">Set of Chairs</option>
                                <option value="Tables">Tables</option>
                                <option value="Drawers/Cabinets">Drawers/Cabinets</option>
                                <option value="Shelves">Shelves</option>
                                <option value="Accessories">Accessories</option>
                                <option value="Mirrors">Mirrors</option>
                                <option value="Frames">Frames</option>
                                <option value="Upcycled">Upcycled</option>
                                <option value="crafts">Crafts</option>
                            </select>

                        </div>
                        <div class="form-group col-sm-12">
                            <label for="notes" class="control-label">Notes</label>
                            <textarea name="notes" class="form-control"></textarea>

                        </div>

                        <button class="btn btn-primary form-btn pull-right" type="submit">Add Item</button>

                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
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