@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="well">
            @if($isThereShisha)
                <table class="table table=responsive table-striped">
                    <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Rating
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($flavors as $flavor)
                        <tr>
                            <td>
                                {{ $flavor->getName() }}
                            </td>
                            <td>
                                {{ $flavor->getPricePerUnit() }}
                            </td>
                            <td>
                                {{ $flavor->getRating() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center alert alert-danger">
                    <strong>
                        Oh no! We has no shisha
                        <br>
                        :'(
                    </strong>
                </div>
            @endif
        </div>
    </div>

@endsection