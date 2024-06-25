<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Connect;
use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function index()
    {
        $connects = Connect::all();
        return view('admin.pages.connects.index', compact('connects'));
    }

    public function show(Connect $connect)
    {
        return view('admin.pages.connects.show', compact('connect'));
    }

    public function edit(Connect $connect)
    {
        return view('admin.pages.connects.edit', compact('connect'));
    }

    public function update(Request $request, Connect $connect)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'subject_type' => 'required|string|max:50',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        $connect->update($request->all());
        return redirect()->route('connects.index')->with('success', 'Connect updated successfully');
    }

    public function destroy(Connect $connect)
    {
        $connect->delete();
        return redirect()->route('connects.index')->with('success', 'Connect deleted successfully');
    }

}
