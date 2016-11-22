@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}

        <iframe class="klasa3" src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d92063.30255960432!2d18.335680779483596!3d43.85628041243499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!3e6!4m0!4m4!1s0x4758c8df52885079%3A0x65db252c27ca0894!3m2!1d43.8563018!2d18.4057206!5e0!3m2!1shr!2sba!4v1479495820958" width="1200" height="500" frameborder="0" style="margin:-30px; border:0" allowfullscreen></iframe>
</form>


