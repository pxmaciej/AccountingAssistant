<template>
<div>
<input type="file" @change="onFileSelected" name="file" multiple>
<button type="button" class="btn btn-primary" @click="onUpload">Wyślij</button>
</div>



</template>
<script>
   import axios from 'axios';
export default {
    name: "formFile",
    props: ['user'],
    data() {
        return {
            files : []
        }
    },
    methods: {
        onFileSelected(event){
            for(let i = 0; i < event.target.files.length; i++){
                this.files.push(event.target.files[i]);
            }

        },
        onUpload(){
            let fd = new FormData();
            for(let i = 0; i < this.files.length; i++){
                let file = this.files[i];
                 fd.append('files['+ i +']', file);

            }
             fd.append('user', this.user)
            axios.post('api/file/store',fd,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`,"Content-type": "multipart/form-data"} })
        }
    }

};
</script>
