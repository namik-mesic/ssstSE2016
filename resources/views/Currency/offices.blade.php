@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}



</form>
