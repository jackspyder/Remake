<div id="searchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search Inventory</h4>
            </div>
            <form role="form" method="POST" action="{{ url('/items/search') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="barcode" class="control-label">Barcode</label>
                            <input name="barcode" class="form-control">

                            </input>

                            <label for="category" class="control-label">Category</label>
                            {{ Form::select('category', [
                            '' => '',
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

                            <label for="condition" class="control-label">Condition</label>
                            {{ Form::select('condition', [
                            '' => '',
                            'Very Good' => 'Very Good',
                            'Good' => 'Good',
                            'Fair' => 'Fair',
                            ], null, array('class' => 'form-control')) }}

                            <label for="coa" class="control-label">C.O.A</label>
                            <input name="coa" class="form-control">

                            </input>

                        </div>

                        <div class="form-group col-sm-12 col-md-6">
                            <label for="weight" class="control-label">Weight</label>
                            <input name="weight" class="form-control">

                            </input>

                            <label for="price" class="control-label">Price</label>
                            <input name="price" class="form-control">

                            </input>

                            <label for="status" class="control-label">Status</label>
                            {{ Form::select('status', [
                            '' => '',
                            'For Sale' => 'For Sale',
                            'For Parts' => 'For Parts',
                            'Storage' => 'Storage',
                            'Sold'=>'Sold',
                            'For Refurbishment'=>'For Refurbishment',
                            ], null, array('class' => 'form-control')) }}

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

                            <button class="btn btn-primary form-control form-btn" type="submit">Search Items</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        </div>

                        </form>

                        <form role="form" method="POST" action="{{ url('/items/specs/search') }}">

                        <div class="form-group col-sm-12 col-md-6">

                            <label for="usb" class="control-label">USB</label>
                            <input name="usb" class="form-control">

                            </input>

                            <label for="brand" class="control-label">Brand</label>
                            <input name="brand" class="form-control">

                            </input>


                            <label for="model" class="control-label">Model</label>
                            <input name="model" class="form-control">

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

                        </div>


                        <div class="form-group col-sm-12 col-md-6">

                          <label for="battery" class="control-label">Battery</label>
                          <input name="battery" class="form-control">

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

                            <button class="btn btn-primary form-control form-btn" type="submit">Search Specifications</button>

                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
              </form>
        </div>
    </div>
</div>
