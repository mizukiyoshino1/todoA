@extends('layouts.app_original')
@section('content')

{{-- 新規投稿ボタン --}}
<div class="new-create">
  <h1>Add Tasks</h1>
  <a href="{{ route('tasks.create')}}" class="list"><button type="submit" class="btn btn-primary">New Create</button></a>
</div>

{{-- 一覧画面 --}}
@foreach($tasks as $post)
<section>  
  <div class="main-content">
    <img src="" alt="">
    <h2 class="title">Title  :  {{ $post->title }}</h2>
    <p class="comment">
      Comment :  {{ $post->contents }}
    </p>
  </div>
    
  <div class="sub-content">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
    </svg>
    <a href="{{ route('tasks.edit', $post->id) }}" class="edit"><h4>EDIT</h4></a>
    <a href="{{ route('tasks.destroy', $post->id)}}" class="delete"><h4>DELETE</h4></a>
  </div>
</section>
@endforeach
@endsection
