<template>
    <div class="row my-5 d-flex align-items-center">
        <div class="col">
            <router-link to="/" class="link-text">&lt; Back to Contacts</router-link>
        </div>
        <div class="col text-end">
            <router-link :to="`/contact/${id}/edit`" class="link-text">Edit</router-link>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="title">{{ first_name }} {{ last_name}}</h1>
            <div class="d-flex">
                <i class="bi bi-envelope-fill"></i>
                <p class="contact-text mx-3"> {{ email }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Contact',
    props: ['id'],
    data: function () {
        return{
            first_name: '',
            last_name: '',
            email: '',
        }
    },
    created: async function () {
        const response = await fetch ('http://contact-book-marinawolff.test/api/contacts/' + this.id)
        const contact = await response.json()
        this.first_name = contact.first_name
        this.last_name = contact.last_name
        this.email = contact.email
    }
}
</script>

<style>
.link-text {
  font-family: 'Karla', sans-serif;
  text-decoration: none;
  color: black;
}

.link-text:hover{
  color: #E8655A;
}
</style>