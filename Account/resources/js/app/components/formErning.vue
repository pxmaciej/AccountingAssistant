<template>
    <form>
        <p v-if="errors.length">
            <b>Please correct the following error(s):</b>
            <ul>
                <li class="text-white" v-for="error in errors">{{ error }}</li>
            </ul>
        </p>
        <div v-if="success" class="alert alert-success" role="alert">
            Dodałeś Przychód!
        </div>
            <label class="form-label">Nazwa</label>
            <input type="text" class="form-control" v-model="income.name">

            <label class="form-label">Wartość</label>
            <input type="number" class="form-control" v-model="income.value">

            <label class="form-label">Data</label>
            <input type="date" class="form-control" v-model="income.date">

            <button class="btn btn-success mt-3" type="button" @click.prevent="store" >Wyślij</button>
    </form>
</template>

<script>
import axios from 'axios';
export default {
    name: "formErning",
    props: ['user'],
    data(){
        return{
            success: false,
            errors:[],
            income:{
                user_id: this.user,
                name:'',
                value:'',
                date:'',
            },
        }
    },
    methods:{
        store(){
            this.success= false;
            this.errors.splice(0);
            if(this.income.name&&this.income.value&&this.income.date){
                axios.post('api/income/store' ,this.income,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                 .then(res=>{
                    this.$emit('reload', 'true');
                    this.errors.splice(0);
                    this.reset();
                    this.success = true;
                    console.log(res);
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
        reset() {
            this.income.name = '';
            this.income.value = '';
            this.income.date = '';
    },
    }
};
</script>
