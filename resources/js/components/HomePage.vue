<template>
    <div class="col-md-7 ">
        <div class="card">
            <div class="card-header">
                <form action="/goto" @submit.prevent="searchBook">
                    <div class="input-group">
                        <input type="search" v-model="query" v-on:input="searchBook" id="search" class="form-control" placeholder="Search for Book Title, Author, Gnre, ISBN Or Published Year/Date" />
                        <button type="submit" style="margin-left:10px;" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div v-if="query" class="card-body">
               
                <ul class="list-group" v-for="q in res" :key="q.id">
                    
                    <li class="list-group-item">
                        <a :href="'book/'+q.id" class="text-decoration-none"><div class="col-md-2 float-left">
                            <img :src="q.image" class="img-fluid  rounded" height="50px">
                        </div>
                        <div class="col-md-10">
                            <h5>{{q.title}}</h5>
                            <small>by {{q.author}}</small>
                        </div></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'search',
    data(){
        return{
            query: '',
            res: ''
        }
    },
    mounted() {
        console.log()
    },
    methods: {
        searchBook(){
            axios
            .get('api/books/search/'+this.query)
            .then(response => (this.res = response.data.books))
        }
    }
}
</script>
