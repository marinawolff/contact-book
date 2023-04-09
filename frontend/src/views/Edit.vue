<template>
<!-- <h5 class="display-4"> {{ $title }} </h5> -->
    <router-link to="/" class="link-text">&lt; Back to Contacts</router-link>
    <div class="row my-2 d-flex bg-light p-4">
        <!-- <div class="row"> -->
            <div class="col">
                <div class="col mb-4">
                    <h1 class="title text-center">Edit Contact</h1>
                </div>
                <form @submit.prevent="updateContact" class="form mb-3 d-flex flex-column p-1">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control mb-3" name="first_name" v-model="first_name">

                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control mb-3" name="last_name" v-model="last_name">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control mb-3" name="email" v-model="email">

                    <div class="align-self-end">
                        <router-link :to="`/contact/${id}`" class="btn btn-secondary me-3">Cancel</router-link>
                        <button class="btn button">Update Contact</button>
                    </div>
                </form>
            <!-- </div> -->
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button class="btn delete" @click="deleteContact"> Delete Contact</button>
    </div>
</template>

<script>
export default {
    name: 'Contact',
    props: ['id'],
    data: function () {
        return {
            first_name: '',
            last_name: '',
            email: ''
        }
    },
     created: async function () {
        const response = await fetch ('http://contact-book-marinawolff.test/api/contacts/' + this.id)
        const contact = await response.json()
        this.first_name = contact.first_name
        this.last_name = contact.last_name
        this.email = contact.email
    },
    methods: {
        updateContact: async function () {
            const response = await fetch('http://contact-book-marinawolff.test/api/contacts/' + this.id, {
                method: 'PUT', 
                body: JSON.stringify({
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            this.$router.push('/contact/' + this.id)
        },
        deleteContact: async function () {
            const response = await fetch('http://contact-book-marinawolff.test/api/contacts/' + this.id,{
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            this.$router.push('/')
        }

    }
}
</script>

<style>
.button{
  background-color:#FFBA57;
  color: white;
}

.button:hover{
  background-color:#eda848;
  color: white;
}

.delete:hover{
    color:rgb(179, 55, 55);
}
</style>