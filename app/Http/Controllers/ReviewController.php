<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        return view('reviews', ['reviews' => Review::all()]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ], [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required'
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.show')
            ->with('message', 'Review created successfully.');

    }

    /**
     * Handle the incoming request.
     *
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index', ['reviews' => Review::all()]);
    }

    /**
     * @param Review $review
     * @return Application|Factory|View
     */
    public function edit(Review $review)
    {
        return view('admin.edit', compact('review'));
    }


    public function update(Request $request, Review $review)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ], [
            'first_ name.required' => 'First name is required',
            'last_name.required' => 'Last name is required'
        ]);

        $review->update($request->all());

        return redirect()->route('admin.index')
            ->with('message', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * *
     * @param Review $review
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Review $review): RedirectResponse
    {
        $review->delete();

        return redirect()->route('admin.index')
            ->with('message', 'Review deleted successfully');

    }

}
