<template>
    <div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Books</h6>
                <div style="float:right">
                    <a href="admin/addbook">
                        <button class="btn btn-primary">Add New Book</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Book Title</th>
                                <th scope="col">Book Description</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th class="col-md-1" scope="col">Image</th>
                                <th scope="col">Book Title</th>
                                <th class="col-md-4" scope="col">Book Description</th>
                                <th scope="col">ISBN</th>
                                <th class="col-md-2" scope="col">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr v-for="book, index in books" :key="book.id" height="80px">
                                <th scope="row">{{ index+1 }}</th>
                                <td><img :src="book.image" :alt="book.title" class="img-fluid d-block rounded" height="50px"></td>
                                <td :title="book.title">{{ book.title.substring(0,15)+".." }}</td>
                                <td>{{ book.description.substring(0,40)+".." }}</td>
                                <td>{{ book.isbn }}</td>
                                <td>
                                    <a :href="'admin/editbook/'+book.id"><button class="btn btn-warning" style="margin-right:10px;">Edit</button></a>
                                    <a :href="'admin/deletebook/'+book.id"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            books: ''
        };
    },
    mounted() {
        // 
        axios
            .get('api/books')
            .then(response => (this.books = response.data.books))
    }


}

</script>