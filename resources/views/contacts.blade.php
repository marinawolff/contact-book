<x-layout>
<div class="row my-5 d-flex align-items-center">
    <div class="col-9">
    <h1 class="display-4"> Contact Book </h1>
    </div>
    <div class="col-3 text-end">
        <a href="/create" class="text-decoration-none text-body">New</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <form class="form mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search">
        </form>
    </div>
</div>
<div class="row">
    @foreach ($contacts as $contact)
    <div class="col-12 col-md-6 col-lg-4">
        <a href="/contacts/{{ $contact['id'] }}" class="text-decoration-none text-body"> 
            <div class="card mb-3">
                <h5 class="card-header">{{ $contact['first_name'] }} {{ $contact['last_name'] }} </h5>
            </div>
        </a>
    </div>
    @endforeach
</div>
</x-layout>