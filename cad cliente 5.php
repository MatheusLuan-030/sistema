<select name="cliente_cli">
    </?php
        require('conexao.php')
        $sql="SELECT cid_cod,cid_nome FROM cidade";
        $result=mysqli_query($db,$sql)or die(mysqli_error()))
        echo"<option value='selecione...'>Selecione...</option>";
        while($dados=mysqli_fetch_array($result))
        echo"<option value='".utf8_encode($dados['cid_cod'])."'>".utf8_encode($dados['cid_nome'])."</option>"
}
?>
</select>
</td>
</tr>
<tr class="linha_botoes">
<td>
    <input class="botoes" type="submit" value="salvar">
    <input class="botoes" type="reset" value="limpar">
</td>
</tr>
</table>
</form>
<script>
    new FormMask(document.queryselect("#rg") "--"
    new FormMask(document.querySelector("#cpf"), "___-_-___", "_"
</script>
</body>
</html>