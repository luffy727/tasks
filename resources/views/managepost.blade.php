@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                
                
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">your blog posts</h4>
                    
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="text-black">Id</th>
                                            <th class="text-black">User name</th>
                                            <th class="text-black">Blog Title</th>
                                            <th class="text-black">Description </th>
                                            <th class="text-black">Date</th>
                                            <th class="text-black">Action</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blog as $item)
                                        <tr>
                                            <td class="text-black"><b>{{ $item->id}}</b></td>
                                            <td class="text-black"><b>{{ $item-> blogpost->name}}</b></td>
                                            <td class="text-black"><b>{{ $item->title }}</b></td>
                                            <td class="text-black"><b>{{ $item->description }}</b></td>
                                            <td class="text-black"><b>{{ $item->created_at }}</b></td>
                                            <td>
                                                <a href="{{ url('editpost/'.$item->id) }}" class="btn btn-info">Edit</a>
                                             <br>
                                             </td>
                                             <td>
                                                <a href="{{ url('delete-post/'.$item->id) }}" type="button" class="btn btn-danger ">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    

@endsection



