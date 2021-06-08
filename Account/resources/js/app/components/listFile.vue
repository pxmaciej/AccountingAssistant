<template>
<div>
 <table class="table table-info">
     <thead>
         <tr>
             <th scope="col">Nazwa</th>
             <th scope="col">Data przesłania</th>
         </tr>
     </thead>
     <tbody>
         <tr v-for="file of files" :key="file.id">
              <td><a :href="'../storage/'+file.file" download>{{file.file}}</a></td>
              <td>{{file.created_at | dateParse('YYYY.MM.DD') | dateFormat('DD.MM.YYYY')}}</td>
         </tr>


     </tbody>

 </table>
</div>



</template>
<script>
import axios from 'axios';
export default {
    name: "listFile",
    props: ['user'],
    data() {
        return{
            files : []
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

    }
};
</script>
