<template>
    <router-link to="/" class="link-text">&lt; Back to Contacts</router-link>
    <div class="row my-2 d-flex bg-light p-4">
        <!-- <div class="row"> -->
        <div class="col">
            <div class="col mb-4">
                <h1 class="title text-center">New Contact</h1>
            </div>
            <form @submit.prevent="addContact" class="form mb-3 d-flex flex-column p-1">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control mb-3" name="first_name" v-model="first_name">

                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control mb-3" name="last_name" v-model="last_name">

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control mb-3" name="email" v-model="email">

                <div class="align-self-end">
                    <router-link to="/" class="btn btn-secondary me-3">Cancel</router-link>
                    <button class="btn button"> Add Contact</button>
                </div>
            </form>
        </div>
    </div>

</template>

<script>
export default {
    name: 'Create',
    data: function () {
        return {
            first_name: '',
            last_name: '',
            email: ''
        }
    },
    methods: {
        addContact: async function () {
            const response = await fetch('http://contact-book-marinawolff.test/api/contacts', {
                method: 'POST',
                body: JSON.stringify({
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })

            const contact = await response.json()

            this.$router.push('/contact/' + contact.id)
        }
    }
}
</script>

<style>

</style>