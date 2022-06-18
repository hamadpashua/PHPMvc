@extends('base')
@section('title', 'changePassword-Page')
@section('content')

<main class="container-fluid">
    <div class="row my-4">

        {{-- mainbar --}}
        <div class="col-md-8 mx-auto">
            <div class="row my-4 border p-3">
                <h4 class="border-bottom pb-2 my-4">Change Password</h4>
                <form>           
                     <div class="form-group mb-3">
                        <label for="password" class="form-label">Current Password <span class="text-danger">*</span> </label>
                        <input type="password" class="form-control" name="password" id="password">
                            <div class="text-muted">Enter the current used password</div>
                     </div>           
                     <div class="form-group mb-3">
                        <label for="new-password" class="form-label">New Password <span class="text-danger">*</span> </label>
                        <input type="password" class="form-control" name="new-password" id="new-password">
                     </div>            
                     <div class="form-group mb-3">
                        <label for="confirm-password" class="form-label">Confirm New Password <span class="text-danger">*</span> </label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                     </div>       
                     <div class="form-group mb-3">
                        <button class="btn btn-outline-success">Change Password</button>
                     </div>

                </form>
            </div>
        </div>

        {{-- sidebar  --}}
        @include('includes.sidebar')
    </div> {{-- End Row --}}
</main>

@endsection