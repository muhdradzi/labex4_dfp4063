<html>

<head>
    <title>Radzi LabEx4</title>
</head>

<body>
    <h2>Terminology</h2>

    <?php
    if (isset($_GET['add'])) {
    ?>
    <form action="save.php" method="post">
        <fieldset>
            <legend>Add New Terms</legend>
            <table border="0">
                <tr>
                    <th>Terms </th>
                    <td><input type="text" name="terms"></td>
                </tr>
                <tr>
                    <th>Description </th>
                    <td><textarea id="description" name="Description"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="save" value="Save"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
    }
    ?>
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