<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ItemLocation;
use App\Models\Item;
use App\Models\Location;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with(['category', 'itemLocation.location'])->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('items.create', compact('categories', 'locations'));
    }

    public function store(Request $request)
    {
        $item = Item::create($request->only(['item_name', 'id_category', 'quantity', 'condition']));

        ItemLocation::create([
            'id_item' => $item->id_item,
            'id_location' => $request->id_location,
            'date_added' => $request->date_added,
        ]);

        return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all();
        $locations = Location::all();
        return view('items.edit', compact('item', 'categories', 'locations'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->only(['item_name', 'id_category', 'quantity', 'condition']));

        $item->itemLocation()->updateOrCreate(
            ['id_item' => $item->id_item],
            [
                'id_location' => $request->id_location,
                'date_added' => $request->date_added,
            ]
        );

        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->route('items.index');
    }

    public function dashboard()
    {
        $items = Item::with(['category', 'itemLocation.location'])->get();
        return view('dashboard', compact('items'));
    }
}