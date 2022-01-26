<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codeigniter 4</title>
    <link rel="stylesheet" href="/assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?= $this->include('menu'); ?>
    <main class="container">
        <h1>CodeIgniter 4 Demo</h1>
        <?= $this->renderSection('content') ?>
    </main>
    <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>