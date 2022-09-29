@extends('layouts.app_original')
@section('content')

  <a href="{{ route('tasks.create')}}" class="list"><button type="submit" class="btn btn-primary">New Create</button></a>

  {{-- 一覧画面 --}}
  @foreach($tasks as $post)
  <section>  
    <div class="main-content">
      <img src="" alt="">
      <h1 class="tittle">タイトル:{{ $post->title }}</h1>
      <p class="comment">
        内容: {{ $post->contents }}
      </p>
    </div>
      
    <div class="sub-content">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
      </svg>
      <h4>EDIT</h4>
      <h4>DELETE</h4>
    </div>
  </section>
  @endforeach
@endsection
