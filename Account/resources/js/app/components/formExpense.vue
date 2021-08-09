<template>

<form>
    <div>
    <label class="form-label">User_id</label>
    <input type="number" class="form-control"  v-model="expense.user_id">
    </div>
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
    <button class="btn btn-primary mt-3" type="button" @click.prevent="store" >Wyślij</button>
</form>

</template>

<script>
import axios from 'axios';
export default {
    name: "formExpense",
     props: ['user'],
    data(){
        return{
            expense:{
                user_id: this.user,
                data:'',
                name:'',
                value:'',
                category:''
            }
        }
    },
    methods:{
        store(){
            axios.post('api/expense/store' ,this.expense,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
            .then(res=>{
                this.success = res.data;
            })
        }
    }
};
</script>
