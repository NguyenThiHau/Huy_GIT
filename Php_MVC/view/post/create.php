<a href="http://localhost/Php_MVC/?controller=post">Back to list</a>
<br/><br/>
<form action="http://localhost/Php_MVC/?controller=post&method=add" method="post">
    Content: <input type="text" name="content"/><br/>
    <?php echo $message; ?>
    <input type="submit" name="btnSubmit" value="Save">
</form>
