<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Models\Status;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function getAll()
    {
        $dealers = Dealer::all();
        return view('list',compact('dealers'));
    }

    public function create()
    {
        $statuses = Status::all();
        return view('create',compact('statuses'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        Dealer::create($data);
        return redirect()->route('dealer.list');
    }

    public function edit($id)
    {
        $dealer = Dealer::findOrFail($id);
        $statuses = Status::all();
        return view('update', compact('dealer','statuses'));
    }
}
