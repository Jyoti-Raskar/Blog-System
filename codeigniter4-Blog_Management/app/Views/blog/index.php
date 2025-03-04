<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($blogs as $blog): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?= base_url('uploads/' . $blog['image']) ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blog['title'] ?></h5>
                            <p class="card-text"><?= $blog['short_content'] ?></p>
                            <p><small class="text-muted">By <?= $blog['author'] ?></small></p>
                            <a href="<?= site_url('blog/' . $blog['id']) ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>