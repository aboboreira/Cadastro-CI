
<div>

<section class="col-md-12">
 <?php if(isset($mensagens)) echo $mensagens; ?>  
  



<form class="col-md-6 d-inline-block" method="post" action="<?php echo base_url('Register/saveCustumer'); ?>">
  <div class="form-group col-md-12">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome"  placeholder="Nome">
  </div>

  <div class="form-group col-md-12">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf">
  </div>

  <div class="form-group col-md-12">
    <label for="RG">RG</label>
    <input type="text" class="form-control" id="rg"  name="rg">
  </div>
  
  <div class="form-group col-md-12">
    <label for="dtnasc">Data Nascimento</label>
    <input type="date" class="form-control" id="dtnasc" name="dtnasc">
  </div>

   <div class="form-group col-md-12">
    <label for="telefone">Tefelone</label>
    <input type="tel" class="form-control" id="telefone" name="telefone">
  </div>
  
<!--   <input type="hidden" class="form-control" id="id" name="id"> -->
  <button type="submit" class="btn btn-primary">Prosseguir</button>
</form>
 
</section>

</div>


