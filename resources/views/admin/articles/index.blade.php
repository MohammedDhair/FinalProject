<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div style="text-align: left;"> <a href="{{route('article.create')}}" class="btn btn-success" >Add Article</a></div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">user</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->usre->name}}</td>
                <td><a href="{{route('article.edit',$article->id)}}" class="btn btn-success btn-sm">Edit</a> <a href="{{route('article.delete',$article->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>