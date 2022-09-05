<template>
    <!-- <h1>{{book.title}}</h1> -->
   
        <div class="col-md-4" style="margin-top:15px;">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <img :src="book.image" class="img-fluid d-block rounded">
                </div>
            </div>
        </div>
        <div class="col-md-8 float-right" style="margin-top:25px;">
            <h2>{{book.title}}</h2>
            <p>By: {{book.author}}</p>
            <p>Genre: {{book.genre}}, ISBN: {{book.isbn}}, Publish Date: {{book.published}}</p>
            <p>Publisher: {{book.publisher}}</p>
            <h5>Description:</h5>
            <p>{{book.description}}</p>

        </div>
        <div class="col-md-4">
            <button class="btn btn-success color-white">Add To Cart</button>
        </div>
    
</template>

<script>

    export default {
        props: ['book'], 
        mounted() {
            console.log('App Running..')
        }
    }    
</script>