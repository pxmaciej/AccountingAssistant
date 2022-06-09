<template>
<div id="wrapper" class="mt-5 pt-3">
    <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
        <div id="content" class="mt-5">
            <div class="container-fluid">
                <h3 class="text-dark font-weight-bold mb-4">Przychód</h3>
                <div class="row">
                    <div class="col-md-3 col-xl-4 mb-4">
                        <div class="card text-white bg-primary shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Dodaj Przychód</h6>
                            </div>
                            <div class="card-body">
                                <formErning v-if="user.id" v-bind:user="user.id" v-on:reload="reload++"></formErning>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-8 mb-4">
                         <div class="card shadow mb-4">
                          <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Lista Twoich Przychodów</h6>
                          </div>
                        <div class="card-body">
                            <listErning :key="reload" v-bind:user="user.id"></listErning>
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
   import navbar from './components/navbar.vue';
   import formErning from './components/formErning.vue';
   import listErning from './components/listErning.vue';

export default {
    name: "Erning",
    components:{
        navbar,
        formErning,
        listErning,
    },
    data(){
        return{
            reload: 0,
            user:{
                id: localStorage.getItem('id')||'',
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
        }else{
            this.$router.push('/login');
        }


    }
};
</script>
