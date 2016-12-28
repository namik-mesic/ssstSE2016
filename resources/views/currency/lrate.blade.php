<div class="row lrate">

    <!--This document was written by Ajla-->
    <div class="col-md-12">

        <table class="table">
            @foreach($lrate as $rates)
                <tr>
                    <td id="aha">
                        {{ $rates['0'] }}
                    </td>
                    <td id="aha">
                        {{ $rates['1'] }}</td>
                    <td id="aha"> {{ $rates['2'] }} </td>
                    <td id="aha"> {{ $rates['3'] }} </td>
                    <td id="aha"> {{ $rates['4'] }}
                    <td id="aha">
                    <td id="aha"> {{ $rates['5'] }} </td>
                    <td id="aha"> {{ $rates['6'] }} </td>
                    <td id="aha">  {{ $rates['7'] }} </td>
                    <td id="aha">  {{ $rates['8'] }} </td>
                </tr>



            @endforeach
        </table>
    </div>


    ​
</div>