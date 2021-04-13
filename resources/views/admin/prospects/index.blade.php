@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mt-3">
            
            <div class="card-body">
                <div class="d-flex">
                    <h1>Prospects <small class="text-mutted">Showing all Prospects</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{route('admin.prospects.create')}}">Create Prospect</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                    </div>
                </div>
                
                <hr>
                 
                @if ($prospects->count())
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                    
                @endif
            </div>
        </div>
    </div>
@endsection