@extends('main')
@section('content')

    @if(isset($lrate))

        <div class="col-lg-8 col-lg-push-2">

            @include('currency.lrate')

        </div>
    @endif

@endsection
