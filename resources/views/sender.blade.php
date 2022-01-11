<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">

    @if(session()->has('message'))
        <p style="color:red">{{ session()->get('message') }}</p>
        @endif
    <div class="container-fluid messages">
        <div class="message"></div>
    </div>
    <form action="/sender" method="POST">
        @csrf
        <div class="mb-3">
            <label for="newMessage" class="form-label">Type your message</label>
            <textarea class="form-control" id="newMessage" rows="3" name="message"></textarea>
        </div>
        <input type="submit">
    </form>
</div>
</body>
</html>
