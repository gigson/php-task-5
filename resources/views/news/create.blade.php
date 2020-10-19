<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

</head>
<body>
<div>
    <h1>Add Book</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="title"><br>

        <label for="sub_title">sub_title:</label><br>
        <input type="text" id="sub_title" name="sub_title" value="sub_title"><br>

        <label for="body">body:</label><br>
        <input type="text" id="body" name="body" value="body"><br>

        <label for="body">author:</label><br>
        <input type="text" id="author" name="author" value="author"><br>

        <label for="img_url">img_url:</label><br>
        <input type="text" id="img_url" name="img_url" value="img_url"><br>

        <input type="submit" value="Submit">
    </form>
</div>


</body>
</html>


