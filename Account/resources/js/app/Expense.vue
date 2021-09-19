<template>
<div id="wrapper" class="mt-5 pt-3">
       <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
            <div id="content" class="mt-5">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Wydatek</h3>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Dodaj Wydatek</h6>
                        </div>
                        <div class="card-body">
                            <formExpense v-if="user.id" v-bind:user="user.id"></formExpense>
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
export default {
    name: "Expense",
     components: {
          navbar,
          formExpense,
      },
      data(){
          return{
            user:{
             id: localStorage.getItem('id')||'',
          },
        }

      },
};
</script>
