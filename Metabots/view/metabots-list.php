<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>Metabots</h2>

    <?php 
        $isAuth = false;
        if(isset($_SESSION['isIngelogd'])){
            $isAuth = $_SESSION['isIngelogd'];
            $naam = $_SESSION['naam'];
        }
        
           
    ?>

    <?php if(!$isAuth){ ?>
        <a href="/index.php?action=loginform">Login</a>
    <?php } else { ?>
        <p>Welkom <?php echo $naam ?>! <a href="/index.php?action=logout">Logout</a></p>
    <?php } ?>

    <p>Hier komt een lijst van metabots!</p>

    <table>
        <?php foreach($metabots as $metabot){ ?>
        <tr>
            <td><?php echo $metabot->name ?></td>
            <td>Leeg</td>
            <td>Leeg</td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>