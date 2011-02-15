<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>everywriter</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type"/>
    <script type="text/javascript" src="./editors/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript">
    </script>

</head>
<body>

<h1>Every Writer</h1>
<form action="./test/form-post-test.php" method="post">
    <label>Title </label><input name="title" type="text"/><br/>
    <textarea class="ckeditor" name="description"></textarea><br/>
    <button name="submit" value="publish">Publish</button><button name="submit" value="draft">Draft</button><br/>
</form>

</body>
</html>
