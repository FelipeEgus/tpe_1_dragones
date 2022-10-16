<div>
    <table>
        <th>mitologias</th>
        <tbody>
            {foreach from=$mitologias item=$mito}
            <tr>  
                <td>{$mito->mitologia}</td>
                <td><a href='editarDatosMitologia/{$mito->id}'>editar</a></td>
                <td><a href='deleteMitologia/{$mito->id}'>borrar</a></td>
            </tr>
            {/foreach}
        </tbody>
    </table>
    <form method="post" action="addMitologia" >
        <input type="text" name="mitologia" placeholder="nueva mitologia" required>
        <input type="submit">      
    </form>
    <a href="{BASE_URL}">volver</a>
</div>