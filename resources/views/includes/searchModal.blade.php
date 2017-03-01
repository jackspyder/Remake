<div id="searchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search Inventory</h4>
            </div>
            <form role="form" method="POST" action="{{ url('/items') }}">
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

                            <button class="btn btn-primary form-control form-btn" type="submit">Search</button>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
