@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
        Edit Heading
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

          
            <form action="{{isset($header) ? route('headers.update',$header->id) : route('headers.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($header))
                @method('PUT')
            @endif

                <div class="form-group">
                    <label for="name">Title</label> 
                    <input type="text" id="title" name="title" class="form-control" value="{{isset($header) ? $header->title : ''}}">
                </div>
                <div class="form-group">
                    <label for="name">Slogon</label> 
                    <input type="text" id="slogan" name="slogan" class="form-control" value="{{isset($header) ? $header->slogan : ''}}">
                </div>
                @if(isset($header))
                 <div class="form-group">
                    <img src="{{asset('storage/'.$header->logo)}}" alt="">
                </div>

                 @endif
           
                <div class="form-group">
                
                    <label for="name">Logo</label>  
                    <input type="file" id="logo" name="logo" class="form-control">
                </div>

              
                <div class="form-group">
                
                    <input type="submit" value="{{isset($header) ? 'Update Header' : 'Add Header'}}" class="btn btn-success"/>
                </div>  
            </form>
        </div>
    </div>

   

@endsection