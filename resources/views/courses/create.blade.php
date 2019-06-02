@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
         {{isset($course) ? 'Edit Course' : 'Add Course'}}
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

          
            <form action="{{isset($course) ? route('courses.update', $course->id) : route('courses.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(isset($course))
                @method('PUT')
            @endif
                <div class="row">
                <div class="form-group col-md-4">
                    <label for="name">Title</label> 
                    <input type="text" id="title" name="title" class="form-control" value="{{isset($course) ? $course->title : ''}}">
                </div>
                @if(isset($course))
                 <div class="form-group col-md-4">
                    <img src="{{asset('storage/'.$course->titleimage)}}" alt="" width="150" height="150"> 
                </div>

                 @endif


                 <div class="form-group col-md-4">
                
                    <label for="name">Title Image</label>  
                    <input type="file" id="titleimage" name="titleimage" class="form-control">
                </div>

                </div>
                
                
                <div class="form-group">
                    <label for="name">Description</label> 
                    <input type="text" id="description" name="description" class="form-control" value="{{isset($course) ? $course->description : ''}}">
                </div>

                <div class="form-group">
                    <label for="name">Leads to</label> 
                    <input type="text" id="leads" name="leads" class="form-control" value="{{isset($course) ? $course->leads : ''}}">
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Duration</label> 
                        <input type="text" id="duration" name="duration" class="form-control" value="{{isset($course) ? $course->duration : ''}}">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="name">Category</label> 
                    <input type="text" id="category" name="category" class="form-control" value="{{isset($course) ? $course->category : ''}}">
                </div>
                </div>


                <div class="form-group">
                    <label for="name">Contents</label> 
                    <input id="contents" type="hidden" name="contents" class="form-control" value="{{isset($course) ? $course->contents : ''}}"> 
                    <trix-editor input="contents"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="name">Course Outcomes</label> 
                    <input id="outcomes" type="hidden" name="outcomes" class="form-control" value="{{isset($course) ? $course->outcomes : ''}}"> 
                    <trix-editor input="outcomes"></trix-editor>
                </div>
                
                <div class="form-group">
                    <label for="name">Sort</label> 
                    <input type="number" id="sort" name="sort" class="form-control" value="{{isset($course) ? $course->sort : ''}}">
                </div>

                <div class="form-group">
                
                    <input type="submit" value="{{isset($course) ? 'Edit Course' : 'Add Course'}}" class="btn btn-success"/>
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