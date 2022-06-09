<template>
<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
<v-table :data="expenses"
        :currentPage.sync="currentPage"
        :pageSize="5"
        @totalPagesChanged="totalPages = $event"
        class="table" id="dataTable">
    <thead slot="head">
        <tr>
            <th scope="col">Nazwa</th>
            <th scope="col">Data</th>
            <th scope="col">Wartość</th>
            <th scope="col">Kategoria</th>
            <th scope="col">Opcje</th>
        </tr>
    </thead>
    <tbody slot="body" slot-scope="{displayData}">
        <tr v-for="expense in displayData"  :key="expense.id">
            <td class="text-uppercase">{{expense.name}}</td>
            <td>{{expense.date | dateParse('YYYY.MM.DD') | dateFormat('DD.MM.YYYY')}}</td>
            <td class="font-weight-bold">{{expense.value}}</td>
            <td>{{expense.category}}</td>
            <td> <button class="btn btn btn-danger" type="button" @click.prevent="deleteexpense(expense.id)" >Usuń</button></td>
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
    name: "listExpense",
    props: {
        user: Number,
        reload: Boolean
        },
    data(){
        return{
            expenses: [],
            currentPage: 1,
            totalPages: 0
        }
    },
    mounted(){
        this.getIncome();
    },
    methods: {
        deleteexpense(expense_id){

            axios.delete('api/expense/destroy/'+expense_id,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res => {
                    console.log(res)
                    this.getIncome();
                })
            .catch(err => {
                console.log(err)
            })
        },
        getIncome(){
            axios.get('api/expense/show/'+this.user,{ headers: {"Authorization" : `Bearer ${this.$store.state.token}`} })
                .then( res => {
                    this.expenses = res.data;
                })
                .catch(err => {
                    console.log(err)
                })
        }
    }
};
</script>
<style scoped>
.tablebody{
 margin-top: 10em;
}
</style>
