<?php

namespace App\Http\Controllers;

use App\Models\Widgets;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WidgetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('widgets.index', [
            'widgets' => Widgets::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('widgets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string',
        ]);

        $request->user()->widgets()->create($validatedData);

        return redirect(route('widgets.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Widgets $widgets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Widgets $widgetss): View
    {
        Gate::authorize('update', $widgetss);

        return view('widgets.edit', [
            'widgets' => $widgets,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Widgets $widgets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Widgets $widgets)
    {
        //
    }
}
