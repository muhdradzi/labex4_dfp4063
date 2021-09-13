<html>

<head>
    <title>Radzi LabEx4</title>
</head>

<body>
    <h2>Terminology</h2>

    <?php
    if (isset($_GET['add']))
    ?>
    <fieldset>
    <legend>Add New Terms</legend>
    <form action="" method="post">
        <table border="0">
            <tr>
                <th>Terms </th>
                <td><input type="text" name="terms"></td>
            </tr>
            <tr>
                <th>Description </th>
                <td><textarea name="description" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Save"></td>
            </tr>
        </table>
    </form>
    </fieldset>
    <br>
    <table border="1">
        <tr>
            <th>Terms</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>[<a href="index.php?add=new">Add New</a>]</td>
            <td></td>
        </tr>
    </table>
</body>

</html>