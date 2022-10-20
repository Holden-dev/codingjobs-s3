<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include some files</title>
</head>

<body>

    <?php
    // Include a file -> warning if problem
    // Require a file -> stop the script if problem
    require_once 'nav.html'; ?>

    <h2>Include page</h2>

    <?php
    $var3 = 'Noel';

    require_once 'variables.php';
    echo $var1;
    ?>

    <?php include_once 'footer.html'; ?>
</body>

</html>