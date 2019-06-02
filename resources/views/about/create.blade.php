@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
         {{isset($about) ? 'Edit About' : 'Add About'}}
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

          
            <form action="{{isset($about) ? route('abouts.update', $about->id) : route('abouts.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(isset($about))
                @method('PUT')
            @endif
                <div class="form-group">
                    <label for="name">Title</label> 
                    <input type="text" id="title" name="title" class="form-control" value="{{isset($about) ? $about->title : ''}}">
                </div>
                <div class="form-group">
                    <label for="name">Description</label> 
                    <input id="description" type="hidden" name="description" class="form-control" value="{{isset($about) ? $about->description : ''}}"> 
                    <trix-editor input="description"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="name">Category</label> 
                    <input type="text" id="category" name="category" class="form-control" value="{{isset($about) ? $about->category : ''}}">
                </div>


                @if(isset($course))
                 <div class="form-group">
                    <img src="{{asset('storage/'.$about->image)}}" alt="" width="150" height="150"> 
                </div>

                 @endif

                <div class="form-group">
                
                    <label for="name">Image</label>  
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="name">Sort</label> 
                    <input type="number" id="sort" name="sort" class="form-control" value="{{isset($about) ? $about->sort : ''}}">
                </div>

                <div class="form-group">
                
                    <input type="submit" value="{{isset($about) ? 'Edit About' : 'Add About'}}" class="btn btn-success"/>
                </div>  
            </form>
        </div>
    </div>

   

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>   
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css" /> 
@endsection