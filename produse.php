<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?
$caract = 4;


$produse = [
    [
        "id" => 504,
        "Denumirea" => "Lapte",
        "Categorie" => "Produse Alimentate/Lactate",
        "Pret" => 9,
        "Cantitate" => 9,
    ],
    [
        "id" => 510,
        "Denumirea" => "Unt",
        "Categorie" => "Produse Alimentate/Lactate",
        "Pret" => 25.50,
        "Cantitate" => 500,

    ],
    [
        "id" => 511,
        "Denumirea" => "Chefir",
        "Categorie" => "Produse Alimentate/Lactate",
        "Pret" => 6,
    ],
    [
        "id" => 755,
        "Denumirea" => "Carnati",
        "Categorie" => "Produse Alimentate/Carne",
        "Pret" => 245,
    ]
];

?>
<table border="1" cellpadding="2" cellspacing="2">
    <thead>
    <tr>
        <th>Nr.ord</th>
        <th>Denumire</th>
        <th>ID</th>
        <th>Pret</th>
        <th>Categorie</th>
        <th>Total</th>
<!--        --><?// for ($d = 1; $d <= $caract; $d++){?>
<!--            <th width="24"></th>-->
<!--        --><?// }?>

    </tr>
    </thead>
    <tbody>
    <? foreach($produse as $key => $producte) {?>
        <tr>
            <th><?=$key + 1;?></th>
            <th><?=$producte['Denumirea'];?></th>
            <td> <?=$producte['id'];?></td>
            <td> <?=$producte['Pret'];?></td>
            <td> <?=$producte['Categorie'];?></td>
            <td> <?=$producte['Cantitate'];?></td>
        </tr>
    <? }?>
    </tbody>
</table>
</body>
</html>