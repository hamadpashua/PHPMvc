@extends('base')
@section('title', 'profile-Page')
@section('content')

<main class="container-fluid">
    <div class="row my-4">

        {{-- mainbar --}}
        <div class="col-md-8 mx-auto">
            <div class="row my-4 border p-3">
                <div class="col-md-2">
                    <img src="{{ asset('images/defaults/p_avatar.jpg') }} " width="130" height="130" class="rounded-circle" >
                </div>
                <div class="col-md-10 my-auto">
                    <h3>Hamad Pashua</h3>
                    <p class="mb-0"> <span class="fa fa-envelope"> </span> hamadpashua7@gmail.com </p> 
                    <p> <span class="fa fa-phone"> </span> +255 755 288462</p> 
                </div>
                <h4 class="border-bottom pb-2 my-4">Profile Info</h4>
                <form>           
                     <div class="form-group mb-3">
                        <label for="name" class="form-label">Username <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="name" id="name" value="hamadpashua">
                            <div class="text-muted">Enter valid username with 150 character</div>
                     </div>           
                     <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="email" id="email" value="hamadpashua7@gmail.com">
                     </div>          
                     <div class="form-group mb-3">
                        <label for="email" class="form-label">Image <span class="text-danger">*</span> </label><br>
                        Current Image: <a href="#">images/defaults/p_avatar.jpg</a><br>
                        Change: <input type="file" class="" name="file" id="file">
                     </div>       
                     <div class="form-group mb-3">
                        <button class="btn btn-success">Update Profile</button>
                     </div>

                </form>
            </div>
        </div>

        {{-- sidebar  --}}
        @include('includes.sidebar')
    </div> {{-- End Row --}}
</main>

@endsection