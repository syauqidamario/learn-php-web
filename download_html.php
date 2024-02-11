<?php
if(isset($_GET['key']) && $_GET['key'] == 'secret'){
    header('Content-Disposition: attachment; filename="father_kv_3.png"');
    header('Content-Type:image/jpg');
    readfile(__DIR__ . '/upload/file/father_kv_3.png');
    exit();
}
else{
    echo "Invalid Link";
    exit();
}
?>

<html>
<head>
    <title>Download in HTML</title>
</head>
<body>
<h1>Download HTML</h1>
</body>
</html>
