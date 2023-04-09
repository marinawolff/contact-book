<x-layout>
    <x-slot name="title"> {{ $first_name }} </x-slot>
    <div class="row my-5 d-flex align-items-center">
        <div class="col-9">
            <h5 class="display-4"> {{ $first_name }} {{ $last_name }} </h5>
        </div>
        <div class="col-3 text-end">
            <a href="/contacts/ {{ $id }}/edit" class="text-decoration-none text-body">Edit Contact</a>
        </div>
    </div>
    <p> {{ $email }}</p>
    <a href="/" class="text-decoration-none"> &lt; Contacts </a>
</x-layout>
