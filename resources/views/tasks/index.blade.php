<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('/asset/css/style.css') }}">
  <title>Document</title>
</head>
<body>
  {{-- 一覧画面のヘッダー --}}
  <header>
    <nav class="navbar">
      <ul class="nav-contents">
        <a href="" class="list"><li>Login</li></a>
        <a href="" class="list"><li>Create</li></a>
      </ul>
    </nav>
  </header>

  {{-- 一覧画面 --}}
  <section>
    <div class="main-content">
      <img src="" alt="">
      <h1 class="tittle">タイトル</h1>
      <p class="comment">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi molestias accusantium nemo incidunt voluptatum quo vero animi, ut, aspernatur similique laboriosam quis reprehenderit sed. Totam nostrum id architecto minus perferendis!</p>
    </div>
      
    <div class="sub-content">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
      </svg>
      <h4>EDIT</h4>
      <h4>DELETE</h4>
    </div>
  </section>
  
</body>
</html>