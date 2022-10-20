<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Vasa korpa sadrzi broj proizvoda: </p>
    <a href="?vidi_korpu">Vidi korpu</a>
    <br>

    <title>Katalog proizvoda</title>
    <style>
        table{
             border-collapse:collapse;
        }
        td,th{
            border:1px solid black;
            padding: 15px;
        }

        </style>
    <table border = "1">
        <thead>
            <tr>
                <th>Naziv proizvoda</th>
                <tr>Cena proizvoda</tr>
            </tr>
        </thead>
    <tbody>

        <?php
            foreach($proizvodi as $pr):
        ?>
            
        <tr>
            <td><?php echo $pr['naziv'];?></td>
            <td><?php echo $pr['cena'];?></td>
            <td>
                <form action="" method = "post">
                    <input type="hidden" name = "id" value = <?php echo $pr['id'];?>>
                    <input type="submit" name="submit", value="Kupi" method = "post">
                    
                </form>
            </td>
        <?php endforeach; ?>

        </tr>
        <!-- <tr>
            <td>Mis</td>
            <td>40</td>
            <td>
                <form action="">
                    <input type="submit", name="submit", value="Kupi">
                </form>
            </td>
        </tr>
        <tr>
            <td>Slusalice</td>
            <td>50</td>
            <td>
                <form action="">
                    <input type="submit", name="submit", value="Kupi">
                </form>
            </td> 
        </tr> -->
    </tbody>
    </table>
</body>
</html>