<template>
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-left-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col mr-2">
                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Dochód (miesięcznie)</span></div>
                         <div class="text-dark font-weight-bold h5 mb-0"><span>{{income.value}}</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "erningsMonthly",
    props: ['user'],
    data(){
        return{
            income: []
        }
    },
    mounted(){
        axios.get('api/income/show/'+this.user, { headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
        .then(res=>{
            this.income = res.data
        }).catch(err=>{
            console.log(err)
        })

    },
    methods: {

    }
};
</script>
