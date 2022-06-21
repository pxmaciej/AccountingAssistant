<template>
<div id="wrapper" class="mt-5 pt-3">
       <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
            <div id="content" class="mt-5">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profil Urzytkownika</h3>
                    <div class="row mb-3">
                                <div class="col-8">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Użytkownik</p>
                                        </div>
                                        <div class="card-body">
                                             <ul class="list-group list-group-flush">
                                                <li class="list-group-item font-weight-bold">{{user.name}}</li>
                                                <footer class="blockquote-footer">Imie użytkownika</footer>
                                                <li class="list-group-item font-weight-bold">{{user.surname}}</li>
                                                <footer class="blockquote-footer">Nazwisko użytkownika</footer>
                                                <li class="list-group-item font-weight-bold">{{user.country}}</li>
                                                <footer class="blockquote-footer">Kraj prowadzonej działalności</footer>
                                                <li class="list-group-item font-weight-bold">{{user.adress}}</li>
                                                <footer class="blockquote-footer">Adres prowadzonej działalności</footer>
                                                <li class="list-group-item font-weight-bold">{{user.city}}</li>
                                                <footer class="blockquote-footer">Miasto siedziba firmy</footer>
                                                <li class="list-group-item font-weight-bold">{{user.nip}}</li>
                                                <footer class="blockquote-footer">NIP firmy</footer>
                                                <li class="list-group-item font-weight-bold">{{user.company}}</li>
                                                <footer class="blockquote-footer">Nazwa firmy</footer>
                                                <li class="list-group-item font-weight-bold">{{user.login}}</li>
                                                <footer class="blockquote-footer">Login użytkownika</footer>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Ustawienia</p>
                                            <p v-if="response" class="text-success">Success</p>
                                             <p v-if="errors.length">
                                            <b>Please correct the following error(s):</b>
                                            <ul>
                                                <li class="text-danger" v-for="error in errors">{{ error }}</li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div v-if="success" class="alert alert-success" role="alert">
                                                    Zmieniłeś Dane!
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="name"><strong>Imie</strong></label>
                                                            <input class="form-control" type="text" :placeholder='[[ user. name ]]'  name="name" v-model="editeduser.name">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="surname"><strong>Nazwisko</strong></label>
                                                            <input class="form-control" type="text"  :placeholder='[[ user.surname]]' name="surname" v-model="editeduser.surname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="company"><strong>Nazwa Firmy</strong></label>
                                                            <input class="form-control" type="text" :placeholder='[[user.company]]'  name="company" v-model="editeduser.company">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="nip"><strong>NIP</strong></label>
                                                            <input class="form-control" type="integer" id="last_name" :placeholder='[[user.nip]]' name="nip" v-model="editeduser.nip">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="login"><strong>Login</strong></label>
                                                            <input class="form-control" type="text" id="last_name" :placeholder='[[user.login]]'  name="login" v-model="editeduser.login">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="password"><strong>Hasło</strong></label>
                                                            <input class="form-control" type="password" id="last_name"   name="login" v-model="editeduser.password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address"><strong>Adres</strong></label>
                                                    <input class="form-control" type="text" id="address" :placeholder='[[user.adress]]' name="adress" v-model="editeduser.adress">
                                                    </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="city"><strong>Miasto</strong></label>
                                                            <input class="form-control" type="text" id="city" :placeholder='[[user.city]]'  name="city" v-model="editeduser.city">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="country"><strong>Kraj</strong></label>
                                                            <input class="form-control" type="text" id="country" :placeholder="[[user.country]]" name="country" v-model="editeduser.country">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label for="Role" class="form-label">Rola: </label>
                                                        <input type="radio"   id="user" name="user" v-model="editeduser.role" value="user">
                                                        <label for="user">User</label>
                                                        <input type="radio" id="admin" name="admin" v-model="editeduser.role" value="admin">
                                                        <label for="admin">Admin</label>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" @click.prevent="edit">Zapisz Ustawienia</button></div>
                                            </form>
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
       import axios from 'axios';
export default {
    name: "Profile",
      components: {
          navbar
      },
      data(){
          return{
                success: false,
                errors: [],
                user:[],
                editeduser:{
                    user_id: localStorage.getItem('selected')||'',
                    name: '',
                    surname: '',
                    country: '',
                    adress: '',
                    city:'',
                    nip: '',
                    company: '',
                    login:'',
                    password:'',
                    role:'',

                },

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
                this.getProfile();
            }else{
                this.loading = false;
                this.$router.push('/login');
            }
    },
    methods:{
        edit(){
            this.success = false;
            this.errors.splice(0);
            if(this.editeduser.name&&this.editeduser.surname&&this.editeduser.country&&this.editeduser.adress&&this.editeduser.city&&this.editeduser.nip&&this.editeduser.company&&this.editeduser.login&&this.editeduser.password&&this.role){
                 axios.patch('api/auth/update',this.editeduser,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} }).then(res => {
                    this.errors.splice(0);
                    this.getProfile();
                    this.reset();
                    this.success = true;
                 })
            }
            if(!this.editeduser.name){
                this.errors.push('Imie wymagane');
            }
            if(!this.editeduser.surname){
                this.errors.push('Nazwisko wymagane');
            }
            if(!this.editeduser.company){
                this.errors.push('Nazwa Firmy wymagane');
            }
            if(!this.editeduser.adress){
                this.errors.push('Nazwa Firmy wymagane');
            }
            if(!this.editeduser.city){
                this.errors.push('Miasto wymagane');
            }
            if(!this.editeduser.nip){
                this.errors.push('NIP wymagane');
            }
            if(!this.editeduser.country){
                this.errors.push('Kraj wymagane');
            }
            if(!this.editeduser.login){
                this.errors.push('Login wymagane');
            }
            if(!this.editeduser.password){
                this.errors.push('Hasło wymagane');
            }

        },
        async getProfile(){
            await axios.post('api/auth/selectedUser/'+this.editeduser.user_id, { token : this.$store.state.token} )
            .then( res => {
                this.user = res.data;
            })
        },
        reset(){
            this.editeduser.name = '';
            this.editeduser.surname = '';
            this.editeduser.company = '';
            this.editeduser.adress = '';
            this.editeduser.city = '';
            this.editeduser.nip = '';
            this.editeduser.country = '';
            this.editeduser.login = '';
            this.editeduser.password = '';
            this.editeduser.role = '';
        }



    }


}
</script>
