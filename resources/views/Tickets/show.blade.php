<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket info</title>
</head>
<body>
    <h2>Ticket info</h2>
    <p>Date: {{$ticket ->date}}</p>
    <p>Price: {{$ticket ->price}}</p>
    <p>Train name: {{$ticket ->train->name}}</p>
    <p>Ticket type: {{$ticket ->ticketType->type}}</p>
</body>
</html>