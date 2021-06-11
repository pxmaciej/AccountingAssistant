<template>
<div>
<form>
    <div>
    <label for="exampleInputEmail1" class="form-label">User_id</label>
    <input type="number" class="form-control"  v-model="payment.user_id">
    </div>
     <div>
    <label for="exampleInputEmail1" class="form-label">Nazwa</label>
    <input type="text" class="form-control" v-model="payment.name">
    </div>
     <div>
    <label for="exampleInputEmail1" class="form-label">Kategoria</label>
    <input type="text" class="form-control" v-model="payment.category">
    </div>
     <div>
    <label for="exampleInputEmail1" class="form-label">Wartość</label>
    <input type="number" class="form-control" v-model="payment.value">
    </div>
     <div>
    <label for="exampleInputEmail1" class="form-label">Termin Płatności</label>
    <input type="date" class="form-control" v-model="payment.deadline">
    </div>

   <input type="checkbox"
      id="checkbox-1"
      v-model="payment.paid"
      name="paid"
      value=true
      unchecked-value=false
    >
     Status Płatnosci
    </input>
    <button class="btn btn-primary mt-1" type="button" @click="store" >Wyślij</button>
</form>
</div>



</template>
<script>
import axios from 'axios';
export default {
    name: "formPayment",
    data(){
        return{
            payment :{
                user_id : '',
                name : '',
                category: '',
                value: '',
                deadline: '',
                paid: ''
            }
        }
    },
    methods:{
        store(){
            axios.post('api/payment/store', this.payment,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
            .then( res=>{
                console.log(res)
            })
        }
    }
};
</script>
