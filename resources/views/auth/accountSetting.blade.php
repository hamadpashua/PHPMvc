@extends('base')
@section('title', 'accountSetting-Page')
@section('content')

<main class="container-fluid">
    <div class="row my-4">

        {{-- mainbar --}}
        <div class="col-md-8 mx-auto">
            <div class="row my-4 border p-3">
                <h3 class="border-bottom pb-2 my-4">Account Settings</h3>
              <div class="list-group">
                  <a href="#" class="text-decoration-none list-group-item-action h5"> General Settings</a>
                  <a href="#" class="text-decoration-none list-group-item-action h5"> Privacy & Security</a>
              </div>
            </div>
        </div>

        {{-- sidebar  --}}
        @include('includes.sidebar')
    </div> {{-- End Row --}}
</main>

@endsection