<template>
<div>
     <div class="alert alert-success" role="alert" v-if="success">Succes</div>
    <p v-if="errors.length">
        <b>Please correct the following error(s):</b>
        <ul>
            <li class="text-white" v-for="error in errors">{{ error }}</li>
        </ul>
    </p>
<form>
     <div>
    <label for="name" class="form-label">Imię</label>
    <input type="text" class="form-control" v-model="user.name">
    </div>
     <div>
    <label for="surname" class="form-label">Nazwisko</label>
    <input type="text" class="form-control" v-model="user.surname">
    </div>
     <div>
    <label for="country" class="form-label">Kraj</label>
    <input type="text" class="form-control" v-model="user.country">
    </div>
     <div>
    <label for="address" class="form-label">Adres</label>
    <input type="text" class="form-control" v-model="user.adress">
    </div>
    <div>
    <label for="city" class="form-label">Miasto</label>
    <input type="text" class="form-control" v-model="user.city">
    </div>
    <div>
    <label for="company" class="form-label">Firma</label>
    <input type="text" class="form-control" v-model="user.company">
    </div>
    <div>
    <label for="nip" class="form-label">NIP</label>
    <input type="number" class="form-control" v-model="user.nip">
    </div>
    <div>
    <label for="Role" class="form-label">Rola: </label>
    <input type="radio"   id="user" name="user" v-model="user.role" value="user">
    <label for="user">User</label>
    <input type="radio" id="admin" name="admin" v-model="user.role" value="admin">
    <label for="admin">Admin</label>
    </div>
    <div>
    <label for="Login" class="form-label">Login</label>
    <input type="text" class="form-control" v-model="user.login">
    </div>
    <div>
    <label for="password" class="form-label">Hasło</label>
    <input type="password" class="form-control" v-model="user.password">
    </div>
    <div>
    <label for="password_confirmation" class="form-label">Powtórz Hasło</label>
    <input type="password" class="form-control" v-model="user.password_confirmation">
    </div>
    <button class="btn btn-success mt-1" type="button" @click="store" >Wyślij</button>
</form>
</div>



</template>
<script>
import axios from 'axios';
export default {
    name: "formuser",
    data(){
        return{
            errors: [],
            success : false,
            user :{
                name : '',
                surname : '',
                country : '',
                adress : '',
                city : '',
                company : '',
                nip : '',
                role : '',
                login: '',
                password: '',
                password_confirmation: ''

            }
        }
    },
    methods:{
        store(){
            this.errors.splice(0);
            if(this.user.length != 0){
                 axios.post('api/auth/register', this.user,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res=>{
                     this.errors.splice(0);
                     this.reset()
                     this.success = true;
                 })
            }
            if(!this.user.name){
                this.errors.push('Imię wymagane');
            }
            if(!this.user.surname){
                this.errors.push('Nazwisko wymagane');
            }
            if(!this.user.country){
                this.errors.push('Kraj wymagane');
            }
            if(!this.user.adress){
                this.errors.push('Adres wymagane');
            }
            if(!this.user.city){
                this.errors.push('Miasto wymagane');
            }
            if(!this.user.company){
                this.errors.push('Nazwa Firmy wymagane');
            }
            if(!this.user.nip){
                this.errors.push('NIP wymagane');
            }
            if(!this.user.role){
                this.errors.push('Rola wymagane');
            }
            if(!this.user.login){
                this.errors.push('Login wymagane');
            }
            if(!this.user.password){
                this.errors.push('Hasło wymagane');
            }
            if(!this.user.password_confirmation&&this.user.password_confirmation == this.user.password){
                this.errors.push('Hasło musi być identyczne');
            }

        },
        reset(){
            this.user.name = '';
            this.user.surname = '';
            this.user.country = '';
            this.user.adress = '';
            this.user.city = '';
            this.user.company = '';
            this.user.nip = '';
            this.user.role = '';
            this.user.login = '';
            this.user.password = '';
            this.user.password_confirmation = '';
        }
    }
};
</script>
