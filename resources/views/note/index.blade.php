@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ action('NoteController@create') }}" class="btn btn-info" style="margin-bottom: 10px">
            Create Note
        </a>

        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Author
                </th>
                <th>
                    Assignee
                </th>
                <th>
                    Content
                </th>
                <th>
                    
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td style="background-color: {{ $note->color }}">
                        {{ $note->id }}
                    </td>
                    <td>
                        {{ $note->author->name }}
                    </td>
                    <td>
                        {{ $note->assignee ? $note->assigne->name : 'Not set'}}
                    </td>
                    <td>
                        {!! $note->content !!}
                    </td>
                    <td>
                        <a href="{{ action('NoteController@edit', $note->id) }}" class="btn btn-success">
                            Edit
                        </a>

                        <form method="POST" action="{{ action('NoteController@destroy', $note->id) }}" style="margin-top: 10px">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection