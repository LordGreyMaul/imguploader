<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    </head>
<body>
    <div id="container">
        <h2>Upload an Image</h2>

        <?php echo form_open_multipart('upload/doUpload'); ?>
        <input type="file" name="userfile" />
        <p><input type="submit" value="Submit" name="submit"></p>
        <?php echo form_close(); ?>
    </div>
</body>
</html>