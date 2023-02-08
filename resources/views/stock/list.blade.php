@extends('layouts.master')

@section('content')
<h1 class="">STOCKS</h1>
<div class="row">
    <div class="col-12">
        <a class="btn btn-primary btn-m" href="/stock/add">Add Stock</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Stock Name</th>
                    <th scope="col">Ticket</th>
                    <th scope="col">Value</th>
                    <th scope="col">Update At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($listData) > 0)
                    @foreach($listData as $item)
                        <tr>
                            <td class="text-left text-nowrap">{{ $item->stock_name }}</td>
                            <td class="text-left text-nowrap">{{ $item->ticket }}</td>
                            <td class="text-left text-nowrap">{{ $item->value }}</td>
                            <td class="text-left text-nowrap">{{ date_format(date_create($item->update_at), "d-M-y") }}</td>
                            <td class="text-left text-nowrap">
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="6">Data Not Found.</td>
                    </tr>
                @endif
                
            </tbody>
        </table>
    </div>
</div>
@endsection