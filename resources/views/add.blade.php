@extends('layout.app')
@section('content')
<div class="container my-5">
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{'/updated'}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail4">Descprition</label>
                            <textarea type="text" class="form-control" id="inputEmail4" placeholder="Enter Your Text" name="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Upload File</label>
                            <input type="file" class="form-control" id="inputAddress" name="image">
                        </div>
                        <button type="submit" class="btn btn-danger">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection