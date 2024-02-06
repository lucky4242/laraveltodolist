<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        form {
            display: flex;

        }

        .flexs {
            display: flex;
        }

        .container {
            /* justify-content: center;
            text-align: center;
            align-items: center; */
            padding-left: 30rem;
        }

        .container h1 {

            padding-left: 10%;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 container">
        <h1> Todolist </h1></br>
        @foreach ($listItems as $listitem)
        <div class="flexs" style="align-items: center;">
            <p>Item: {{ $listitem->name }}</p>
            <form action="{{route('markComplete', $listitem->id)}}" method="post" accept-charset="utf-8">
                {{csrf_field()}}

                <button type="submit" style="max-height: 25px; margin-left:20px;">Mark Complete</button>
            </form>

        </div></br>

        @endforeach
        <form method="post" action="{{route('saveItem')}}" accept-charset="utf-8">
            {{csrf_field()}}
            <label for="listItem">New Todo Item</label></br>
            <input type="text" name="listItem"></br>
            <button type="submit">save item</button>
        </form>
    </div>
</body>

</html>