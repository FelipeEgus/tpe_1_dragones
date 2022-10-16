
    {if isset($smarty.session.USER_ID)}
        <div class="formAdd">
            <form method="post" action="addDragon" >
                <input type="text" name="raza" placeholder="tipo de dragon" required>
                    <select name="mitologia" >
                    {foreach from=$mitologias item=$mito}    
                        <option value="{$mito->id}">{$mito->mitologia}</option>
                    {/foreach}
                    </select>
                <textarea name="descripcion" cols="50" rows="4" placeholder="descripcion" required></textarea>
                <input type="text" name="repre" placeholder="reprecentaciones" required>
                <input type="submit">      
            </form>
        </div>
        <a href="tablaMitologia">mitologias</a> 
    {/if}
</body>
</html> 