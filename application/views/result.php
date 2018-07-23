<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<section>
<div>
				<div class="container">
					<div class="heading">
						<h2>Resultado</h2>
						<?php 
						shuffle($data);
						//echo '<pre>'. $data;
							if ($data == null) {
								echo "Nenhum resultado encontrado, tente novamente!";
							}
							foreach ($data as $content): ?>
								  <?php //echo "<pre>"; print_r($data); exit; ?>

						<p>Resultado da busca cpf: <?php echo $content->cpf; ?> </p>
					</div>
					<div class="row">
						<tr>
                      <td><input type="text" name="nome" placeholder="<?php echo $content->nome; ?>" value="<?php echo $content->nome; ?>"></td>
                     
                      <td>
            		  	<input type="text" name="cpf" placeholder="<?php echo $content->cpf; ?>" value="<?php echo $content->cpf; ?>"></td>
            		  <td>
            		  	<input type="text" name="rg" placeholder="<?php echo $content->rg; ?>" value="<?php echo $content->rg; ?>"></td>
            		  	
            		  	<td>
            		  	<input type="text" name="dtnasc" placeholder="<?php echo $content->dtnasc; ?>" value="<?php echo $content->dtnasc; ?>"></td>
            		  	<td>
            		  	<input type="text" name="telefone" placeholder="<?php echo $content->telefone; ?>" value="<?php echo $content->telefone; ?>"></td>
                      <td><button class="btn btn-default btn-xs btn-success btn-alterar" value="<?php echo $content->id; ?>">Alterar</td>

                      <td><button class="btn btn-default btn-danger btn-xs btn-deletar" value="<?php echo $content->id; ?>">Excluir</button></td>
                   </tr>
							<?php endforeach ?> 

					</div>
				</div>
			</div>
			</section>

</html>