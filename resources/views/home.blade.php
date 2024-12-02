@extends('layout.app')
@section('content')
<div class="container my-5">
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @if($adds->isEmpty())
                        <div class="col-md-12">
                            <h2>Data Not Found</h2>
                        </div>
                    @else
                        @foreach ($adds as $request)
                            <div class="col-md-6">
                                <div class="card">
                                    @if(!empty($request->image))
                                        <img src="{{asset('assets/image/'.$request->image)}}" class="img-fluid" alt="minimal.webp">
                                    @else
                                        <img itemprop="image" src="https://placehold.co/400" alt="user.webp" class="img-fluid"
                                        width="80">
                                    @endif
                                    <div class="card-body">
                                        <p class="card-text">{!! $request->desc !!}</p>
                                        <div class="d-flex justify-content-between">
                                            <a href="" class="btn btn-warning">edit</a>
                                            <a href="{{ url('delete/'.$request->id) }}" class="btn btn-danger">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{'/updated'}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail4">Descprition</label>
                                <textarea type="text" class="form-control" id="edi" placeholder="Enter Your Text" 
                                name="desc" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Upload File</label>
                                <input type="file" class="form-control" id="inputAddress" name="image">
                            </div>
                            <button type="submit" class="btn btn-danger">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection