@if(session('status'))
    <div class="alert alert-info">

        {{session('status')}}

    </div>
@endif
@if(session('status2'))
    <div class="alert alert-success">

        {{session('status2')}}

    </div>
@endif
@if(session('message2'))
    <div class="alert alert-info">

        {{session('message2')}}

    </div>
@endif