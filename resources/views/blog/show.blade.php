@extends('layouts.main')

@section('contact')



  <div class="row justify-content-center">
      <div class="col-md-8">
            <h1 class="">One  Post</h1>
             <div class="card" style="margin:33px 0;">
                 <div class="card-body">
                 <h4 class="card-title">{{ $post->title }}</h4>
                 <p>{{ $post->content}}</p>
                 <a href="{{ route('blog.index') }}" class="btn btn-light">Back</a>
                 </div>
             </div>  
             
             
        @foreach ($comments as $comment)
        <div class="card" style="margin:33px 0;">
            <div class="card-body">
            {{ $comment->comment }}
            </div>
        </div>
        @endforeach
            
        
        <div class="card">
            <h5 class="card-header">Replay</h5>
            <div class="card-body">
                @include('includes/status')
                <form action="{{ route('newComment') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input type="hidden" name="post_type" id="" value="App\Post">
                        <textarea name="comment" id="" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <input type="reset" class="btn btn-light" value="Cancel">
                    <input type="submit" class="btn btn-primary" value="Post">
                </form>
            </div>

      
        </div>
         
        </div>
    </div>
@endsection

@section('title')
    One Post

   
@endsection