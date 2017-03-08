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
    <div class="panel-heading tall-header">Sale
        <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#addPanel">
            <span id="addCaret" class="fa fa-caret-down" aria-hidden="true"></span>
        </button>
    </div>
    <div id="addPanel" class="panel-body in">
        <form role="form" method="POST" action="{{ url('/items/add') }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="category" class="control-label">Customer</label>
                        <select name="category" class="form-control">
                          <!-- get all customers -->
                          <option>Customer1</option>
                          <option>Customer2</option>
                          <option>Customer2</option>
                        </select>

                        <label for="spec_id" class="control-label">Warranty</label>
                        <input name="spec_id" class="form-control">

                        </input>

                        <label for="condition" class="control-label">COA</label>
                        <input name="condition" class="form-control">

                      </input>
                    </div>

                    <div class="form-group col-sm-12 col-md-6">

                        <!-- add listbox to add multiple items -->
                        <label for="weight" class="control-label">Weight</label>
                        <input name="weight" class="form-control">

                      </input>

                      <label for="spec_id" class="control-label">Items</label>
                      <select id="select" class="form-control select2" multiple="multiple">
                        <!-- Gather all items -->
                      </select>

                    </div>

                    <button class="btn btn-primary form-btn pull-right" type="submit">Add Item</button>

                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>
