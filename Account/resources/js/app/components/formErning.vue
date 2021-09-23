<template>
 <div class="card shadow mb-3">
    <div class="card-header py-3">
        <p class="text-primary m-0 font-weight-bold">Ustawienia</p>
            <p v-if="errors.length">
            <b>Please correct the following error(s):</b>
            <ul>
                <li class="text-danger" v-for="error in errors">{{ error }}</li>
            </ul>
        </p>
    </div>
    <div class="card-body">
        <form>
            <div class="form-group">
            <label class="form-label">Nazwa</label>
            <input type="text" class="form-control" v-model="income.name">
            </div>


        <label class="form-label">Wartość</label>
        <input type="number" class="form-control" v-model="income.value">


        <label class="form-label">Data</label>
        <input type="date" class="form-control" v-model="income.date">

        <button class="btn btn-primary mt-3" type="button" @click.prevent="store" >Wyślij</button>

        </form>
    </div>
</div>
</template>

<script>
import axios from 'axios';
export default {
    name: "formErning",
    data(){
        return{
               errors:[],
            income:{
                user_id: localStorage.getItem('id')||'',
                name:'',
                value:'',
                date,
            }
        }
    },
    methods:{
        store(){
            this.errors.splice(0);
            if(this.income.name&&this.income.value&&this.income.date){
                axios.post('api/income/store' ,this.income,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                 .then(res=>{
                    this.success = res.data;
                    this.errors.splice(0);
                })
            }
            if(!this.income.name){
                this.errors.push('Nazwa wymagane');
            }
            if(!this.income.value){
                this.errors.push('Wartość wymagane');
            }
            if(!this.income.date){
                this.errors.push('Data wymagane');
            }

        },
    }
};
</script>
