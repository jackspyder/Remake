<div id="searchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search Sales</h4>
            </div>
            <form role="form" method="POST" action="{{ url('/receipts/search') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">

                            <label for="id" class="control-label">Receipt ID</label>
                            <input name="id" class="form-control">

                            </input>

                            <label for="warranty" class="control-label">Warranty</label>
                            <select name="warranty" class="form-control">
                              <option value=""></option>
                              <option value="None">None</option>
                              <option value="1 Month">1 Month</option>
                              <option value="3 Months">3 Months</option>
                              <option value="1 Year">1 Year</option>
                            </select>

                            <label for="payment" class="control-label">Payment type</label>
                            <select name="payment" class="form-control">
                              <option value=""></option>
                              <option>Cash</option>
                              <option>Debit card</option>
                              <option>Credit card</option>
                            </select>

                          </input>
                        </div>

                        <div class="form-group col-sm-12 col-md-6">

                          <label for="served_by" class="control-label">Served By</label>
                          <input name="served_by" class="form-control">

                          </input>

                          <label for="list[]" class="control-label">Items</label>
                          <select name="list[]" class="form-control select2" multiple>
                            @foreach($items as $item)
                                  <option value="{{$item->barcode}}">{{$item->barcode}}
                                      - {{$item->specs->brand}} {{$item->specs->model}}</option>
                            @endforeach
                          </select>

                        </div>

                        <button class="btn btn-primary form-btn pull-right" type="submit">Search Receipts</button>

                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>
