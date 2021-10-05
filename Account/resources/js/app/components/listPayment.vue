<template>
<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
<table class="table" id="dataTable">
     <thead>
         <tr>
             <th scope="col">Nazwa Płatności</th>
             <th scope="col">Termin Płatności</th>
             <th scope="col">Kategoria</th>
             <th scope="col">Wartość</th>
             <th scope="col">Zapłacono</th>
         </tr>
     </thead>
     <tbody>
         <tr v-for="payment in filterItems(payments)"  :key="payment.id">
              <td>{{payment.name}}</td>
              <td class="border border-warning">{{payment.deadline | dateParse('YYYY.MM.DD') | dateFormat('DD.MM.YYYY')}}</td>
              <td>{{payment.category}}</td>
              <td>{{payment.value}}</td>
              <td>{{payment.paid}}</td>
         </tr>


     </tbody>

 </table>
</div>



</template>
<script>
import axios from 'axios';

export default {
    name: "listPayment",
    props: ['reload'],
    data(){
        return{
            payments: [],
            user: localStorage.getItem('id')||''
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
        filterItems: function(payments) {
            return payments.filter(function(payment) {
                return payment.paid == false;
            })
        }
    },
};
</script>
<style scoped>
.tablebody{
 margin-top: 10em;
}
</style>
