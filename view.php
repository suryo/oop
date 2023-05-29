<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php

    use Data\Data;

    require_once('Data.php');
    $mmbr = new Data();
    $result = $mmbr->index();
    ?>
    <table class="table" border="1" width="100%" style="background-color: yellow;">
        <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>email</th>
        </tr>
        <?php
        for ($i = 0; $i < count($result); $i++) {
        ?>
            <tr>
                <td>
                    <?php echo ($result[$i]["nama"]); ?>
                </td>
                <td>
                    <?php echo ($result[$i]["alamat"]); ?>
                </td>
                <td>
                    <?php echo ($result[$i]["email"]); ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>