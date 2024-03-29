<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{ route('addCategorySubmit') }}" method="POST">
        {{@csrf_field()}}
        <h1>Add Category</h1>
        <input type="text" name="category">
        <input type="submit" name="submit" value="Add"><br><br>
        <a href="{{ route('addProduct') }}">Add Product</a>

        <h1>Category List</h1>
        @foreach($cat as $c)
        <a href="">{{$c->category}}</a> <br>
        @endforeach

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
