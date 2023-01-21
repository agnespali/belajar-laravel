<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
<div class="container mt-5">
    <form action="{{route('book-update', $book->id)}}" method="post">
        @csrf
        @method("put")
  <div class="form-group">
    <label for="exampleInputname1">name</label>
    <input name="name" value="{{$book->name}}" type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="exampleInputauthor1">author</label>
    <input name="author" value="{{$book->author}}" type="author" class="form-control" id="exampleInputauthor1" aria-describedby="authorHelp" placeholder="author">
  </div>
  
  <div class="form-group">
    <label for="exampleInputyear1">year</label>
    <input name="year" value="{{$book->year}}" type="year" class="form-control" id="exampleInputyear1" placeholder="year">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>