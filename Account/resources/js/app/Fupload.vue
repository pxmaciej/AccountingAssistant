<template>
<div id="wrapper">
    <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
        <div id="content" class="mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Prześlij Dokumenty</h6>
                        </div>
                        <div class="card-body">
                            <formFile v-if="user" v-bind:user="user"></formFile>
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
import formFile from './components/formFile.vue';
import navbar from './components/navbar.vue';

export default {
    name: "Fupload",
    components: {
         formFile,
         navbar,
    },
    data(){
        return{
            user: localStorage.getItem('id')||'',
            success : false,
        }
    },
    mounted(){

    },
};
</script>
