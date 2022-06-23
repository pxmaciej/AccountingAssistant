<template>
<div id="wrapper" class="mt-5 pt-3">
    <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
        <div id="content" class="mt-5">
            <div class="container-fluid">
                <h3 class="text-dark font-weight-bold mb-4">Panel Administratora</h3>
                <div class="row">
                    <div class="col-md-8 col-xl-12 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Lista Dokuemntów</h6>
                            </div>
                            <div class="card-body">
                                <listFile v-if="user" v-bind:user="user"></listFile>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xl-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Lista Płatności</h6>
                            </div>
                            <div class="card-body">
                                <listPayment :key="reload" v-bind:user="user"></listPayment>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Dodaj Płatność</h6>
                            </div>
                            <div class="card-body">
                                <formPayment v-if="user" v-bind:user="user" v-on:reload="reload++"></formPayment>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xl-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Lista Przychodów</h6>
                            </div>
                            <div class="card-body">
                                <listErning :key="reload" v-bind:user="user"></listErning>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Dodaj Przychód</h6>
                            </div>
                            <div class="card-body">
                                <formErning v-if="user" v-bind:user="user" v-on:reload="reload++"></formErning>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-4 col-xl-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Lista Wydatków</h6>
                            </div>
                            <div class="card-body">
                                <listExpense :key="reload" v-bind:user="user"></listExpense>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Dodaj Wydatek</h6>
                            </div>
                            <div class="card-body">
                                <formExpense v-if="user" v-bind:user="user" v-on:reload="reload++"></formExpense>
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
    import navbar from './components/navbar.vue';
    import listFile from './components/listFile.vue';
    import listPayment from './components/listPayment.vue';
    import formPayment from './components/formPayment.vue';
    import listErning from './components/listErning.vue';
    import formErning from './components/formErning.vue';
    import formExpense from './components/formExpense.vue';
    import listExpense from './components/listExpense.vue';
export default {
    name: "Dashboard",
    components: {
        navbar,
        listFile,
        listPayment,
        formPayment,
        listErning,
        formErning,
        formExpense,
        listExpense
    },
    data(){
        return{
            user: localStorage.getItem('selected')||'',
            reload: 0,
        }
    },
     async mounted(){
        if(this.$store.state.role !='admin')
        {
                this.loading = false;
                this.$store.commit('clearToken');
                this.$router.push('/login');
        }
     },
     methods: {},
}
</script>
