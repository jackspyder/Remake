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
                            <label for="id" class="control-label">ID</label>
                            <input name="id" class="form-control">

                            </input>

                            <label for="category" class="control-label">Category</label>
                            <select name="category" class="form-control">
                                <option value=""></option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                            </select>

                            <label for="spec_id" class="control-label">Product</label>
                            <select name="spec_id" class="form-control">
                                <option value=""></option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                            </select>

                            <label for="condition" class="control-label">Condition</label>
                            <select name="condition" class="form-control">
                                <option value=""></option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="condition">condition</option>
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
                                <option value=""></option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="xj9TyyFrWX"> xj9TyyFrWX</option>
                            </select>

                            <button class="btn btn-primary form-control form-btn" type="submit">Search Items</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        </div>

                        </form>

                        <form role="form" method="POST" action="{{ url('/items/searchspecs') }}">

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
