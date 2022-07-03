<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form method="post" action="{{route('article.update',$article->id)}}">
        @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" value="{{$article->title}}" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">content</label>
          <textarea class="form-control" name="content"  id="exampleFormControlTextarea1" rows="3">{{$article->content}}</textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">User</label>
          <select class="form-select" name="user_id" aria-label="Default select example">
            @foreach($users as $user)
              <option value="{{$user->id}}" @if($user->id == $article->user_id) selected @endif>{{$user->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
           <button type="submit" class="btn btn-primary mb-3">Save</button>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>