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
<h1>Contact Details</h1>
<div>
    <p>Name: {{$contact['name']}}</p>
    <p>Phone: {{$contact['phone']}}</p>
</div>
<div>
    <a href='{{ route('contacts.index') }}'>Back to All Contacts</a></br>

</div>

</body>
</html>