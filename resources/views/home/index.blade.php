@extends('base')
@section('title', 'Index-Page')
@section('content')
    <h3>Welcome to SaiLite MvcPHP Framework</h3>
    <form action="{{ url('/HomeController/create') }}" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="test">Test</label>
            <input type="text" name="test" class="form-control @if($errors && $errors->has('test')) is-invalid @endif" value="{{ $old?$old['test']:'' }}">
            @if ($errors && $errors->has('test'))
                <div class="invalid-feedback">{{ $errors->first('test') }}</div>
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="file">File</label>
            <input type="file" name="file" class="form-control @if($errors && $errors->has('file')) is-invalid @endif">
            @if ($errors && $errors->has('file'))
                <div class="invalid-feedback">{{ $errors->first('file') }}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Test validations</button>
    </form>
@endsection
