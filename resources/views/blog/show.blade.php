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
        </div>
    </div>
@endsection

@section('title')
    One Post

   
@endsection