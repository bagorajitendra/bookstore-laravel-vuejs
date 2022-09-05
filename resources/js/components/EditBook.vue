<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Book</strong>
                    </div>
                    <div class="card-body">
                        <form action="../../api/books/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" :value="book.id">
                            <div class="form-group">
                                <label for="title"> Book Title </label>
                                <input type="text" class="form-control" :value="book.title" id="title" name="title"
                                    placeholder="Book Title.." required>
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" :value="book.author" name="author" id="author" placeholder="Author" required>
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control" :value="book.genre" name="genre" id="genre" placeholder="Genre" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" :value="book.description" rows="3"  required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="number" class="form-control" :value="book.isbn" name="isbn" id="isbn" placeholder="ISBN" required>
                            </div>
                            <div class="form-group">
                                <label for="published">Publish Date</label>
                                <input type="date" class="form-control" :value="book.published" name="published" id="published"
                                    placeholder="Publish Date" required>
                            </div>
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" :value="book.publisher" name="publisher" id="publisher" placeholder="Publisher" required>
                            </div>
                            <img :src="book.image" class="img-fluid d-block rounded col-md-2" style="margin-bottom:10px">
                            <div class="custom-file">
                                <input type="hidden" :value="book.image" name="old_image">
                                <input type="file" class="custom-file-input"  name="image" >
                                <label class="custom-file-label" for="image">Choose Photo (Optional)</label>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['book'], 
    mounted() {
        console.log('Mounted')
    }
}


</script>
