<!DOCTYPE html>
<html>
<head>
    <title><?= $blog['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <img src="<?= base_url('uploads/' . $blog['image']) ?>" class="img-fluid">
                <h1><?= $blog['title'] ?></h1>
                <p><small class="text-muted">By <?= $blog['author'] ?> | <?= $blog['created_at'] ?></small></p>
                <p><?= $blog['content'] ?></p>
            </div>
            <div class="col-md-4">
                <h4>Other Blogs</h4>
                <ul class="list-group">
                    <?php foreach ($otherBlogs as $other): ?>
                        <li class="list-group-item">
                            <a href="<?= site_url('blog/' . $other['id']) ?>"><?= $other['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>