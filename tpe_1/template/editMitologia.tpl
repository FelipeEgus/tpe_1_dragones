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

{foreach from=$mitologias item=$mito} 
<form method="post" action="editarMitologia/{$mito->id}" >
    <input type="text" name="mitologias_edit" placeholder="mitologia" value="{$mito->mitologia}" required>
    <input type="submit">      
</form>
{{/foreach}}