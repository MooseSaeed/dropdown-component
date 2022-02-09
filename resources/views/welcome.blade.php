<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dropdown</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <h1 class="text-red-500">Tailwind is working</h1>

    @foreach ($users as $user)

        <p>The name of the user is: {{ $user->name }}</p>

    @endforeach

</body>

</html>
