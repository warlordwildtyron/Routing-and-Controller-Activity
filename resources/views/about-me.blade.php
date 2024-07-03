<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>Name: {{ $name }}</p>
    <p>Description: {{ $description }}</p>
    <a href="{{ route('about-me') }}">About Me</a>
    <a href="{{ route('skills') }}">Skills</a>
    <a href="{{ route('hobbies') }}">Hobbies</a>
</body>
</html>
