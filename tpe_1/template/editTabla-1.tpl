<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{BASE_URL}">
    <title>Tabla</title>
</head>
<body>
    </div>
        {foreach from=$dragones item=$dragon }
        <form method="POST" action="editarDragon/{$dragon->id}">
                <input type="text" name="raza_edit" placeholder="tipo de dragon" value='{$dragon->nombre_raza}' required>
                <input type="text" name="descrip_edit" placeholder="descripcion" value='{$dragon->descrip}' required>
                <input type="text" name="repre_edit" placeholder="reprecentaciones" value='{$dragon->representaciones}' required>
        {/foreach}

