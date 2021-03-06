@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">Add Folder</div>
                    <div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('folders.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Folder name</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
