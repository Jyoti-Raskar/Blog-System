<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-center mt-4">Edit Blog</h2>
        <hr>
        <p><a href="<?= site_url('admin/blogs') ?>">Back to Blogs</a></p>

        <form action="<?= site_url('admin/blogs/update/' . $blog['id']) ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col form-group mb-3">
                    <label>Title:</label>
                    <input type="text" name="title" value="<?= $blog['title'] ?>" class="form-control" required>
                </div>
                <div class="col form-group mb-3 ">
                    <label>Short Content:</label>
                    <textarea name="short_content" class="form-control"><?= $blog['short_content'] ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col form-group mb-3">
                    <label>Content:</label>
                    <textarea name="content" class="form-control"><?= $blog['content'] ?></textarea>
                </div>
                <div class="col form-group mb-3">
                    <label>Author:</label>
                    <input type="text" name="author" class="form-control" value="<?= $blog['author'] ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col form-group mb-3">
                    <label>Category:</label>
                    <input type="text" name="category" class="form-control" value="<?= $blog['category'] ?>" required>
                </div>
                <div class="col form-group mb-3 ">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control">
                    <img src="<?= base_url('uploads/' . $blog['image']) ?>" width="100" height="70" alt="Blog Image">
                </div>
            </div>

            <div class="row">
                <div class="col form-group mb-3 ">
                    <label>Meta Title:</label>
                    <input type="text" name="meta_title" class="form-control" value="<?= $blog['meta_title'] ?>">
                </div>
                <div class="col form-group mb-3 ">
                    <label>Meta Keywords:</label>
                    <input type="text" name="meta_keywords" class="form-control" value="<?= $blog['meta_keywords'] ?>">
                </div>
            </div>   
            <div class="form-group mb-3 "> 
                <label>Meta Description:</label>
                <textarea name="meta_description" class="form-control"><?= $blog['meta_description'] ?></textarea>
            </div>    
            <div class="form-group justify-center mt-5">
                <button type="submit">Update Blog</button>
            </div>
        </form>
    </div>
</body>
</html>