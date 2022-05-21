<template>
    <div v-if="loading">
    </div>
<div v-else>
    <div id="wrapper" class="mt-5 pt-3">
        <navbar></navbar>
        <div class="d-flex flex-column " id="content-wrapper">
            <div id="content" class="mt-5">
                <div class="container-fluid">
            <div class="row">
                <div v-if="loadedChart" class="col-lg-6 col-xl-4">
                    <div class="card shadow mb-4">
                          <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Przychody</h6>
                          </div>
                        <div class="card-body">
                                <chartErning :key="reload" :chartdata="incomeChart" :chartoptions="options" label="Przychody" :chartColors="incomeColors"/>
                        </div>
                    </div>
                </div>
                <div v-if="loadedChart2" class="col-md-6 col-xl-4 mb-4">
                     <div class="card shadow mb-4">
                          <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Wydatki</h6>
                          </div>
                          <div class="card-body">
                                 <chartErning  :chartdata="expenseChart" :chartoptions="options" label="Wydatki" :chartColors="expenseColors"/>
                          </div>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Lista Przesłanych Dokumentów</h6>
                        </div>
                        <div class="card-body">
                            <listFile v-if="user.id" v-bind:user="user.id"></listFile>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Płatności</h6>
                        </div>
                        <div class="card-body">
                            <listPayment v-if="user.id" v-bind:user="user.id"></listPayment>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

</template>
<script>
    import axios from 'axios';
    import formFile from './components/formFile.vue';
    import listFile from './components/listFile.vue';
    import listPayment from './components/listPayment.vue';
    import erningsMonthly from './components/erningsMonthly.vue';
    import chartErning from './components/chartErning.vue';
    import navbar from './components/navbar.vue';

export default {
    name: "Dashboard",
    components: {
        formFile,
        listFile,
        listPayment,
        erningsMonthly,
        chartErning,
        navbar
    },
    data(){
        return{
            loading :false,
            loadedChart: false,
            loadedChart2: false,
            reload: 0,
            user: [],
            incomeChart: [],
            expenseChart: [],
            data: [],
            data2: [],
            options:{
                responsive: true,
                mainteinAspectRactio: false
            },
            incomeColors:{
                borderColor: "#20dbd8",
                pointBorderColor: "#146d80",
                pointBackgroundColor: "#20dbd8",
                backgroundColor: "#1aa1b3"
            },
            expenseColors:{
                borderColor: "#9a2b49",
                pointBorderColor: "#d7444c",
                pointBackgroundColor: "#ff8059",
                backgroundColor: "#d7444c"
            }
        }
    },
    async mounted(){
        if(this.$store.state.token !== ''){
           await axios.post('api/auth/checkToken', { token : this.$store.state.token} )
            .then( res => {
                if(res.data.success){
                    this.loading = false;
                }
            })
            .catch(err => {
                this.loading = false;
                this.$store.commit('clearToken');
                this.$router.push('/login');
            })
           await axios.post('api/auth/profile', { token : this.$store.state.token} )
            .then( res => {
                this.user = res.data;
                this.$store.commit('setUserId', res.data.id);
                this.$store.commit('setUserRole', res.data.role);
                this.$store.commit('setUserData', res.data);
                this.expData();
                this.incomData();

            })
        }else{
            this.loading = false;
            this.$router.push('/login');
        }


    },
    methods: {
         async finished() {
                this.expData();
                this.incomData();
                this.reload += 1;

            },
        logout(){
         axios.post('api/auth/logout', { token : this.$store.state.token })
         .then( res => {
             this.$store.commit('clearToken');
             this.$router.push('/login');
         })
        },
        async expData(){
        await axios.get('api/expense/show/'+this.user.id, { token : this.$store.state.token}).then(res => {
            this.data2 = res.data;
        })
                this.data2.forEach(b => {
                 const EXDATE = b.date;
                 const EXVALUE = b.value;
                 this.expenseChart.push({date:EXDATE, total:EXVALUE});
                 this.loadedChart2 = true;
                });
        },
         async incomData(){
             await axios.get('api/income/show/'+this.user.id, { token : this.$store.state.token}).then(res => {
                 this.data = res.data;
             })
                this.data.forEach(d => {
                 const date = d.date
                 const value = d.value
                 this.incomeChart.push({date, total:value})
                 this.loadedChart = true;
                });
            }
    }
}
</script>
