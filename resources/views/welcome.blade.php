<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        <ul>
            <li>{{$bristol->name}}</li>
            <ul>
                @foreach ($bristol->children as $child)
                    <li>{{$child->name}}</li>
                    <ul>
                        @foreach ($child->subchildren as $subchild)
                            <li>{{$subchild->name}}</li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        </ul>
    </body>
</html>
