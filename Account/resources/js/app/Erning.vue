<template>
<div id="wrapper" class="mt-5 pt-3">
       <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
            <div id="content" class="mt-5">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Przychód</h3>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Dodaj Przychód</h6>
                        </div>
                        <div class="card-body">
                            <formErning v-if="user.id" v-bind:user="user.id"></formErning>
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
export default {
    name: "Erning",
     components: {
          navbar,
          formErning,
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
