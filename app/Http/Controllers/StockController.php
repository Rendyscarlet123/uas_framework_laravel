<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function index(){
        $data = Stock::all();
        return view('stock.list', [ "listData" => $data]);
    }

    public function edit($id){
        $data = Stock::find($id);
        return view('stock.edit', ["data" => $data]);
    }

    public function create(Request $request){
        $data = Stock::create([
            'stock_name' => $request->stock_name,
            'ticket' => $request->ticket,
            'value' => $request->value,
            'created_at' => getdate(),
            'updated_at' => getdate()
        ]);
        $this->index();
    }
    
    public function update(Request $request){
        $data = Stock::find($request->id);
        $data->stock_name = $request->stock_name;
        $data->ticket = $request->ticket;
        $data->value = $request->value;
        $data->updated_at = getdate();
        $data->save;
    }
}
