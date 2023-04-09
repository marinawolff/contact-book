<x-layout>
    <x-slot name="title"> {{ $title }} </x-slot>
    <h5 class="display-4"> {{ $title }} </h5>

    <div class="row">
        <div class="col">
            <form method="post" action="/contacts/{{ $contact['id'] }}" class="form mb-3 d-flex flex-column bg-light p-5">
                @csrf
                @method('PUT')
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control mb-3" name="first_name" value="{{ $contact['first_name'] }}">

                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control mb-3" name="last_name" value="{{ $contact['last_name'] }}">

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control mb-3" name="email" value="{{ $contact['email'] }}">

                <div class="align-self-end">
                    <a href="/contacts/{{ $contact['id'] }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary"> Update Contact</contact>
                </div>
            </form>
            <form method="post" action="/contacts/ {{$contact['id'] }}" class="d-flex justify-content-center">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger"> Delete Contact </button>
            </form>
            <a href="/" class="text-decoration-none"> &lt; Contacts </a>
        </div>
    </div>
</x-layout>