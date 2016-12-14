@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="well">

            <form action="{{ action('NoteController@update', $note->id) }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" value="PUT" name="_method">

                <div class="form-group">
                    <label for="content">
                        Content
                    </label>
                    <textarea name="content" placeholder="Content" id="content" cols="30" rows="10" class="form-control">{{ $note->content }}</textarea>
                </div>

                <div class="form-group">
                    <label for="color">
                        Color
                    </label>

                    <input type="text" id="color" name="color" class="form-control" value="{{ $note->color }}">
                </div>

                <button role="button" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

@append