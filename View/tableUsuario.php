    <?php

include_once 'Model/Usuario.php';

$usuario = new Usuario();

$query = $usuario->getAllUser();

foreach ($query as $dados) {

    $id = $dados['id'];
    $nome = $dados['nome'];
    $email = $dados['email'];
    $endereco = $dados['endereco'];
    $telefone = $dados['telefone'];

    echo "
    <tr>
			<td>
				<span class='custom-checkbox'>
					 <input type='checkbox' id='checkbox1' name='options[]' value='1'>
						<label for='checkbox1'></label>
						  </span>
                </td>
                  <td> $nome </td>
                  <td>$email</td>
						      <td>$endereco</td>
                  <td>$telefone</td>
                    <td>
<a href='' class='edit' data-toggle='modal' id='$id'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
<a href='' class='delete' data-toggle='modal' id='$id' ><i class='material-icons' data-toggle='tooltip' title='Delete' id='teste' value='2'>&#xE872;</i></a>
                    </td>
                    </tr>
";
}
?>