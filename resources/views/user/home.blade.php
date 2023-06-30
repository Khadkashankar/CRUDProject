<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>
    <div style="float:left;">
        <h1>User Dashboard</h1>
        <h2> hello, {{ $userName }} </h2>
    </div>
    <h1><a href="{{ route('logout') }}" style="text-decoration:none;color:green;float:right;">logout</a></h1>

</body>

</html>