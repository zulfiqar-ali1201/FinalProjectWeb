@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
           COURSES
        </div> 
        <div class="card-body">
            <table class="table">
                <thead> 
                    <th>Title</th>
                    <th>Category</th>
                    <th>Duration</th>
                    <th>Sort</th>
                    <th></th>
                </thead>
                <tbody>
                   @foreach($courses as $course)
                    <tr>
                        <td>{{$course->title}}</td>
                        <td>{{$course->category}}</td>
                        <td>{{$course->duration}}</td>
                        <td>{{$course->sort}}</td>
                        <td><a href="{{route('courses.edit',$course->id)}}" class="btn btn-info btn-sm">EDIT</a>
                            <button class="btn btn-danger btn-sm" onclick="handleDelete({{$course->id}})">Delete</button>
                        
                        </td>
                        
                    <tr>
                 @endforeach
                  
                </tbody>
            </table>

            <!-- Modal for Delete -->
            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="POST" id="deleteCourseForm">
                    @csrf
                    @method("DELETE")
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Are you sure want to Delete This Course</p>
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
        <a href="{{route('courses.create')}}" class="btn btn-success mt-2">Add Course</a>
    </div>

@endsection

@section('scripts')
<!-- script for the launch delete Modal -->
    <script>
        function handleDelete(id){
    
            var form=document.getElementById('deleteCourseForm')
            form.action='/ecicwebsite/public/courses/'+id
            $('#deletemodal').modal('show')
        }
    </script>
@endsection