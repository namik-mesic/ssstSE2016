<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="lead">
    <strong>

        <ul>
            @foreach((array) $historicalrate->rates as $rate => $value)
                <li>
                    {{ $rate }}: {{ $value }}
                </li>
            @endforeach
        </ul>

    </strong>
</div>

<style>
    .lead{
        position: absolute;
        font-size: 40px;
        top:300px;
        left:950px;
    }
</style>
