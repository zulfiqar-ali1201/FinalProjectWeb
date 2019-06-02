@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
            Announcements
        </div> 
        <div class="card-body">
            <table class="table">
                <thead> 
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Announcement Date</th>
                    <th>Sort</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach($announcements as $announcement)
                    <tr>
                        <td>{{$announcement->title}}</td>
                        <td>{{$announcement->description}}</td>
                        <td><img src="{{asset('storage/'.$announcement->image)}}" width="60px" height="60px"></td>
                        <td>{{$announcement->announcedate}}</td>
                        <td>{{$announcement->sort}}</td>
                        <td>
                            <a href="{{route('announcements.edit',$announcement->id)}}" class="btn btn-info btn-sm">EDIT</a>
                            <button class="btn btn-danger btn-sm" onclick="handleDelete({{$announcement->id}})">Delete</button>
                        </td>
                    <tr>
                @endforeach
               
                </tbody>
            </table>

            <!-- Modal for Delete -->
            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="POST" id="deleteAnnouncementsForm">
                    @csrf
                    @method("DELETE")
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Announcment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Are you sure want to Delete this Announcement</p>
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
        <a href="{{route('announcements.create')}}" class="btn btn-success mt-2">Add Announcements</a>
    </div>

@endsection

@section('scripts')
<!-- script for the launch delete Modal -->
    <script>
        function handleDelete(id){
    
            var form=document.getElementById('deleteAnnouncementsForm')
            form.action='/ecicwebsite/public/announcements/'+id
            $('#deletemodal').modal('show')
        }
    </script>
@endsection