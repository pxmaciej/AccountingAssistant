<template>
<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
    <label>Filtruj po NIP:</label>
      <input class="form-control" v-model="filters.nip.value"/>
<v-table :data="users"
        :currentPage.sync="currentPage"
        :pageSize="25"
        @totalPagesChanged="totalPages = $event"
        :filters="filters"
        class="table" id="dataTable">
     <thead slot="head">
         <tr>
             <th scope="col">Imię</th>
             <th scope="col">Nazwisko</th>
             <th scope="col">NIP</th>
             <th scope="col">Rola</th>
             <th scope="col">Firma</th>
         </tr>
     </thead>
     <tbody slot="body" slot-scope="{displayData}">
         <tr v-for="users in displayData"  :key="users.id">
              <td>{{users.name}}</td>
              <td>{{users.surname}}</td>
              <td>{{users.nip}}</td>
              <td>{{users.role}}</td>
              <td>{{users.company}}</td>
              <td><button class="btn btn-danger mr-1" type="button" @click="deleteUser(users.id)" >Usuń</button><a href="/selecteduser"><button class="btn btn-primary" type="button" @click="selectedUser(users.id)">Wybierz</button></a><a href="/reset"><button class="btn btn-primary" type="button" @click="selectedUser(users.id)">Profil</button></a></td>
         </tr>
     </tbody>
</v-table>
<smart-pagination
        :currentPage.sync="currentPage"
        :totalPages="totalPages"
      />
</div>



</template>
<script>
import axios from 'axios';

export default {
    name: "listusers",
    data(){
        return{
            users: [],
            filters: {
                nip: { value: '', keys: ['nip'] }
            },
            currentPage: 1,
            totalPages: 0
        }
    },
    mounted(){
        axios.get('api/auth/users/',{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
        .then( res => {
        this.users = res.data;
    })
    .catch(err => {
        console.log(err)
    })
    },
    methods: {
        reloadUser(){
            axios.get('api/auth/users/',{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
            .then( res => {
                this.users = res.data;
                })
            .catch(err => {
                console.log(err)
            })
        },
        deleteUser(id){
               axios.delete('api/auth/destroy/'+id,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res=>{
                     console.log(res)});
                     this.reloadUser()
        },
        selectedUser(id){
            this.$store.commit('setSelected', id);
        }
    }
};
</script>
<style scoped>
.tablebody{
 margin-top: 10em;
}
</style>
