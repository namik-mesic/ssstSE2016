<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Note;

/**
 * Class NoteController
 * @package App\Http\Controllers\Api
 */
class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return $notes;
    }
}