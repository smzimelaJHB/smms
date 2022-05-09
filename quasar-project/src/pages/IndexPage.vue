<!-- <style>
  .posi{
    color:black;
    padding: 20px;
    display: flex;
    justify-content: center;
  }
</style> -->

<template>
  <div class="q-pa-md">
    <q-table
      title="MARKS TABLE"
      :rows="rows"
      :columns="columns"
      row-key="name"
      title-class="text-bold text-blue-9"
      table-class="bg-blue-9 text-white"
      table-style="border: 3px solid black;"
      table-header-style="height: 65px;"
      table-header-class="bg-blue-8"
      dense
    >
      <template v-slot:body="props">
        <q-tr :props="props">
          <q-td key="avarage" :props="props">
            <q-badge color="green" style="color:black; padding: 20px; display: flex; justify-content: center;">
              {{ props.row.avarage }}
            </q-badge>
          </q-td>
          <q-td key="status" :props="props">
            <q-badge color="purple" style="color:black; padding: 20px; display: flex; justify-content: center;">
              {{ props.row.status }}
            </q-badge>
          </q-td>
          <q-td key="grade" :props="props">
            <q-badge color="orange" style="color:black; padding: 20px; display: flex; justify-content: center;">
              {{ props.row.grade }}
            </q-badge>
          </q-td>
          <q-td key="grade" :props="props" style="padding: 0px; width: 40px;">
            <q-btn round color="negative" @click="triggerNegative" icon="cancel" style="display: inline;"/> <span></span>
            <q-btn round color="positive" @click="triggerPositive" icon="edit" style="display: inline; "/>
          </q-td>
        </q-tr>
      </template>
    </q-table>
  </div>
</template>

<script>
import { defineComponent } from 'vue'
import { useQuasar } from 'quasar'

const columns = [
  { label: 'AVARAGE', field: 'avarage', name: 'avarage', align: 'center' ,headerStyle: {fontSize: '1.5em'}},
  { label: 'STATUS', field: 'status', name: 'status', align: 'center',headerStyle: {fontSize: '1.5em'}},
  { label: 'GRADE', field: 'grade', name: 'grade', align: 'center',headerStyle: {fontSize: '1.5em'}},
  { label: '', field: 'grade', name: 'grade', align: 'left',headerStyle: {fontSize: '1.5em'}}
]
export default defineComponent({
  name: 'App',
  setup(){
      const $q = useQuasar();
    return {
      triggerPositive () {
        $q.notify({
          type: 'positive',
          message: 'Record Added'
        })
      },

      triggerNegative () {
        $q.notify({
          type: 'negative',
          message: 'Record deleted!'
        })
      },

    }
  },
  data (){
    return{
      rows: [],
      siya: "hi",
      columns
      }
  },computed:{

  },methods:{
        getAll(){
        this.$axios.get('http://localhost:8000/api/marks').then((response)=>{
        this.rows = response.data.data;
        }).catch((e)=>{
          console.log(e);
      })
    }
  },mounted(){

  },created(){
    this.getAll()
  }
  })
</script>


