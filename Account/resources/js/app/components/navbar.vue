<template>
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" id="navtoggler">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3">Witamy<span></span></div>
                </a>
                <hr class="sidebar-divider my-0" />
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="/dashboard"><i class="fas fa-tachometer-alt"></i><span>Główna</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/profile"><i class="fas fa-user"></i><span>Profil</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/erning"><i class="fa fa-money"></i><span>Dodaj Przychód</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/expense"><i class="fa fa-calculator"></i><span>Dodaj Wydatek</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/payment"><i class="fa fa-calendar-check-o"></i><span>Dodaj Płatność</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/F-upload"><i class="fa fa-cloud-upload"></i><span>Wyślij Pliki</span></a></li>
                    <li  v-if="role==admin" class="nav-item"><a class="nav-link" href="/users"><i class="fa fa-users"></i><span>Admin Panel</span></a></li>
                    <li  v-if="role==admin" class="nav-item"><a class="nav-link" href="/register"><i class="fa fa-users"></i><span>Rejestracja</span></a></li>
                    <li class="nav-item"><a class="nav-link" @click="logout"><i class="far fa-user-circle"></i><span>Wyloguj</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" @click="toggle" id="sidebarToggle" type="button"><i class="fa fa-angle-left" style="color:white"></i></button></div>
                </div>
        </nav>   
</template>
<script>

export default {
    name: "Navbar",
    data() {
      return{
          user:[],
          role:localStorage.getItem('role')||'',
          admin:'admin',
          loading: true,
      };
    },
  async  mounted(){
      if(this.$store.state.token !== ''){
           await axios.post('api/auth/checkToken', { token : this.$store.state.token} )
            .then( res => {
                if(res.data.success){
        
                }
            })
            .catch(err => {
                this.$store.commit('clearToken');
                this.$router.push('/login');
            })
        }else{
            this.loading = false;
            this.$router.push('/login');
        }
    },

    methods: {
        logout(){
         axios.post('api/auth/logout', { token : this.$store.state.token })
         .then( res => {
             this.$store.commit('clearToken');
             this.$router.push('/login');
            localStorage.clear();
             this.load = false;
         })
        },
        toggle(){
                $("body").toggleClass("sidebar-toggled");
                $(".sidebar").toggleClass("toggled");
                if ($(".sidebar").hasClass("toggled")) {
                $('.sidebar .collapse').collapse('hide');
                };
        }

    }
};
</script>
