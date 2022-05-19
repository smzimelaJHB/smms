<template lang="pug">

q-parallax(src="home.jpg" style="height:800px;")

q-footer.bg-white.text-primary(bordered)
  q-tabs.text-grey(no-caps active-color="primary" indicator-color="transparent" v-model="tab")
    q-tab(to=`/login` name="login" label="Login")
    q-tab(name="signup" label="Signup")
    q-tab(name="reset" label="Reset")

</template>

<style>

</style>

<script setup>
import { ref } from 'vue';

const loginImage = ref('home.jpg');
const tab=  ref('images')
// const login= ref(to=`/login`)

</script>
