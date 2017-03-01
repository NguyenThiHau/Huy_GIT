<a href="http://localhost/Php_MVC/?controller=post">Back to list</a>
<br/><br/>
<form action="http://localhost/Php_MVC/?controller=post&method=edit" method="post">
    Content: <input type="text" name="content_new" value="<?php echo $item['Content']; ?>"/><br/>
    <input type="submit" name="btnEdit" value="Edit">
</form>


