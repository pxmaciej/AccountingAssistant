<template>
<div id="wrapper" class="mt-5 pt-3">
    <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
        <div id="content" class="mt-5">
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Płatności</h3>
                <div class="row">
                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card bg-warning text-white shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Dodaj Płatności</h6>
                            </div>
                            <div class="card-body">
                                <formPayment v-if="user.id" v-bind:user="user.id" v-on:reload="reload++"></formPayment>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-8 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Lista Płatności</h6>
                            </div>
                            <div class="card-body">
                                <listPayment :key="reload" v-bind:user="user.id"></listPayment>
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
   import formPayment from './components/formPayment.vue';
   import listPayment from './components/listPayment.vue';

export default {
    name: "Payment",
     components: {
          navbar,
          formPayment,
          listPayment,
      },
    data(){
        return{
            user:{
             id: localStorage.getItem('id')||'',
            },
            reload: 0,
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
