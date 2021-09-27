<template>
<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
<table class="table" id="dataTable">
     <thead>
         <tr>
             <th scope="col">Nazwa</th>
             <th scope="col">Data</th>
             <th scope="col">Wartość</th>
         </tr>
     </thead>
     <tbody>
         <tr v-for="erning in ernings"  :key="erning.id">
              <td class="text-uppercase">{{erning.name}}</td>
              <td>{{erning.date | dateParse('YYYY.MM.DD') | dateFormat('DD.MM.YYYY')}}</td>
              <td class="font-weight-bold">{{erning.value}}</td>
              <td> <button class="btn btn btn-danger" type="button" @click.prevent="deleteErning(erning.id)" >Usuń</button></td>
         </tr>
     </tbody>

 </table>
</div>



</template>
<script>
import axios from 'axios';

export default {
    name: "listErning",
    props: ['reload'],
    data(){
        return{
            ernings: [],
            user: localStorage.getItem('id')||'',
        }
    },
    mounted(){
        this.getIncome();
    },
    methods: {
        deleteErning(erning_id){

            axios.delete('api/income/destroy/'+erning_id,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res => {
                    console.log(res)
                    this.getIncome();
                })
            .catch(err => {
                console.log(err)
            })
        },
        getIncome(){
            axios.get('api/income/show/'+this.user,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res => {
                    this.ernings = res.data;
                })
                .catch(err => {
                    console.log(err)
                })
        }
    }
};
</script>
<style scoped>
.tablebody{
 margin-top: 10em;
}
</style>
