            <select name="mitologia_edit">
            {foreach from=$mitologias item=$mito}    
                <option value="{$mito->id}">{$mito->mitologia}</option>               
            {{/foreach}}
            </select> 
            <input type="submit">
        </form>
        <a href="{BASE_URL}">volver</a>
    </div>
</body>
</html>