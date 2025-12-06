<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function create()
    {
        return view('pages.category-create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'description' => 'required'
        ]);

        // Insert data to DB
        $now = Carbon::now();
        DB::table('categories')->insertOrIgnore([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => $now,
            'updated_at' => $now
        ]);


        return redirect('/category')->with('success', 'Data saved successfully!');
    }

    public function index(): View
    {
        $categories = DB::table('categories')->get();
        return view('pages.category-table', ['categories' => $categories]);
    }

    public function show($id)
    {
        $categories = DB::table('categories')->find($id);
        return view('pages.category-detail', ['category' => $categories]);
    }

    public function edit($id)
    {
        $categories = DB::table('categories')->find($id);
        return view('pages.category-create', ['category' => $categories]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'description' => 'required'
        ]);

        // Insert data to DB
        $now = Carbon::now();
        DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'updated_at' => $now
            ]);


        return redirect('/category')->with('success', 'Data saved successfully!');
    }

    public function destroy($id)
    {
        DB::table('categories')
            ->where('id', $id)
            ->delete();
        return redirect('/category')->with('success', 'Data deleted successfully!');
    }
}
