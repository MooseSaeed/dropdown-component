<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dropdown</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6" id="app">

        <div class="max-w-xl mx-auto mt-10 text-center">
            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8" id="app">
                <div class="relative lg:inline-flex items-center bg-blue-100 rounded-xl mx-2">

                    <Dropdown title="Users Dropdown">

                        <Dropdowncontent>
                            @foreach ($users as $user)
                                <Dropdownitems item="{{ $user->name }}" href="/users/{{ $user->id }}">
                                </Dropdownitems>
                            @endforeach
                        </Dropdowncontent>

                    </Dropdown>

                </div>
            </div>
        </div>

    </main>

</body>

</html>
