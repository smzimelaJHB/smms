<template>
  <div class="q-pa-md" v-show="!loadcomplete">
    <div class="q-gutter-md row">
      <q-spinner color="primary" size="3em" :thickness="10"></q-spinner>
    </div>
  </div>
  <button @click="getAll" style="padding: 40px"></button>
  <span v-show="loadcomplete"> {{ rows }} </span>
</template>

<script setup>


import axios from "axios";
import { onMounted, reactive, ref } from "vue";

let loadcomplete = ref(false);
let rows = ref(["old"]);

const columns = reactive([
  {
    label: "Subject Code",
    field: "SubjectCode",
    name: "SubjectCode",
    align: "center",
    headerStyle: { fontSize: "1.5em" },
  },
  {
    label: "Subject Name",
    field: "SubjectName",
    name: "SubjectName",
    align: "center",
    headerStyle: { fontSize: "1.5em" },
  },
]);

let getAll = async () => {
  await axios
    .get("http://localhost:8000/api/subjects")
    .then((response) => {
        response ? (loadcomplete.value = true) : (loadcomplete.value = false);
        rows = response.data.data;
    })
    .catch((e) => {
      console.log(e);
    });
};

onMounted(() => {
  getAll();
});

</script>
