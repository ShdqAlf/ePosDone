<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>

<body>
    <h1>Welcome to the User Dashboard</h1>
    <p>This is the dashboard for the user.</p>

    <a href="{{ route('auth.logout') }}">Logout</a>
</body>

</html>