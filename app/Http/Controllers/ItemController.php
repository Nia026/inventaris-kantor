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
        return view('dashboard', compact('items'));
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

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $item = Item::with('itemLocation')->findOrFail($id);
        $categories = Category::all();
        $locations = Location::all();
        return view('items.edit', compact('item', 'categories', 'locations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name' => 'required',
            'id_category' => 'required',
            'quantity' => 'required|integer',
            'condition' => 'required',
            'id_location' => 'required',
            'date_added' => 'required|date',
        ]);

        $item = Item::findOrFail($id);
        $item->update([
            'item_name' => $request->item_name,
            'id_category' => $request->id_category,
            'quantity' => $request->quantity,
            'condition' => $request->condition,
        ]);

        $item->itemLocation()->update([
            'id_location' => $request->id_location,
            'date_added' => $request->date_added,
        ]);

        return redirect()->route('dashboard')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->itemLocation()->delete();
        $item->delete();
        return redirect()->route('dashboard')->with('success', 'Barang berhasil dihapus.');
    }

    public function dashboard()
    {
        $items = Item::with(['category', 'itemLocation.location'])->get();
        return view('dashboard', compact('items'));
    }
}
