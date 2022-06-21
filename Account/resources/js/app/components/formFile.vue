<template>
<div>
    <div class="alert alert-success" role="alert" v-if="success">Succes</div>
    <p class="alert alert-danger" v-if="errors.length">
            <b>Please correct the following error(s):</b>
            <ul>
                <li v-for="error in errors">{{ error }}</li>
            </ul>
        </p>
<input type="file" @change="onFileSelected" name="file" multiple>
<button type="button" class="btn btn-outline-success" @click="onUpload">Wyślij</button>
</div>



</template>
<script>
   import axios from 'axios';
export default {
    name: "formFile",
    props: ['user'],
    data() {
        return {
            files : [],
            errors: [],
            success : false,
        }
    },
    methods: {
        onFileSelected(event){
            for(let i = 0; i < event.target.files.length; i++){
                this.files.push(event.target.files[i]);
            }

        },
        onUpload(){
            this.success= false;
             this.errors.splice(0);
                let fd = new FormData();
                for(let i = 0; i < this.files.length; i++){
                    let file = this.files[i];
                    fd.append('files['+ i +']', file);
                }
                if(this.files.length > 0){
                fd.append('user', this.user)
                axios.post('api/file/store',fd,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`,"Content-type": "multipart/form-data"} })
                .then(res=>{
                    console.log(res)
                    this.errors.splice(0);
                    this.success = true;
                    this.reset();
                })
                }else{
               this.errors.push('Nie wybrano plików');
            }
        },
        reset(){
            for(let i = 0; i < this.files.length; i++){
                this.files[i] = null
            }
        }
    }

};
</script>
