@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
            ABOUT
        </div> 
        <div class="card-body">
            <table class="table">
                <thead> 
                    <th>Title</th>
                    <th>Category</th>
                    <th>Sort</th>
                    <th></th>
                </thead>
                <tbody>
                   @foreach($abouts as $about)
                    <tr>
                        <td>{{$about->title}}</td>
                        <td>{{$about->category}}</td>
                        <td>{{$about->sort}}</td>
                        <td><a href="{{route('abouts.edit',$about->id)}}" class="btn btn-info btn-sm">EDIT</a>
                            <button class="btn btn-danger btn-sm" onclick="handleDelete({{$about->id}})">Delete</button>
                        
                        </td>
                        
                    <tr>
                 @endforeach
                  
                </tbody>
            </table>

            <!-- Modal for Delete -->
            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="POST" id="deleteAboutForm">
                    @csrf
                    @method("DELETE")
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete About details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Are you sure want to Delete These About Details</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO, Go Back</button>
                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                    </div>
                    </form>
            </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <a href="{{route('abouts.create')}}" class="btn btn-success mt-2">Add About</a>
    </div>

@endsection

@section('scripts')
<!-- script for the launch delete Modal -->
    <script>
        function handleDelete(id){
    
            var form=document.getElementById('deleteAboutForm')
            form.action='/ecicwebsite/public/abouts/'+id
            $('#deletemodal').modal('show')
        }
    </script>
@endsection