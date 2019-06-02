@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
        {{isset($contact) ? 'Edit Contact' : 'Add Contact'}} 
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

          
            <form action="{{isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(isset($contact))
                @method('PUT')
            @endif
                <div class="form-group">
                    <label for="name">Campus</label> 
                    <input type="text" id="campus" name="campus" class="form-control" value="{{isset($contact) ? $contact->campus : ''}}">
                </div>
                <div class="form-group">
                    <label for="name">Map</label> 
                    <input type="text" id="map" name="map" class="form-control" value="{{isset($contact) ? $contact->map : ''}}">
                </div>

                <div class="form-group">
                    <label for="name">Address</label> 
                    <input type="text" id="address" name="address" class="form-control" value="{{isset($contact) ? $contact->address : ''}}">
                </div>

                <div class="form-group">
                    <label for="name">Number</label> 
                    <input type="number" id="number" name="number" class="form-control" value="{{isset($contact) ? $contact->number : ''}}">
                </div>

                <div class="form-group">
                    <label for="name">Email</label> 
                    <input type="text" id="email" name="email" class="form-control" value="{{isset($contact) ? $contact->email : ''}}">
                </div>

                
                <div class="form-group">
                    <label for="name">Sort</label> 
                    <input type="number" id="sort" name="sort" class="form-control" value="{{isset($contact) ? $contact->sort : ''}}">
                </div>

                <div class="form-group">
                
                    <input type="submit" value="Add Contacts" class="btn btn-success"/>
                </div>  
            </form>
        </div>
    </div>

   

@endsection