<template>
<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
 <v-table :data="files"
        :currentPage.sync="currentPage"
        :pageSize="5"
        @totalPagesChanged="totalPages = $event"
        class="table" id="dataTable">>
     <thead slot="head">
         <tr>
             <th scope="col">Nazwa</th>
             <th scope="col">Data przesłania</th>
         </tr>
     </thead>
     <tbody slot="body" slot-scope="{displayData}">
         <tr v-for="file of displayData" :key="file.id">
              <td><a :href="'../storage/'+file.file" download>{{file.file}}</a></td>
              <td>{{file.created_at | dateParse('YYYY.MM.DD') | dateFormat('DD.MM.YYYY')}}</td>
              <td><button type="button" class="btn btn-danger" @click="deleteFile(file.id)">Usuń</button></td>
         </tr>


     </tbody>

 </v-table>
 <smart-pagination
        :currentPage.sync="currentPage"
        :totalPages="totalPages"
      />
</div>



</template>
<script>
import axios from 'axios';
export default {
    name: "listFile",
    props: ['user'],
    data() {
        return{
            files : [],
            currentPage: 1,
            totalPages: 0
        }
    },
   mounted(){

    axios.get('api/file/show/'+this.user,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
    .then( res => {
        this.files = res.data;
    })
    .catch(err => {
        console.log(err)
    })
    },
    methods: {
        getdata(){
        axios.get('api/file/show/'+this.user,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
        .then( res => {
        this.files = res.data;
    })
    .catch(err => {
        console.log(err)
    })
        },
        deleteFile(file_id){
            axios.delete('api/file/destroy/'+file_id,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
             this.getdata();
        }
    }
};
</script>
