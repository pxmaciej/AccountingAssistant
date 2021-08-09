<template>

<form>
    <div>
    <label class="form-label">User_id</label>
    <input type="number" class="form-control"  v-model="income.user_id">
    </div>
     <div>
    <label class="form-label">Nazwa</label>
    <input type="text" class="form-control" v-model="income.name">
    </div>
     <div>
    <label class="form-label">Wartość</label>
    <input type="number" class="form-control" v-model="income.value">
    </div>
     <div>
    <label class="form-label">Data</label>
    <input type="date" class="form-control" v-model="income.date">
    </div>
    <button class="btn btn-primary mt-3" type="button" @click.prevent="store" >Wyślij</button>
</form>

</template>

<script>
import axios from 'axios';
export default {
    name: "formErning",
     props: ['user','reload'],
    data(){
        return{
            income:{
                user_id: this.user,
                name:'',
                value:'',
                date:'',
            }
        }
    },
    methods:{
        store(){
            axios.post('api/income/store' ,this.income,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
            .then(res=>{
                this.success = res.data;
                this.ok();
            })

        },
        ok() {
                this.$emit('finished')
            }
    }
};
</script>
