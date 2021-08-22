<template>
<div>
<div v-if="loading">
<div class="spinner-border text-info" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</div>
    <div class="container" v-else>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;/image/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form class="user">
                                            <div class="form-group"> <input class="form-control form-control-user" type="email"  aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" v-model="credentials.email"></div>
                                            <div class="form-group"> <input class="form-control form-control-user" type="password"  placeholder="Password" name="password" v-model="credentials.password"></div>


                                        <button class="btn btn-primary btn-block btn-user" type="button" @click.prevent="login">Login</button>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                                </div>
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
import axios from 'axios';
export default {
    name: "Login",
    data(){
        return {
            credentials : {
                email : '',
                password : '',
            },
            loading : true,
        }
    },
    mounted(){
        if(this.$store.state.token !== ''){
            axios.post('api/auth/checkToken', { token : this.$store.state.token} )
            .then( res => {
                if(res.data.success){
                    this.loading = false;
                    this.$router.push('/dashboard');
                }
            })
            .catch(err => {
                this.loading = false;
                this.$store.commit('clearToken');

            })
        }else{
            this.loading = false;
        }
    },
    methods: {
        login(){
            axios.post('api/auth/login', this.credentials)
            .then(res => {
                this.$store.commit('setToken', res.data.access_token);
                this.$router.push('/dashboard');
                })
            .catch(err => {
                console.log(err.data);
            });
        }
    }
}
</script>
<style scoped>

</style>
