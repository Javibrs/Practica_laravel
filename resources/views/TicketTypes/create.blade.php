<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create ticket Type</title>
</head>
<body>
    <h2>new ticket Type</h2>
    <form action="{{ route('ticketType.store') }}" method="post">
        @csrf
        
        <label for="type">Name:</label>
        <input type="text" name="type" id="type" required>

        <button type="submit">Crear</button>
    </form>
</body>
</html>