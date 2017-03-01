<h2>List post</h2>
<a href="http://localhost/Php_MVC/?controller=post&method=add">Create</a>
<form method="post">
    Search ID: <input type="text" name="search_id"/><br/>
    <input type="submit" name="btnSearch" value="Search">
    <input onclick="location.href='http://localhost/Php_MVC/?controller=post';" type="submit" name="btnReset"
           value="Reset">
</form>
<table border="1">
    <thead>
    <tr>
        <th>No.</th>
        <th>ID</th>
        <th>Content</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($listPost)): ?>
        <?php foreach ($listPost as $index => $item): ?>
            <tr>
                <td><?php echo($index + 1) ?> </td>
                <td><?php echo $item['Id']; ?></td>
                <td><?php echo $item['Content']; ?></td>
                <form action="http://localhost/Php_MVC/?controller=post" method="post">
                    <td><input type="button"
                               onclick="location.href='http://localhost/Php_MVC/?controller=post&method=edit&id=<?php echo $item['Id']; ?>';"
                               value="Edit"/>
                        <input type="hidden" name="id" value="<?php echo $item['Id']; ?>"/> |
                        <input type="submit" name="btnDelete" value="Delete" onclick="return confirm('Are you sure ?')">
                    </td>
                </form>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
