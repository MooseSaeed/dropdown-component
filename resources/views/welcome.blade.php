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

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8" id="app">
        <div class="relative lg:inline-flex items-center bg-blue-100 rounded-xl">

            <router-view />

        </div>
    </div>

</body>

</html>
