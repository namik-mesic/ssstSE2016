<div class="row">
    <div class="col-md-6">

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
                    Currency
                </th>
                <th>
                    Value
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach((array) $historicalrate->rates as $rate => $value)
                <tr>
                    <td>
                        {{ $rate }}
                    </td>
                    <td>
                        {{ $value }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
<!--This document was written by Ajla-->
​