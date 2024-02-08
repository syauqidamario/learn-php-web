<html>
<body>
<h1>$_SERVER</h1>

<table border="1">
    <?php foreach ($_SERVER as $key => $value) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>

<!--$_SERVER is an array of information like HTTP header, path, PHP script locations, etc.-->
<!--It was created when there's a request, so every request will be different-->