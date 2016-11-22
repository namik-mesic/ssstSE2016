@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92105.71074489703!2d18.258431502744493!3d43.82880543982654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c8df288d214b%3A0xc5320f2bd06ec2fd!2sExclusive+Change!5e0!3m2!1shr!2sba!4v1479494361179" width="400" height="250" frameborder="0" style="margin:10px; border:0" allowfullscreen></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d92065.45705289025!2d18.32943657943583!3d43.8548849124766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!3e6!4m0!4m4!1s0x4758c921a147f267%3A0x254a6373ceb8ef77!3m2!1d43.854906299999996!2d18.399476399999998!5e0!3m2!1shr!2sba!4v1479495701082" width="400" height="250" frameborder="0" style="margin:10px; border:0" allowfullscreen></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d92063.30255960432!2d18.335680779483596!3d43.85628041243499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!3e6!4m0!4m4!1s0x4758c8df52885079%3A0x65db252c27ca0894!3m2!1d43.8563018!2d18.4057206!5e0!3m2!1shr!2sba!4v1479495820958" width="400" height="250" frameborder="0" style="margin:10px; border:0" allowfullscreen></iframe>

</form>
