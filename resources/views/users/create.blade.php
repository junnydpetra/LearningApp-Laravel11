<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Users List</title>
    </head>

    <body>
        <a href="{{ route('users.index') }}">List</a><br>
        <h2>Create User</h2>

        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="Your name"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Your email"><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Your password"><br><br>

            <button type="submit" value="Submit">Submit</button>
        </form>

    </body>
</html>
