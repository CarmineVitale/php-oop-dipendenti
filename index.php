<?php include_once __DIR__ . '/classes/Dirigente.php';
include_once __DIR__ . '/classes/Pulizia.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="app">
    <h1>Boolean S.r.l.</h1>
    <h2>Dirigenza</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Ufficio</th>
            <th>Stipendio</th>
        </tr>
        
           <?php foreach ($org as $item) { ?>
           <tr>
                <td><?php echo $item->nome; ?></td>
                <td><?php echo $item->cognome ; ?></td>
                <td><?php echo $item->ufficio; ?></td>
                <td><?php echo $item->stipendio; ?></td>
            </tr>
           <?php } ?>
        
    </table>

    <h2>Addetti alle pulizie</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Turno</th>
            <th>Attrezzatura</th>
        </tr>
        <?php foreach ($produzione as $item) { ?>
        <tr>
            <td><?php echo $item->nome ?></td>
            <td><?php echo $item->cognome ?></td>
            <td><?php echo $item->orario ?></td>
            <td><?php echo $item->attrezzatura ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>

    
</body>
</html>