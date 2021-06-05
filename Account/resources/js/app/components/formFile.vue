<template>
<div>
<input type="file" @change="onFileSelected" name="file">
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
            file
        }
    },
    methods: {
        onFileSelected(event){
            this.file = event.target.files[0]
        },
        onUpload(){
            const fd = new FormData();
            console.log(this.file)
            fd.append('file', this.file, this.file.name)
            fd.append('user', this.user)
            axios.post('api/file/store',fd,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`,"Content-type": "multipart/form-data"} })
        }
    }

};
</script>
