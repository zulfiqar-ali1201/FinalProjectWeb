@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
            Heading
        </div> 
        <div class="card-body">
            <table class="table">
                <thead> 
                    <th>Title</th>
                    <th>Slogon</th>
                    <th>Logo</th>
                
                </thead>
                <tbody>
                @foreach($header as $header)
                    <tr>
                        <td>{{$header->title}}</td>
                        <td>{{$header->slogan}}</td>
                        <td><img src="{{asset('storage/'.$header->logo)}}" width="60px" height="60px"></td>
        
                        <td><a href="{{route('headers.edit',$header->id)}}" class="btn btn-info btn-sm">EDIT</a>
                           
                        
                        </td>
                        
                    <tr>
                    @endforeach
                </tbody>
            </table>
            <!--
            <div class="d-flex justify-content-end">
               <a href="{{route('headers.create')}}" class="btn btn-success mt-2">Add Heading</a>
            </div>
-->

@endsection

