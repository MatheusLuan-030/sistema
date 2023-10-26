</div>
<header>
<form action="cad_cliente_envio.php" method="POST'>
<table>
<tr>
<td>
        <h2 class="subtitulo"> Nome:</h2>
        <input type="text" name="nome_cli" size="60">
</td>
</tr>
<tr>
<td>
       <h2 class="subtitulo"> RG:</h2>
       <input type="text" name="rg_cli" id="rg" size="15">
</td>
</tr>
<tr>
        <h2 class="subtitulo"> CPF:</h2>
        <input type="text" name="cpf_cli" id="cpf" size="15">
</td>
</tr>
<tr>
<td>
        <h2 class="subtitulo"> Data de nascimento:</h2>
        <input type="date" name="data_nas_cli">
</td>
</td>
</tr>
<tr>
<tr>
<td>
    <h2 class="subtitulo"> Bairro:</h2>
    <input type="text" name="bairro_cli" size="60">
</td>
</tr>
<td>
    <h2 class="subtitulo"> Rua:</h2>
    <input type="text" name="rua_cli" id="moeda" size=60>
</td>
</tr>
<tr>
    <h2 class="subtitulo"> Número:</h2>
    <input type="text" name="num_cli" size="20">
</td>
</tr>



<tr>
<td><h2 class="subtitulo" style="display:inline;"> Estado:</h2>
<select name="estado_cli"
<?php  
        require('conexao.php')
        $sql="SELECT est_cod, est_nome FROM estado"
        $result=mysqli_query($db,$sql)or die(mysqli_error());
        echo"<option value="selecione...'>Selecione...</option>";
        while($dados=mysqli_fetch_array($result))(
        echo"<option value='".utf8=encode($dados['est_cod'])."'>".utf8_encode($dados['cid_nome']."</option>"
        }
        </select>
</td>
</tr>
<tr class="linha_botoes">
<td>

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
<div>
</header>
<form action="cad_cliente_envio.php" method="POST">
<table>
<tr>
<td class="linha_titulo"><div><hl>Cadastro de clientes</hl></div></td>
</tr>
<tr>
<td>
        <h2 class="subtitulo"> Nome:</h2>
        <input type="text" name="nome_cli" size="60">
</td>
</tr>
<tr>
<td>
        <h2 class="subtitulo">RG:</h2>
        <input type="text" name="rg_cli" id="rg" size="15">
</td>
</tr>
<tr>
<td>
        <h2 class="subtitulo">CPF:</h2>
        <input type="text" name="cpf_cli" id="cpf" size="15">
</td>
</tr>
<tr>
<td>
        <h2 class="subtitulo"> Data de nascimento:</h2>
        <input type="data" name="data_nas_cli">
</td>
