@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Create Prospect</h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{route('admin.prospects.dashboard')}}">Dashboard</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                    </div>
                </div>
                <hr>
                <form action="{{ route('admin.prospects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Profile image</label>
                        <input type="file" class="form-control-file" name="profile-image">
                    </div>
                    <button class="btn btn-primary float-right">Create Prospect </button>
                </form>
            </div>
        </div>
    </div>
    
@endsection