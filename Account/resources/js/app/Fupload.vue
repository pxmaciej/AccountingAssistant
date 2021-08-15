<template>
<div>
    <div id="wrapper">
         <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3">{{user.name}}<span></span></div>
                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <router-link to="/dashboard"><li class="nav-item"><a class="nav-link active" href="/dashboard"><i class="fas fa-tachometer-alt"></i><span>Główna</span></a></li></router-link>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profil</span></a></li>
                   <li class="nav-item"><a class="nav-link" href="/F-upload"><i class="fas fa-table"></i><span>Wyślij Pliki</span></a></li>
                    <li class="nav-item"><a class="nav-link" @click="logout"><i class="far fa-user-circle"></i><span>Wyloguj</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
            </nav>
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
</div>
</template>
<script>
import formFile from './components/formFile.vue';
export default {
    name: "Fupload",
    components: {
         formFile,
    },
    data(){
        return{
            user: localStorage.getItem('id')||'',
            success : false,
        }
    },
    mounted(){

    },
    methods: {
        logout(){
         axios.post('api/auth/logout', { token : this.$store.state.token })
         .then( res => {
             this.$store.commit('clearToken');
             this.$router.push('/login');
         })
        }
    }
};
</script>
