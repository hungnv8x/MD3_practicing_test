<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealerRequest;
use App\Models\Dealer;
use App\Models\Status;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function getAll(Request $request)
    {
        if (isset($request->search)) {
            $dealers = $this->search($request->search);
            session()->put('search', $request->search);
        } else {
            $dealers = Dealer::all();
            session()->remove('search');
        }
        return view('list', compact('dealers'));
    }

    public function create()
    {
        $statuses = Status::all();
        return view('create', compact('statuses'));
    }

    public function store(DealerRequest $request)
    {
        $data = $request->except('_token');
        $count = Dealer::where('code', $request->code)->get()->count();
        if ($count > 0) {
            $statuses = Status::all();
            $messages = "Trùng code";
            return view('create', compact('messages','statuses'));
        }
        Dealer::create($data);
        return redirect()->route('dealer.list');
    }

    public function edit($id)
    {
        $dealer = Dealer::findOrFail($id);
        $statuses = Status::all();
        return view('update', compact('dealer', 'statuses'));
    }

    public function update(DealerRequest $request)
    {
        $dealer = Dealer::findOrFail($request->id);
        $dealer->code = $request->code;
        $dealer->name = $request->name;
        $dealer->email = $request->email;
        $dealer->phone = $request->phone;
        $dealer->address = $request->address;
        $dealer->manager_name = $request->manager_name;
        $dealer->status_id = $request->status_id;
        $dealer->save();
        return redirect()->route('dealer.list');
    }

    public function delete($id)
    {
        Dealer::destroy($id);
        return redirect()->back();
    }

    public function search($name)
    {
        return Dealer::where('name', 'like', "%$name%")->get();
    }
}
