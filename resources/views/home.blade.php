
@extends('layouts.app')


@section('head')


@append

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                <div class="panel-body" onload="">
                    You are logged in!
                    <div id="map" style="width: 500px; height: 300px">
                        <?php

                        require __DIR__.'\Cornford\Googlmapper\Mapper';
                        \Cornford\Googlmapper\Mapper->map(43.860702, 18.429932);
                        Mapper::render();
                        Mapper::render(0);






                        ?>



                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
