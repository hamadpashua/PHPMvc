@if(has('success'))
<div class="container mx-4 my-2">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ flash('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

@if(has('fail'))
<div class="container mx-4 my-2">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ flash('fail') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

@if(has('auth'))
<div class="container mx-4 my-2">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ flash('auth') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

