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
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input" v-model="payment.paid"  :checked="aPropFrom"
  @input="$emit('update:aPropFrom', $event.target.checked)">
    <label class="form-check-label"> Status Płatnosci</label>
    </div>
    <button class="btn btn-primary" type="button" @click.prevent="store" >Wyślij</button>
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
