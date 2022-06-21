<template>
<div id="wrapper" class="mt-5 pt-3">
       <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
            <div id="content" class="mt-5">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Wydatek</h3>
                    <div class="row">
                        <div class="col-md-3 col-xl-4 mb-4">
                            <div class="card bg-danger text-white shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Dodaj Wydatek</h6>
                                </div>
                                <div class="card-body">
                                    <formExpense v-if="user.id" v-bind:user="user.id" v-on:reload="reload++"></formExpense>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-8 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Lista Wydatków</h6>
                                </div>
                                <div class="card-body">
                                    <listExpense :key="reload" v-bind:user="user.id"></listExpense>
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
   import formExpense from './components/formExpense.vue';
   import listExpense from './components/listExpense.vue';

export default {
    name: "Expense",
     components: {
          navbar,
          formExpense,
          listExpense,
      },
      data(){
          return{
            reload: 0,
            user:{
             id: localStorage.getItem('id')||'',
          },
        }
      },
 async mounted(){
    }
};
</script>
