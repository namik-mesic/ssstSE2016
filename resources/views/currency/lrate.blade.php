<div class="row">

    <div class="col-md-6">
        @foreach((array) $lrate->rates as $rate => $value)
            <tr>
                <td>
                    {{ $rate }}
                </td>
                <td>
                    {{ $value }}
                </td>
            </tr>
        @endforeach
    </div>
</div>
<!--This document was written by Ajla-->
​