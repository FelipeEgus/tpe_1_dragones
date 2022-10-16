<div>
    <table>
        <thead>
            <tr>
                <th>dragon</th>
                <th>mitologia</th>
                <th>representaciones</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$dragones item=$dragon }
            <tr>
                {if !isset($smarty.session.USER_ID)}
                    <td>{$dragon->nombre_raza}</td>
                    <td>{$dragon->origen_mitologico}</td>
                    <td>{$dragon->representaciones}</td>
                    <td><div class="btnVer"><a href="dragon/{$dragon->id}">ver</a></div></td>
                {else} 
                    <td>{$dragon->nombre_raza}</td>
                    <td>{$dragon->origen_mitologico}</td>
                    <td>{$dragon->representaciones}</td>
                    <td><div class="btnVer"><a href="dragon/{$dragon->id}">ver</a></div></td>
                    <td><div class="btnEditar"><a href='editarDatosDragon/{$dragon->id}'>editar</a></div></td>
                    <td><div class="btnEliminar"><a href='deleteDragon/{$dragon->id}'>borrar</a></div></td>
                {/if}
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

