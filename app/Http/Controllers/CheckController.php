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
            'sender_bankname' => 'nullable|string|max:64',
            'sender_account' => 'nullable|string|max:1000',
            'sender_taxid' => 'nullable|string|max:65',
        ]);

        Check::create($validated);

        return redirect()->route('checkz.index')
            ->with('success', 'Check created successfully.');
    }

    public function show(Check $checkz)
    {
        return view('checks.show', compact('checkz'));
    }

    public function edit(Check $checkz)
    {
        return view('checks.edit', ['check' => $checkz]);
    }

    public function update(Request $request, Check $checkz)
    {
        $validated = $request->validate([
            'sender' => 'required|string|max:255',
            'recipient' => 'required|string|max:255',
            'amount' => 'required|integer|min:0',
            'date' => 'required|date',
            'description' => 'required|string',
            'sender_bankname' => 'nullable|string|max:64',
            'sender_account' => 'nullable|string|max:1000',
            'sender_taxid' => 'nullable|string|max:65',
        ]);

        $checkz->update($validated);

        return redirect()->route('checkz.index')
            ->with('success', 'Check updated successfully.');
    }

    public function destroy(Check $checkz)
    {
        $checkz->delete();

        return redirect()->route('checkz.index')
            ->with('success', 'Check deleted successfully.');
    }
}

