<template lang="pug">
.position
  q-form.q-gutter-md(@submit="onSubmit",@reset="onReset")
    q-input(type="email",filled,v-model="email",label="email",lazy-rules:rules="[ val => val && val.length > 0 || 'Please type something']")
    q-input(v-show="my_type",type="password",filled,v-model="password",label="password",hint="password",lazy-rules:rules="[ val => val && val.length > 0 || 'Please type something']")
    q-input(v-show="!my_type",type="text",filled,v-model="password",label="password",hint="password",lazy-rules:rules="[ val => val && val.length > 0 || 'Please type something']")

    q-toggle(v-model="accept2",@click="show_pass",label="show password" color="pink")
    q-toggle(v-model="accept",label="remember me")
    q-btn(color='blue',type="submit",label="Submit")
    q-btn(to='/reset',color='red', @click='onClick', type='submit') Reset

</template>

<style>
  .position{
    display: flex;
    max-width: 100%;
    justify-content: center;
    margin-top: 5%;
  }
  .rst{
    color: blue;
  }

</style>


<script setup>
import { onMounted, ref } from 'vue';

const email = ref("")
const password = ref("")
const accept = ref(false)
const accept2 = ref(false)
const my_type = ref(true)

const show_pass = ()=>{
  my_type.value = !my_type.value
}

onMounted(()=>{

})

</script>
