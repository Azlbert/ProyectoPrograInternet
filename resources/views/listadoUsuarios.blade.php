<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios - Styde.net</title>
</head>
<body>

  <h1>Asdfalto</h1>

      <ul>
@foreach ($users as $user)
    <li>{{ $user->nickname }}</li>
@endforeach
      </ul>

</body>
</html>
