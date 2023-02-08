@extends('layouts.master')

@section('content')
<h1 class="">ADD STOCKS</h1>
<div class="row mt-3">
    <div class="col-md-12">
        <form method="POST" action="/stock/create">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" name="stock_name" placeholder="Stock name">
            </div>
            <div class="form-group">
                <label for="">Ticket</label>
                <input type="text" class="form-control" id="" name="ticket" placeholder="Stock ticket">
            </div>
            <div class="form-group">
                <label for="">Value</label>
                <input type="number" class="form-control" id="" name="value" placeholder="Stock value">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Stock</button>
            </div>
        </form>
    </div>
</div>
@endsection