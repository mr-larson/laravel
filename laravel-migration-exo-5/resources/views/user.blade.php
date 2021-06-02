<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>je suis le user</h1>
    @foreach ($users as $users)
        <p>{{ $user->name . " " . $user->email }}</p>
        <form action="/user/{{ $user->id }}/delete" method="POST">
            @csrf
            <button type="submit">Delete</button>
        </form>
    @endforeach
</body>
</html>