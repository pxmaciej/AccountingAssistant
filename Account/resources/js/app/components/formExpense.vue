<template>

<form>
    <p v-if="errors.length">
        <b>Please correct the following error(s):</b>
        <ul>
            <li class="text-white" v-for="error in errors">{{ error }}</li>
        </ul>
    </p>
    <div>
    <label class="form-label">Nazwa</label>
    <input type="text" class="form-control" v-model="expense.name">
    </div>
    <div>
     <label class="form-label">Kategoria</label>
    <input type="text" class="form-control" v-model="expense.category">
    </div>
     <div>
    <label class="form-label">Wartość</label>
    <input type="number" class="form-control" v-model="expense.value">
    </div>
     <div>
    <label class="form-label">Data</label>
    <input type="date" class="form-control" v-model="expense.date">
    </div>
    <button class="btn btn-warning mt-3" type="button" @click.prevent="store" >Wyślij</button>
</form>

</template>

<script>
import axios from 'axios';
export default {
    name: "formExpense",
     props: ['user'],
    data(){
        return{
            errors:[],
            expense:{
                user_id: this.user,
                name:'',
                value:'',
                category:'',
                date:'',
            }
        }
    },
    methods:{
        store(){
            this.errors.splice(0);
            if(this.expense.date&&this.expense.name&&this.expense.value&&this.expense.category){
                axios.post('api/expense/store' ,this.expense,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                    .then(res=>{
                        this.$emit('reload', 'true');
                        this.success = res.data;
                        this.errors.splice(0);
                        this.reset();
                    })
            }
            if(!this.expense.date){
                 this.errors.push('Data wymagane');
            }
            if(!this.expense.name){
                 this.errors.push('Nazwa wymagane');
            }
            if(!this.expense.value){
                 this.errors.push('Wartość wymagane');
            }
            if(!this.expense.category){
                 this.errors.push('Kategoria wymagane');
            }

        },
        reset(){
            this.expense.name = '';
            this.expense.value = '';
            this.expense.category = '';
            this.expense.date = '';
        }
    }
};
</script>
