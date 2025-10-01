<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        $checks = Check::orderBy('created_at', 'desc')->paginate(20);
        return view('checks.index', compact('checks'));
    }

    public function create()
    {
        return view('checks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender' => 'required|string|max:255',
            'recipient' => 'required|string|max:255',
            'amount' => 'required|integer|min:0',
            'date' => 'required|date',
            'description' => 'required|string',
        ]);

        Check::create($validated);

        return redirect()->route('checkz.index')
            ->with('success', 'Check created successfully.');
    }

    public function show(Check $check)
    {
        return view('checks.show', compact('check'));
    }

    public function edit(Check $check)
    {
        return view('checks.edit', compact('check'));
    }

    public function update(Request $request, Check $check)
    {
        $validated = $request->validate([
            'sender' => 'required|string|max:255',
            'recipient' => 'required|string|max:255',
            'amount' => 'required|integer|min:0',
            'date' => 'required|date',
            'description' => 'required|string',
        ]);

        $check->update($validated);

        return redirect()->route('checkz.index')
            ->with('success', 'Check updated successfully.');
    }

    public function destroy(Check $check)
    {
        $check->delete();

        return redirect()->route('checkz.index')
            ->with('success', 'Check deleted successfully.');
    }
}

