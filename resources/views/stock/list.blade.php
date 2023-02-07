@extends('layouts.master')

@section('content')
<h1 class="">STOCKS</h1>
<div class="row">
    <div class="col-12">
        <button class="btn btn-primary btn-sm">Add Stock</button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Stock Name</th>
                    <th scope="col">Ticket</th>
                    <th scope="col">Value</th>
                    <th scope="col">Update At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" colspan="6">Data Not Found.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection