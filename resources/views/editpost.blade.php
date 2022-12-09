@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">
                    <h4 class="card-title">Edit Post</h4>
               </div>
                <div class="card-body">
                <form action="{{ url('update-post/'.$blogpost->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="md-8 form-group">
                    <label for="exampleFormControlInput1" class="form-label"> Post Title</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="title of post"  value="{{ $blogpost->title }}" required>
                </div>
                <div class="md-8 form-group">
                    <label for="exampleFormControlTextarea1" class="form-label">Post Content</label>
                    <textarea class="form-control" type="text" name="description" id="" rows="5" placeholder="description of post" required>{{ $blogpost->description }}</textarea>
                </div>
                <br> 
                <button type="submit" class="btn btn-success">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')