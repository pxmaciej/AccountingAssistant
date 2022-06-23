<template>
<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
<v-table :data="payments"
        :currentPage.sync="currentPage"
        :pageSize="5"
        @totalPagesChanged="totalPages = $event"
        class="table" id="dataTable">
     <thead slot="head">
         <tr>
             <th scope="col">Nazwa Płatności</th>
             <th scope="col" class="bg-warning">Termin Płatności</th>
             <th scope="col">Kategoria</th>
             <th scope="col">Wartość</th>
             <th scope="col">Zapłacono</th>
         </tr>
     </thead>
     <tbody slot="body" slot-scope="{displayData}">
         <tr v-for="payment in displayData"  :key="payment.id">
              <td>{{payment.name}}</td>
              <td class="border bg-warning">{{payment.deadline | dateParse('YYYY.MM.DD') | dateFormat('DD.MM.YYYY')}}</td>
              <td>{{payment.category}}</td>
              <td>{{payment.value}}</td>
              <td><button class="btn btn-danger mt-1" type="button" @click="statusPayment(payment.id)" >Zapłacone</button></td>
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
    name: "listPayment",
    props: {
        user: Number,
        reload: Boolean
        },
    data(){
        return{
            payments: [],
            currentPage: 1,
            totalPages: 0
        }
    },
    mounted(){
        axios.get('api/payment/show/'+this.user,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
        .then( res => {
        this.payments = res.data;
    })
    .catch(err => {
        console.log(err)
    })
    },
    methods: {
        reloadPayment(){
            axios.get('api/payment/show/'+this.user,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
            .then( res => {
                this.payments = res.data;
                })
            .catch(err => {
                console.log(err)
            })
        },
        statusPayment(id){
               axios.delete('api/payment/destroy/'+id,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res=>{
                     console.log(res)});
                     this.reloadPayment()
        }
    }
};
</script>
<style scoped>
.tablebody{
 margin-top: 10em;
}
</style>
