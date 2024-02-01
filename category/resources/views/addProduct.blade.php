<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{ route('addProductSubmit') }}" method="POST">
        {{@csrf_field()}}
        <h1>Add product</h1>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="quaintity" placeholder="quaintity">
        <select name="category">
            @foreach($cat as $c)
            <option value="{{$c->category}}">{{$c->category}}</option>
            @endforeach
        </select>
        <input type="submit" name="submit" value="Add"><br><br>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
