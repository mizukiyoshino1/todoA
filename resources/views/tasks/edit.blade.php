@extends('layouts.app_original')
@section('content')

<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('patch')
            {{-- サニタイジング防止 --}}
              <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" value="{{ $task->title }}" placeholder="Titleを入力して下さい" name="title">
              </div>
              <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="5" name="body">{{ $task->contents }}
                  </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
          </form>
      </div>
  </div>
</div>

@endsection