<?php

namespace App\Http\Controllers;

use App\Place;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class PlaceController
 * @package App\Http\Controllers
 */
class PlaceController extends Controller
{
    /**
     * PlaceController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * @return View
     */
    public function index()
    {
        $places = Place::all();

        return view('place.index', compact(
            'places'
        ));
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('place.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        Place::create($data);

        return redirect('place');
    }

    /**
     * @param Place $place
     * @return View
     */
    public function edit(Place $place)
    {
        return view('place.edit', compact(
            'place'
        ));
    }

    /**
     * @param Place $place
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Place $place, Request $request)
    {
        $place->fill($request->all());
        $place->save();

        return redirect('place');
    }

    /**
     * @param Place $place
     * @return RedirectResponse
     */
    public function destroy(Place $place)
    {
        $place->delete();

        return redirect('place');
    }
}