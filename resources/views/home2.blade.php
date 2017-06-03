<!-- html ctrl+space: untuk menentukan versi html -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H2>
        {{$title}}

        <hr>

        <?php
            echo $title;
        ?>
    </H2>

    <hr>

    @foreach($body as $mentor)
        <li>{{$mentor}}</li>
    @endforeach

    <hr>

</body>
</html>
