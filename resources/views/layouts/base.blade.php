<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>azienda</title>
    <link rel="stylesheet" href="{{'css/app.css'}}">

</head>
<body>
    <header>
        <a href="{{ route('employee.create') }}">crea nuovo employee</a>
    </header>

    @yield('content')

</body>
</html>