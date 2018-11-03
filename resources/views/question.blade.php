<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <form action="{{ route('showInput') }}">
            <div class="col-md-12 totalClass">

                {{ csrf_field() }}
                Số người chơi :
                <input type="number" name="number">
                <input type="submit">
            </div>

        </form>
    </div>
</div>
</body>
</html>