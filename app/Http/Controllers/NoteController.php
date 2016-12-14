<?php

namespace App\Http\Controllers;

use App\Note;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class NoteController
 * @package App\Http\Controllers
 */
class NoteController extends Controller
{
    /**
     * NoteController constructor.
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
        $notes = Note::all();

        return view('note.index', compact(
            'notes'
        ));
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if ($data['assignee_id'] == '')
            $data['assignee_id'] = null;

        Note::create($data);

        return redirect('note');
    }

    /**
     * @param Note $note
     * @return View
     */
    public function edit(Note $note)
    {
        return view('note.edit', compact(
            'note'
        ));
    }

    /**
     * @param Note $note
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Note $note, Request $request)
    {
        $note->fill($request->all());
        $note->save();

        return redirect('note');
    }

    /**
     * @param Note $note
     * @return RedirectResponse
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('note');
    }
}