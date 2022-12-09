@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('poststore') }}" method="POST">
                @csrf
                <div class="md-8 form-group">
                    <label for="exampleFormControlInput1" class="form-label"> Post Title</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="title of post" required>
                </div>
                <div class="md-8 form-group">
                    <label for="exampleFormControlTextarea1" class="form-label">Post Content</label>
                    <textarea class="form-control" type="text" name="description" id="" rows="3" placeholder="description of post" required></textarea>
                </div>
                <br> 
                <button type="submit" class="btn btn-primary">POST</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" type="text/css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" type="text/css">
<script src="{{asset('assets/lib/')}}"></script>

@endsection


