<style type="text/css">	

</style>

<section class="col-md-12 d-flex"> 
  <div>
    <div>
     <h1>Relatório de Clientes</h1>
   </div>

   <form class="form-horizontal" method="post" action="<?php echo base_url('result'); ?>">
      <div class="col-sm-6 ">
       <input type="text" name="cpf" data-new-placeholder="Digite o cpf" class="form-control col-sm-6  d-inline-block" placeholder="Digite o cpf!">
       <button class="btn btn-primary">busca</button>
     </div>

 </form>

 <div class="alert alert-success alert-save" style="display: none;">Produto atualizado com sucesso.</div>


 <div class="alert alert-danger alert-delete" style="display: none;">Produto excluído  com sucesso.</div>


 <table class="table">

  <tr>
    <td><b>Nome</b></td>
    <td><b>CPF</b></td>
    <td><b>RG</b></td>
    <td><b>Dt Nascimento</b></td>
    <td><b>Telefone</b></td>
    <td><b>Clique e Altere</b></td>
    <td><b>Clique e Exclua</b></td>
  </tr>

  <?php foreach ($data as $content): ?>
   
    <form>
     <tr>
      <td style="display:none;"><?php echo $content->id; ?></td>
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
          </form>


                  <!-- $data = array('$content->id',$content->id'); 

                    <pre><?php print_r($data);  ?></pre>--> 


                  <?php endforeach ?>
                </table>


              </div>
            </section>