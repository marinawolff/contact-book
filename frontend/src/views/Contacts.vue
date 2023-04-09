<template>
<div class="row">
    <div class="col">
        <form class="form mb-3" @submit.prevent>
            <input type="text" class="form-control" name="search" placeholder="Search Contact" v-model="search">
        </form>
    </div>
</div>
<div class="row">
    <div class="col col-12 col-xl-6 mb-3"
        v-for="contact in filteredContacts"
        :key="contact.id">
        <router-link class="text-decoration-none text-body" :to="'/contact/' + contact.id">
            <div class="card d-flex flex-row display-contacts">
                <div class="align-self-center ms-3 bi bi-person-circle"></div>
                <div class="contact-text card-body">{{ contact.first_name }} {{contact.last_name}}</div>
            </div>
        </router-link>
    </div>
</div>
</template>

<script>
export default {
    name: 'Contacts',
    data: function () {
        return{
            contacts: [],
            search: ''
        }
    },
    created: async function () {
        const response = await fetch('http://contact-book-marinawolff.test/api/contacts')
        const contacts = await response.json()

        this.contacts = contacts
    },
    computed: {
        filteredContacts: function () {
            return this.contacts.filter(contact => 
            contact.first_name.toLowerCase().includes(this.search) || contact.last_name.toLowerCase().includes(this.search))
        }
    }
}
</script>

<style>
.contact-text, input, label{
    font-family: 'Karla', sans-serif;
}

.display-contacts:hover{
    background-color: #ffddad;
}
</style>