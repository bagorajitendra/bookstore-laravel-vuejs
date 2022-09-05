<template>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <strong>Add New Book</strong>
                    </div>
                    <div class="card-body">
                        <form action="../api/books/store" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title"> Book Title </label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Book Title.." required>
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author" id="author" placeholder="Author" required>
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" rows="3"  required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="number" class="form-control" name="isbn" id="isbn" placeholder="ISBN" required>
                            </div>
                            <div class="form-group">
                                <label for="published">Publish Date</label>
                                <input type="date" class="form-control" name="published" id="published"
                                    placeholder="Publish Date" required>
                            </div>
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" name="publisher" id="publisher" placeholder="Publisher" required>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="image" required>
                                <label class="custom-file-label" for="image">Choose Photo</label>
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
    
    mounted() {
        console.log(bookid)
    }
}


</script>
