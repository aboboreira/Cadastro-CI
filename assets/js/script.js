$(function() {

	var baseUrl;

	baseUrl = $('#base_url').val();

	$('.btn-alterar').click(function(btn){
		btn.preventDefault();
		

		var id = $(this).val();
		var nome = $(this).closest('tr').find('input[name="nome"]').val();	
		var cpf = $(this).closest('tr').find('input[name="cpf"]').val();	
		var rg = $(this).closest('tr').find('input[name="rg"]').val();
		var telefone = $(this).closest('tr').find('input[name="telefone"]').val();	
		var dtnasc = $(this).closest('tr').find('input[name="dtnasc"]').val();	

		$.post(baseUrl+'report/alterar', { id:id, nome:nome, cpf:cpf, rg:rg, telefone:telefone, dtnasc:dtnasc} , function(){
			$('.alert-save').show().delay(9000).slideUp(500);
			window.location.reload();
		})
	})


	$('.btn-deletar').click(function(btn){
		btn.preventDefault();

	console.log('oi');

		var id = $(this).val();
		console.log(id);
		console.log(baseUrl);
		$.post(baseUrl+'report/deletar', { id: id} , function(){
			$('.alert-delete').show().delay(9000).slideUp(500);
		window.location.reload();

		})
	})

$(document).ready(function($){
  
  //$('#dtnasc').mask("00/00/0000", { placeholder: "00/00/0000"}) ;
  $('#cpf').mask('000.000.000-00', { placeholder: "000.000.000-00"});
  $('#rg').mask('00.000.000-0', { placeholder: "00.000.000-0"});
  $('#telefone').mask('(00) 0000-0000', { placeholder: "(00) 0000-0000"});
   
});
		
		
	
});
