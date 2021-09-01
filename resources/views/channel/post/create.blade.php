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
        <form action="#" class="mt-5 pt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <label for="channel_id" class="form-label me-3 pt-2">Channel:</label>
                        <select type="text" name="channel_id" id="channel_id" class="form-select">
                            <option selected disabled>Select Channel ...</option>
                            @foreach ($channels as $key => $channel)
                                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary ms-3">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
