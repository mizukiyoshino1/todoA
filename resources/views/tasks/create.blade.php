<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('/asset/css/style.css') }}">
</head>
<body>
  <header>
    <nav class="navbar">    
    </nav>
  </header>

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('tasks.store') }}" method="POST">
              @csrf
              {{-- サニタイジング防止 --}}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
    </div>
  </div>
</body>
</html>