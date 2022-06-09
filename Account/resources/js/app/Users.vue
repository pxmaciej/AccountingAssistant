<template>
<div id="wrapper" class="mt-5 pt-3">
    <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
        <div id="content" class="mt-5">
            <div class="container-fluid">
                <h3 class="text-dark font-weight-bold mb-4">Panel Administratora</h3>
                <div class="row">
                    <div class="col-md-12 col-xl-8 mb-4">
                         <div class="card shadow mb-4">
                          <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Lista Uzytkowników</h6>
                          </div>
                        <div class="card-body">
                            <listUser></listUser>
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
    import listUser from './components/listUser.vue';
export default {
    name: "AdminPanel",
    components: {
        navbar,
        listUser,
    },
    data(){
        return{
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
