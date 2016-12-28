<div class="row lrate">

    <!--This document was written by Ajla-->
    <div class="col-md-12">

        <table class="table">
            @foreach($lrate as $rates)
                <tr>
                    <td>
                        {{ $rates['0'] }}
                    </td>
                    <td>
                        {{ $rates['1'] }}</td>
                    <td> {{ $rates['2'] }} </td>
                    <td> {{ $rates['3'] }} </td>
                    <td> {{ $rates['4'] }}
                    <td>
                    <td> {{ $rates['5'] }} </td>
                    <td> {{ $rates['6'] }} </td>
                    <td>  {{ $rates['7'] }} </td>
                    <td>  {{ $rates['8'] }} </td>
                </tr>



            @endforeach
        </table>
    </div>


    ​
</div>