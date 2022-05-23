<template lang="pug">

//- q-parallax(src="home.jpg" style="height:800px;")
.school
  h4(style="display:inline; margin:auto") {{school}}

q-footer.bg-white.text-primary(bordered)
  q-tabs.text-grey(no-caps active-color="primary" indicator-color="transparent" v-model="tab")
    q-tab(to=`/login` name="login" label="Login")
    q-tab(name="signup" label="Signup")
    q-tab(name="reset" label="Reset")

</template>

<style>

</style>

<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios'

const loginImage = ref('home.jpg');
const tab=  ref('images')
const school = ref('')

const getSchool=()=>{
        axios.get('http://localhost:8000/api/schools').then((response)=>{
        school.value = response.data.data[0].schoolName;
        }).catch((e)=>{
          console.log(e);
      })
    }

onMounted(()=>{
  getSchool();
})
</script>
