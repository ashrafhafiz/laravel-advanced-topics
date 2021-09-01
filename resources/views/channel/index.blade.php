<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Advanced Laravel Topics</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="my-4">View Composer</h4>
                <p class="text-danger">Channels List:</p>
                <ul>
                    @foreach ($channels as $key => $channel)
                        <li>{{ $channel->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
