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
                            ''=>'',
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
                    {{ Form::select('odd', [
                    ''=>'',
                        'yes'=>'Yes',
                        'no' => 'No',
                        ], null, array('class' => 'form-control')) }}


                    <label for="gpu" class="control-label">GPU</label>
                    <input name="gpu" class="form-control">

                    </input>

                </div>


                <div class="form-group col-sm-12 col-md-6">

                    <label for="battery" class="control-label">Battery</label>
                    {{ Form::select('battery', [
                    ''=>'',
                          'yes'=>'Yes',
                          'no' => 'No',
                          ], null, array('class' => 'form-control')) }}

                    <label for="lan" class="control-label">LAN</label>
                    {{ Form::select('lan', [
                         ''=>'',
                         'yes'=>'Yes',
                         'no' => 'No',
                         ], null, array('class' => 'form-control')) }}

                    <label for="wlan" class="control-label">WLAN</label>
                    {{ Form::select('wlan', [
                    ''=>'',
                        'yes'=>'Yes',
                        'no' => 'No',
                        ], null, array('class' => 'form-control')) }}

                    <label for="os" class="control-label">OS</label>
                    <input name="os" class="form-control">

                    </input>

                    <label for="psu" class="control-label">PSU</label>
                    {{ Form::select('psu', [
                    ''=>'',
                        'yes'=>'Yes',
                        'no' => 'No',
                        ], null, array('class' => 'form-control')) }}

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
