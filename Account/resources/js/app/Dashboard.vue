<template>
<div>
    <div v-if="loading">

    </div>
    <div id="wrapper" v-else>
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3">{{user.name}}<span></span></div>
                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <router-link to="/dashboard"><li class="nav-item"><a class="nav-link active" href="/dashboard"><i class="fas fa-tachometer-alt"></i><span>Główna</span></a></li></router-link>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profil</span></a></li>
                    <li class="nav-item"><router-link to =""><i class="fas fa-table"></i><span>Pliki</span></router-link></li>
                    <li class="nav-item"><a class="nav-link" @click="logout"><i class="far fa-user-circle"></i><span>Wyloguj</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>

        <div class="d-flex flex-column " id="content-wrapper">
            <div id="content" class="mt-3">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Earnings (annual)</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>$215,000</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Tasks</span></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>50%</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Pending Requests</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>18</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 mb-4">
                            <!--       <chartErning :chartData="ernings" :options="options"></chartErning> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Dodaj Przychody</h6>
                                </div>
                                <div class="card-body">
                                    <formErning></formErning>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Dodaj Płatności</h6>
                                </div>
                                <div class="card-body">
                                    <formPayment></formPayment>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Dodaj Wydatek</h6>
                                </div>
                                <div class="card-body">
                                    <formExpense></formExpense>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Prześlij Dokumenty</h6>
                                </div>
                                <div class="card-body">
                                    <formFile v-bind:user="user.id"></formFile>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Lista Przesłanych Dokumentów</h6>
                                </div>
                                <div class="card-body">
                                    <listFile v-bind:user="user.id"></listFile>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Płatności</h6>
                                </div>
                                <div class="card-body">
                                    <listPayment v-bind:user="user.id"></listPayment>
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
    import moment from 'moment';
    import formFile from './components/formFile.vue';
    import listFile from './components/listFile.vue';
    import listPayment from './components/listPayment.vue';
    import erningsMonthly from './components/erningsMonthly.vue';
    import formErning from './components/formErning.vue';
    import formPayment from './components/formPayment.vue';
    import formExpense from './components/formExpense.vue';
    import chartErning from './components/chartErning.vue';
export default {
    name: "Dashboard",
    components: {
        formFile,
        listFile,
        listPayment,
        erningsMonthly,
        formErning,
        formPayment,
        formExpense,
        chartErning
    },
    data(){
        return{
            loading :true,
            user: [],
            ernings:[],
            options:{
                responsive: true,
                mainteinAspectRactio: false
            }
        }
    },
      created(){
        if(this.$store.state.token !== ''){
            axios.post('api/auth/checkToken', { token : this.$store.state.token} )
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
            axios.post('api/auth/profile', { token : this.$store.state.token} )
            .then( res => {
                this.user = res.data;
                axios.get('api/income/show/'+this.user.id, { token : this.$store.state.token})
            .then(res =>{
                this.ernings = res.data;
            })
            })


        }else{
            this.loading = false;
            this.$router.push('/login');
        }
    },
    methods: {
        logout(){
         axios.post('api/auth/logout', { token : this.$store.state.token })
         .then( res => {
             this.$store.commit('clearToken');
             this.$router.push('/');
         })
        }

    }
}
</script>
