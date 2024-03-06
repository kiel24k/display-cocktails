<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cocktail usin LARAVEL WITHOUT JS</title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif
        }
        th {
            padding: 20px;
            background: yellowgreen;
        }
        img{
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <table style="text-align:center; width:100rem; margin:auto;padding">
        <thead>
            <tr>
                <th>Image</th>
                <th>Details</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinks as $cocktail)
                <tr>
                    <td><img src="{{ $cocktail['strDrinkThumb'] }}" widht="250px" height="150px" alt=""></td>
                    <td><b>{{ $cocktail['strAlcoholic'] }}</b></td>
                    <td><b>{{ $cocktail['strInstructionsES'] }}</b></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
