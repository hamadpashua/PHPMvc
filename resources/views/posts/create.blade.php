@extends('base')
@section('title', 'post-create-Page')
@section('content')

<main class="container-fluid">
    <div class="row my-4">

        {{-- mainbar --}}
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><h5>Create new Post</h5></div>
                </div>
                <div class="card-body">
                <form>           
                     <div class="form-group mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title">
                     </div>           
                     <div class="form-group mb-3">
                        <label for="body" class="form-label">Body/Description <span class="text-danger">*</span> </label>
                        <textarea class="form-control" rows="10" name="body" id="body" placeholder="Enter the post here"></textarea>
                     </div>        
                     <div class="form-group mb-3">
                        <button class="btn btn-success">Create Post</button>
                     </div>
                </form>
                </div>
            </div>
        </div>

        {{-- sidebar  --}}
        @include('includes.sidebar')
    </div> {{-- End Row --}}
</main>

@endsection





 
