<div class="row lrate">


    <div class="col-md-10">

        @foreach($lrate as $rates)
<table class="table table-striped table-hover">

              <tr>  {{ $rates['0'] }} </tr>
               <tr> {{ $rates['1'] }}</tr>
               <tr> {{ $rates['2'] }} </tr>
                <tr> {{ $rates['3'] }} </tr>
                <tr> {{ $rates['4'] }} <tr>
              <tr> {{ $rates['5'] }} </tr>
               <tr> {{ $rates['6'] }} </tr>
              <tr>  {{ $rates['7'] }} </tr>
              <tr>  {{ $rates['8'] }} </tr>

</table>
                    @endforeach
        </div>


<!--This document was written by Ajla-->
​</div>