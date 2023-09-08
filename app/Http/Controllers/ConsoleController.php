<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::all();

        return view('admin.consoles.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return to_route('admin.consoles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $console = new console();

        $console->fill($data);

        return to_route('admin.consoles.show', compact('console'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
        return view('admin.consoles.show', compact('console'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        return view('admin.consoles.edit', compact('console'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
        $data = $request->all();
        $console->update($data);

        return to_route('admin.consoles.show', $console)->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        $console->delete();
        return to_route('admin.consoles.index');
    }
}
