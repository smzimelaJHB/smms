<template>
      <q-card-section>
          <div class="text-h6">Add new item!</div>
      </q-card-section>
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
      <!-- Add Row -->
      <template v-slot:top>
        <q-btn dense color="secondary" label="Add Row" @click="show_dialog = true" no-caps></q-btn>
        <div class="q-pa-sm q-gutter-sm" >
          <q-dialog v-model="show_dialog" >
            <q-card-section style="background-color:white">
            <q-card-section>
              <div class="text-h6" style="text-align:center;">Add new item!</div>
            </q-card-section>
              <div class="row">
                <q-input v-model="editedItem.avarage" label="Avarage"></q-input>
                <q-input v-model="editedItem.status" label="Status"></q-input>
                <q-input v-model="editedItem.grade" label="Grade"></q-input>
              </div>
              <q-card-actions align="right">
                  <q-btn flat label="OK" color="primary" v-close-popup @click="addRow" ></q-btn>
              </q-card-actions>
            </q-card-section>
          </q-dialog>
        </div>
      </template>
      <!-- End Add Row -->

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
          <q-td key="id" :props="props" style="padding: 0px; width: 40px;">
            <q-btn round to="/edit" color="negative" @click="triggerPositive(),triggerNegative()"  icon="cancel" style="display: inline;"/> <span></span>
            <a v-bind:href="'/#/create/'"><q-btn round color="positive" @click="triggerPositive" icon="edit" style="display: inline; "/></a>
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
  { label: '', field: 'id', name: 'id', align: 'left',headerStyle: {fontSize: '1.5em'}}
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
      columns,
      show_dialog: false,
      editedIndex: -1,
      editedItem: {
        status: "",
        grade: "",
        avarage: ""
      },
      defaultItem: {
        status: "",
        grade: "",
        avarage: ""
      }
      }
  },computed:{

  },methods:{
        getAll(){
        this.$axios.get('http://localhost:8000/api/marks').then((response)=>{
        this.rows = response.data.data;
        }).catch((e)=>{
          console.log(e);
      })
    },
    addRow() {
      if (this.editedIndex > -1) {
        Object.assign(this.data[this.editedIndex], this.editedItem);
      } else {
        this.data.push(this.editedItem);
      }
      this.close()
    }
  },mounted(){

  },created(){
    this.getAll()
  }
  })
</script>


