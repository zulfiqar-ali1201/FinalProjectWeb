@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
        {{isset($gallery) ? 'CHANGE IMAGE' : 'ADD IMAGE'}} 
        </div> 
        <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                <ul class="list-group">
                    {{$error}}

                    @endforeach
                </ul>
            </div>
        @endif

          
            <form action="{{isset($gallery) ? route('gallery.update', $gallery->id) : route('gallery.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(isset($gallery))
                @method('PUT')
            @endif
                <div class="form-group">
                    <label for="name">Title</label> 
                    <input type="text" id="title" name="title" class="form-control" value="{{isset($gallery) ? $gallery->title : ''}}">
                </div>
                
                
                @if(isset($gallery))
                 <div class="form-group">
                    <img src="{{asset('storage/'.$gallery->imageicon)}}" width="150" height="150" alt="">
                </div>

                 @endif

                <div class="form-group">
                <label for="name">Image Icon</label>  
                <input type="file" id="imageicon" name="imageicon" class="form-control">
                </div>

                @if(isset($gallery))
                 <div class="form-group">
                    <img src="{{asset('storage/'.$gallery->image)}}" width="150" height="150" alt="">
                </div>

                 @endif

                <div class="form-group">
                <label for="name">Image</label>  
                <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="form-group">

                @if(isset($gallery))
                 <div class="form-group mt-5">
                   {{$gallery->category}}
                </div>

                 @endif

                     <label for="name">Category</label> 
                    <select class="form-control" name="category" id="category">
                        <option value="building">Building</option>
                        <option value="compuerlabs">Computer Labs</option>
                        <option value="electricianLabs">Electrician Labs</option>
                        <option value="theory">Theory Rooms</option>
                        <option value="ece">Early Child Education</option>
                        <option value="events">Events</option>
                    </select>
               
                   
                    <!--<input type="text" name="category" id="category" class="form-control"> -->
                   
                </div>

            
               
                <div class="form-group">
                    <label for="name">Sort</label> 
                    <input type="number" id="sort" name="sort" class="form-control" value="{{isset($gallery) ? $gallery->sort : ''}}">
                </div>

                <div class="form-group">
                
                    <input type="submit" value="Add Image" class="btn btn-success"/>
                </div>  
            </form>
        </div>
    </div>

   

@endsection