@extends('layouts.app')

@section('content')

    @include('includes.searchModal')

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
        <div class="panel-heading tall-header">Item
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#itemPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
        </div>
        <div id="itemPanel" class="panel-body in">
            <form role="form" method="POST" action="{{ url('/items/add') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="id" class="control-label">ID</label>
                            <input name="id" class="form-control">

                            </input>

                            <label for="category" class="control-label">Category</label>
                            <select name="category" class="form-control">
                                <option value="one">Laptops</option>
                                <option value="two">Desktop PCs</option>
                                <option value="three">Printers</option>
                                <option value="three">All in ones</option>
                                <option value="three">Monitors</option>
                                <option value="three">Projectors</option>
                                <option value="three">Smartboards</option>
                                <option value="three">Replacement parts</option>
                                <option value="three">Keyboards</option>
                                <option value="three">Mice</option>
                                <option value="three">Speakers</option>
                                <option value="three">Scanners</option>
                                <option value="three">Peripherals</option>
                                <option value="three">Smartphones</option>
                                <option value="three">Tablets</option>
                                <option value="three">Networks</option>
                                <option value="three">Games Consoles</option>
                                <option value="three">IT Misc</option>
                                <option value="three">Servers</option>
                                <option value="three">Electricals</option>
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
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
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
              <form role="form" method="POST" action="{{ url('/items/spec') }}">
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

                            <button class="btn btn-primary form-control form-btn" type="submit">Add Specification</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </div>
                      </div>
                  </div>
              </form>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading tall-header">Inventory
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#invPanel">
                <span id="invCaret" class="fa fa-caret-down" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#searchModal">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
        </div>
        <div id="invPanel" class="panel-body in">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Weight</th>
                        <th>Condition</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr data-toggle="collapse" data-target="#{{$item->id}}" class="accordion-toggle">
                            <td>{{$item->id}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->spec->brand}}</td>
                            <td>{{$item->spec->model}}</td>
                            <td>{{$item->weight}}</td>
                            <td>{{$item->condition}}</td>
                            <td>£{{$item->price}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->notes}}</td>
                        </tr>
                        <tr>
                            <td colspan="6" class="hiddenRow">
                                <div class="accordian-body collapse" id="{{$item->id}}">{{$item->spec}}</div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
