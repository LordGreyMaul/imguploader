<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<div id="container">
    <p>Congratulations. Your Photo Uploaded Successfully</p>

    <dl>
        <dt>File Name</dt>
        <dd><?= $uploadInfo['file_name']; ?></dd>
        <dt>File Size</dt>
        <dd><?= $uploadInfo['file_size']; ?></dd>
        <dt>File Extension</dt>
        <dd><?= $uploadInfo['file_ext']; ?></dd>
    </dl>
    <p>full size Image</p>
    <img alt="<?= $uploadInfo['file_name']; ?>" src="<?= base_url() . 'uploads/' . $uploadInfo['file_name']; ?>">
    <p>Thumbnail</p>
    <img alt="<?= $uploadInfo['file_name']; ?>" src="<?= base_url() . 'uploads/' . $thumbnail_name; ?>">
</div>
</body>
</html>