<h1>Listar Contatos</h1>
<br>

<table class='table table-striped'>
    <thead >
        <tr class="table-dark">
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>        
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $posicao => $cadaContato){
                $partes = explode(';', $cadaContato);

                echo '<tr>';
                    echo '<td>' .  $partes[0] . '</td>';

                    echo '<td>' .  $partes[1] . '</td>';

                    echo '<td>' .  $partes[2] . '</td>';

                    echo"<td>
                            <a href='/excluir?id={$posicao}'>Excluir</a> 
                            <a href='/editar?id={$posicao}'>Editar</a> 
                        </td>";
                echo '</tr>';
            }

        ?>
    </tbody>
</table>
