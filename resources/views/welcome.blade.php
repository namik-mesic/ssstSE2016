@extends('layouts.app')

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style>


    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 50px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md" style="font-family: 'Raleway', sans-serif;
                font-weight: 100;">
                SSST Software Engineering, group 3
            </div>

            <div class="links">
                <h3>Edim Bogdanic</h3>
                <h3>Nedzad Hafizovic</h3>
                <h3>Dalila Isanovic</h3>
                <h3>Nejra Grabovica</h3>
            </div>
        </div>
    </div>
@endsection
