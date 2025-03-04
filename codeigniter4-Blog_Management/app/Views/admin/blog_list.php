<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bolg List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<h2>Blog List</h2>
<a href="<?= site_url('admin/blogs/add') ?>" class="btn btn-primary">Add Blog</a>
<table class="table table-responsive table-bordered mt-3">
    <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Author</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($blogs as $blog): ?>
        <tr>
            <td><?= $blog['title'] ?></td>
            <td class="align-middle">
                <img src="<?= base_url('uploads/' . $blog['image']) ?>" width="100" height="70" alt="Blog Image">
            </td>
            <td><?= $blog['author'] ?></td>
            <td>
                <a href="<?= site_url('admin/blogs/edit/' . $blog['id']) ?>" class="btn btn-warning">Edit</a>
                <a href="<?= site_url('admin/blogs/delete/' . $blog['id']) ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</table>
</div>

</body>
</html>
