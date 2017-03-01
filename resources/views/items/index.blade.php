@extends('layouts.app')

@section('content')

@include('includes.searchModal')

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#itemPanel">Item</div>
        <div id="itemPanel" class="panel-body">
            <form>
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="id" class="control-label">ID</label>
                            <input name="id" class="form-control">

                            </input>

                            <label for="category" class="control-label">Category</label>
                            <select name="category" class="form-control">
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                            </select>

                            <label for="product" class="control-label">Product</label>
                            <select name="product" class="form-control">
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                            </select>

                            <label for="condition" class="control-label">Condition</label>
                            <select name="condition" class="form-control">
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
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
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Product Specification</div>
        <div class="panel-body">
            <div class="row">

            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading tall-header">Inventory
          <button type="button" class="btn btn-default search-button" data-toggle="modal" data-target="#searchModal">
            <span class="fa fa-search" aria-hidden="true"></span>
          </button>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Weight</th>
                        <th>Condition</th>
                        <th>Status</th>
                        <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr data-toggle="collapse" data-target="#{{$item->id}}" class="accordion-toggle">
                            <td>{{$item->id}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->weight}}</td>
                            <td>{{$item->condition}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->notes}}</td>
                        </tr>
                        <tr>
                            <td colspan="6" class="hiddenRow">
                                <div class="accordian-body collapse" id="{{$item->id}}">{{$item->spec_id}}</div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
