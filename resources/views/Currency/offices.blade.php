@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}

        <iframe class="klasa1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92105.71074489703!2d18.258431502744493!3d43.82880543982654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c8df288d214b%3A0xc5320f2bd06ec2fd!2sExclusive+Change!5e0!3m2!1shr!2sba!4v1479494361179" width="1200" height="500" frameborder="0" style="margin-top:-30px; border:0" allowfullscreen></iframe>

</form>


@endsection