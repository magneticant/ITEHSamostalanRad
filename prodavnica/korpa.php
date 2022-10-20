<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korpa</title>
</head>
<style>
        table{
             border-collapse:collapse;
        }
        td,th{
            border:1px solid black;
            padding: 15px;
        }

</style>

<body>
<table border = "1">
        <thead>
            <tr>
                <th>Naziv proizvoda</th>
                <tr>Cena proizvoda</tr>
            </tr>
        </thead>
    <tbody>
    
    <?php
        foreach($korpa as $korpa_item):
    ?>
        <tr>
            <td><?php echo $korpa_item['naziv'];?></td>
            <td><?php echo $korpa_item['cena'];?></td>
        </tr>
        <?php endforeach; ?>

    </tbody>
    <tfoot>
        <tr>
            <td>Ukupno:</td>
            <td><?php echo $ukupno; ?></td>
        </tr>
    </tfoot>
    </table>

    <form action="" method = "post">
    <p>
        <a href="?">Nastavi sa kupovinom</a>
        <input type="submit" name = "submit" value = "isprazni">
    </p>
    </form>

</body>
</html>