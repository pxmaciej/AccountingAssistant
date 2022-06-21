<template>
<div id="wrapper" class="mt-5 pt-3">
    <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
        <div id="content" class="mt-5">
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Rejestracja</h3>
                <div class="row">
                    <div class="col-md-12 col-xl-8 mb-4">
                        <div class="card bg-primary text-white shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Rejestruj</h6>
                            </div>
                            <div class="card-body">
                               <formRegister></formRegister>
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
   import formRegister from './components/formRegister.vue'

export default {
    name: "Payment",
     components: {
          navbar,
          formRegister,
      },
    data(){
        return{
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
        }
    }
};
</script>
