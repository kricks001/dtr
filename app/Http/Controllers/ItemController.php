<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("item.index", ["items" => DB::table("items")->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("item.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $data = $request->validated();
        $item = new Item();
        if ($item->saveOrFail($data))
        {
            return redirect("/items");
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view("item.show", ["item" => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view("item.edit", ["item" => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        if ($item->updateOrFail($request->validated()))
        {
            return redirect("/items");
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        if ($item->deleteOrFail())
        {
            return redirect("/items");
        }
        return back();
    }
}
