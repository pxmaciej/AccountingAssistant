<template>
<div>
<table class="table table-warning">
     <thead>
         <tr>
             <th scope="col">Nazwa Płatności</th>
             <th scope="col">Termin Płatności</th>
         </tr>
     </thead>
     <tbody>
         <tr v-for="payment of payments" :key="payment.id">
              <td>{{payment.name}}</td>
              <td>{{payment.deadline | dateParse('YYYY.MM.DD') | dateFormat('DD.MM.YYYY')}}</td>
         </tr>


     </tbody>

 </table>
</div>



</template>
<script>
import axios from 'axios';

export default {
    name: "listPayment",
    props: ['user'],
    data(){
        return{
            payments: []
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

    }
};
</script>
