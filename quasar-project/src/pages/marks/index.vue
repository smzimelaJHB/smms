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
            <q-btn round  color="negative" @click="deleteRow(props.row.id)"  icon="cancel" style="display: inline;"/> <span></span>
                  <!-- Edit Row -->
                  <template style="display: inline">
                    <q-btn dense color="secondary" label="Edit Row" icon="edit" @click="show_dialog = true" no-caps></q-btn>
                    <div class="q-pa-sm q-gutter-sm" >
                      <q-dialog v-model="show_dialog" >
                        <q-card-section style="background-color:white">
                        <q-card-section>
                          <div class="text-h6" style="text-align:center;">Edit item!</div>
                        </q-card-section>
                          <div class="row">
                            <q-input v-model="editedItem.avarage" label="Avarage"></q-input>
                            <q-input v-model="editedItem.status" label="Status"></q-input>
                            <q-input v-model="editedItem.grade" label="Grade"></q-input>
                          </div>
                          <q-card-actions align="right">
                              <q-btn flat label="OK" color="primary" v-close-popup @click="updateRow(props.row.id)" ></q-btn>
                          </q-card-actions>
                        </q-card-section>
                      </q-dialog>
                    </div>
                  </template>
                  <!-- End Edit Row -->
          </q-td>
        </q-tr>
      </template>
    </q-table>
  </div>
</template>

<script setup>
import { defineComponent } from 'vue'
import axios from 'axios'
import { useQuasar } from 'quasar'
import { ref } from 'vue'

const columns = ref([
  { label: 'AVARAGE', field: 'avarage', name: 'avarage', align: 'center' ,headerStyle: {fontSize: '1.5em'}},
  { label: 'STATUS', field: 'status', name: 'status', align: 'center',headerStyle: {fontSize: '1.5em'}},
  { label: 'GRADE', field: 'grade', name: 'grade', align: 'center',headerStyle: {fontSize: '1.5em'}},
  { label: '', field: 'id', name: 'id', align: 'left',headerStyle: {fontSize: '1.5em'}}
])

    const $q = useQuasar();

    const triggerPositive =(msg)=> {
        $q.notify({
          type: 'positive',
          message: msg
        })
      }

    const triggerNegative = () =>{
        $q.notify({
          type: 'negative',
          message: 'Request Failed!'
        })
      }


      const rows = ref([])
      const show_dialog =ref(false)
      const editedIndex =ref(-1)
      const editedItem = ref({
        status: "",
        grade: "",
        avarage: ""
      })

      const defaultItem = ref({
        status: "",
        grade: "",
        avarage: ""
      })

      const getAll = ()=>{
        axios.get('http://localhost:8000/api/marks').then((response)=>{
         rows.value = response.data.data;
        }).catch((e)=>{
          console.log(e);
      })
    }

    const addRow = ()=> {
          axios.post('http://localhost:8000/api/marks',this.editedItem).then((response)=>{
          if(response.statusText === "Created"){
            triggerPositive(response.statusText);
          }else{
            this.triggerNegative();
          }
          getAll();
        }).catch((e)=>{
          console.log(e);
      })
    }
    const deleteRow =(i)=> {
            axios.delete('http://localhost:8000/api/marks/'+i).then((response)=>{
          if(response.statusText === "OK"){
            triggerPositive(response.statusText);
          }else{
             triggerNegative();
          }
           getAll();
        }).catch((e)=>{
          console.log(e);
      })
   }

   const updateRow =(i)=> {
       axios.put('http://localhost:8000/api/marks/'+i,this.editedItem).then((response)=>{
        if(response.statusText === "OK"){
          triggerPositive(response.statusText);
        }else{
           triggerNegative();
        }
         getAll();
      }).catch((e)=>{
        console.log(e);
    })
  }

</script>


