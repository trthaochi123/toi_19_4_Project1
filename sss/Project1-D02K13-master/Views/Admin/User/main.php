<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<a href="?controller=admin" class="btn btn-info">Trang chủ</a>
<h1 align="center">Danh sách thành viên</h1>
<div class="container">
    <a class="btn btn-success m-3" href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=create">+ Thêm thành viên</a>
    <table class="table text-center">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tài khoản</th>
        <th scope="col">Họ & tên</th>
        <th scope="col" colspan="2">Tác vụ</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $stt = 1;
    foreach($record as $item) {
        ?>
        <tr>
            <th scope="row"><?= $stt ?></th>
            <td><?= $item['username'] ?></td>
            <td><?= $item['fullname'] ?></td>
            <td>
                <a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=edit&id=<?= $item['id'] ?>" class="btn btn-info mr-2">Sửa</a>
                <a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=destroy&id=<?= $item['id'] ?>" class="btn btn-danger mr-2">Xóa</a>
            </td>
        </tr>
        <?php $stt++; } ?>
    </tbody>
</table>
</div>
</body>
</html>