@extends('layouts.master')

@section('content')
<h1 class="">EDIT STOCKS</h1>
<div class="row mt-3">
    <div class="col-md-12">
        <form>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Stock name">
            </div>
            <div class="form-group">
                <label for="">Ticket</label>
                <input type="text" class="form-control" id="" placeholder="Stock ticket">
            </div>
            <div class="form-group">
                <label for="">Value</label>
                <input type="number" class="form-control" id="" placeholder="Stock value">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update Stock</button>
            </div>
        </form>
    </div>
</div>
@endsection