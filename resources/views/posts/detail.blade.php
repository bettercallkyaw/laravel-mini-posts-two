@extends('layouts.app')

@section('title','deatil post')

@section('content')
    
<div class="container">
    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <div class="card-subtitle mb-2 text-muted small">
                
                Category: <b>{{ $post->category->name }}</b>,
                Author: <strong><a href="">{{ $post->user->name }}</a></strong>
            </div>
            <p class="card-text">{{ $post->body }}</p>
            <a class="btn btn-info" href="{{ route('all.posts') }}">
                Back
            </a>
            <a class="btn btn-warning" href="{{ route('posts.destroy',$post->id) }}">
                Delete
            </a>

            <a href="{{ route('posts.update',$post->id) }}" class="btn btn-success">edit</a>
        </div>
    </div>

    <ul class="list-group">
        <li class="list-group-item active">
            <b>Comments</b>
        </li>

        <br>
        

       

       
            <li class="list-group-item">
                
                <a href="" style="color: red" class="close">
                    &times;
                </a>
                <div class="small mt-2">
                    By <b style="color:red"></b>,
                    
                </div>
            </li>
        
    </ul>
    <br>
    <form action="" method="post">
        
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <textarea name="content" class="form-control mb-2 @error('content') is-invalid @enderror" placeholder="New Comment"></textarea>
        @error('content')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="submit" value="Add Comment" class="btn btn-secondary">
    </form>

@endsection