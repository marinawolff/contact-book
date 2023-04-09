<template>
<div class="container">
  <div class="wrapper">
    <nav class="nav my-5">
        <div class="col-xl-6">
            <router-link to="/" class="contact-book">Contact Book</router-link>
        </div>
        <div class="col text-end">
          <router-link to="/" class="nav-text  mx-5">Contacts</router-link>
          <router-link to="/create" class="nav-text"><i class=" mx-2 bi bi-person-plus-fill"></i>Add Contact</router-link>
        </div>
    </nav>
    <router-view></router-view>
  </div>
</div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
.wrapper{
  width: 60%;
  margin: auto;
}

.contact-book {
  font-size: 2rem;
  font-family: 'Anton', cursive;
  color:#FFBA57;
  text-decoration: none;
}

.contact-book:hover{
  color:#ffddad;
}

.title{
  font-size: 2rem;
  font-family: 'Karla', sans-serif;
}

.nav-text {
  font-family: 'Karla', sans-serif;
  text-decoration: none;
  color: black;
}

.nav-text:hover{
  color: #FFBA57;
}

</style>