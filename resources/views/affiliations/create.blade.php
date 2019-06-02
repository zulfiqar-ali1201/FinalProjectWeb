@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
        {{isset($affiliation) ? 'Edit affiliation' : 'Add affiliation'}}
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

          
            <form action="{{ isset($affiliation) ?  route('affiliations.update', $affiliation->id) : route('affiliations.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(isset($affiliation))
                @method('PUT')
            @endif
                <div class="form-group">
                    <label for="name">Title</label> 
                    <input type="text" id="title" name="title" class="form-control" value="{{isset($affiliation) ? $affiliation->title : ''}}">
                </div>
                <div class="form-group">
                    <label for="name">Description</label> 
                    <input type="text" id="description" name="description" class="form-control" value="{{isset($affiliation) ? $affiliation->description : ''}}">
                </div>

                 @if(isset($affiliation))
                 <div class="form-group">
                    <img src="{{asset('storage/'.$affiliation->logo)}}" alt="">
                </div>

                 @endif
                <div class="form-group">
                
                    <label for="name">Logo</label>  
                    <input type="file" id="logo" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Sort</label> 
                    <input type="number" id="sort" name="sort" class="form-control" value="{{isset($affiliation) ? $affiliation->sort : ''}}">
                </div>

                <div class="form-group">
                
                    <input type="submit" value="{{isset($affiliation) ? 'Update affiliation' : 'Add affiliation'}}" class="btn btn-success"/>
                </div>  
            </form>
        </div>
    </div>

   

@endsection