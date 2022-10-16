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
    <h1>{$titulo}</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>dragon</th>
                    <th>mitologia</th>
                    <th>descrip</th>
                    <th>representaciones</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$dragones item=$dragon }
                <tr>
                    {if !isset($smarty.session.USER_ID)}
                        <td>{$dragon->nombre_raza}</td>
                        <td>{$dragon->origen_mitologico}</td>
                        <td>{$dragon->descrip}</td>
                        <td>{$dragon->representaciones}</td>
                    {else} 
                        <td>{$dragon->nombre_raza}</td>
                        <td>{$dragon->origen_mitologico}</td>
                        <td>{$dragon->descrip}</td>
                        <td>{$dragon->representaciones}</td>
                        <td><div class="btnEditar"><a href='editarDatosDragon/{$dragon->id}'>editar</a></div></td>
                    {/if}
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    <a href="{BASE_URL}">volver</a>
</body>
</html>