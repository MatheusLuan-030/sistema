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
        $result