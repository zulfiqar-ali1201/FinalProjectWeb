@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
            {{isset($announcement) ? 'Edit Announcement' : 'Add Annoucement'}}
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

          
            <form action="{{isset($announcement) ? route('announcements.update', $announcement->id) : route('announcements.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(isset($announcement))
                @method('PUT')
            @endif
                <div class="form-group">
                    <label for="name">Title</label> 
                    <input type="text" id="title" name="title" class="form-control" value="{{isset($announcement) ? $announcement->title : ''}}">
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <textarea  id="description" name="description" class="form-control">{{isset($announcement) ? $announcement->description : ''}}</textarea>
                    
                </div>
                @if(isset($announcement))
                 <div class="form-group">
                    <img src="{{asset('storage/'.$announcement->image)}}" alt="">
                </div>

                 @endif
                <div class="form-group">
                    <label for="name">Image</label>  
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Announced at</label>  
                    <input type="date" id="announcedate" name="announcedate" class="announcedate form-control" value="{{isset($announcement) ? $announcement->announcedate : ''}}">
                </div>

                <div class="form-group">
                    <label for="name">Sort</label> 
                    <input type="number" id="sort" name="sort" class="form-control" value="{{isset($announcement) ? $announcement->sort : ''}}">
                </div>

                <div class="form-group">
                
                    <input type="submit" value="Add Announcement" class="btn btn-success"/>
                </div>  
            </form>
        </div>
    </div>

   

@endsection

 
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
 $('#date').datepicker({  

    format: 'mm-dd-yyyy'

}); 

</script>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
@endsection