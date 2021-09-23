<template>
<div>
    <p v-if="errors.length">
        <b>Please correct the following error(s):</b>
        <ul>
            <li class="text-danger" v-for="error in errors">{{ error }}</li>
        </ul>
    </p>
<form>
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

    <button class="btn btn-primary mt-1" type="button" @click="store" >Wyślij</button>
</form>
</div>



</template>
<script>
import axios from 'axios';
export default {
    name: "formPayment",
    props: ['user'],
    data(){
        return{
            errors: [],
            payment :{
                user_id : localStorage.getItem('id')||'',
                name : '',
                category: '',
                value: '',
                deadline: '',
                paid: 0,
            }
        }
    },
    methods:{
        reload() {
            this.$forceUpdate();
         },
        store(){
            this.errors.splice(0);
            if(this.payment.name&&this.payment.category&&this.payment.value&&this.payment.deadline){
                 axios.post('api/payment/store', this.payment,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res=>{
                     console.log(res)
                     this.errors.splice(0);
                 })
            }
            if(!this.payment.name){
                this.errors.push('Nazwa wymagane');
            }
            if(!this.payment.category){
                this.errors.push('Kategoria wymagane');
            }
            if(!this.payment.value){
                this.errors.push('Wartość wymagane');
            }
            if(!this.payment.deadline){
                this.errors.push('Termin Płatności wymagane');
            }

        }
    }
};
</script>
