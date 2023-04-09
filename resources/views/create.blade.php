<x-layout>
    <x-slot name="title"> {{ $title }} </x-slot>
    <h5 class="display-4"> {{ $title }} </h5>

    <div class="row">
        <div class="col">
            <form method="post" action="/" class="form mb-3 d-flex flex-column bg-light p-5">
                @csrf
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control mb-3" name="first_name">

                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control mb-3" name="last_name">

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control mb-3" name="email">

                <div class="align-self-end">
                    <a href="/" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary"> Add Contact</contact>
                </div>
            </form>
            <a href="/" class="text-decoration-none"> &lt; Contacts </a>
        </div>
    </div>
</x-layout>