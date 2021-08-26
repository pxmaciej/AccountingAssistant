<template>
<div id="wrapper" class="mt-5 pt-3">
       <navbar></navbar>
    <div class="d-flex flex-column " id="content-wrapper">
            <div id="content" class="mt-5">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile</h3>
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
                                            <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="username"><strong>Imie</strong></label>
                                                            <input class="form-control" type="text" placeholder="Jan" name="name" v-model="editeduser.name">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="email"><strong>Nazwisko</strong></label>
                                                            <input class="form-control" type="text"  placeholder="Kowalski" name="surname" v-model="editeduser.surname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="email"><strong>Nazwa Firmy</strong></label>
                                                            <input class="form-control" type="text" placeholder="Jan Kowalski Company" name="company" v-model="editeduser.company">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="last_name"><strong>NIP</strong></label>
                                                            <input class="form-control" type="integer" id="last_name" placeholder="99999999999" name="nip" v-model="editeduser.nip">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="last_name"><strong>Login</strong></label>
                                                            <input class="form-control" type="text" id="last_name" placeholder="user" name="login" v-model="editeduser.login">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" @click.prevent="edit">Zapisz Ustawienia</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address"></div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country" placeholder="USA" name="country"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
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
                user: [],
                editeduser:{
                    name:'',
                    surname:'',
                    country:'',
                    adress:'',
                    city:'',
                    nip:'',
                    company:'',
                    login:'',
                    password:'',

                }
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
           await axios.post('api/auth/profile', { token : this.$store.state.token} )
            .then( res => {
                this.user = res.data;
            })
            }else{
            this.loading = false;
            this.$router.push('/login');
            }
    },
    methods:{
        edit(){
            axios.patch('api/auth/update',this.editeduser,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} }).then(res => {
                console.log(res.data);
            })
        }
    }

}
</script>
