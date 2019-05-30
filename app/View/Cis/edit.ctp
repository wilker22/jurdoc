<?php include '/../siglas.php';?>

<!--<script type="text/javascript">

	function show() {
		
		if (document.getElementById('tipo').value == "")  {
			
			document.getElementById('entrada').style.display = 'none';
			document.getElementById('saida').style.display = 'none';
			document.getElementById('procedencia').style.display = 'none';
			document.getElementById('destino').style.display = 'none';

		} else if (document.getElementById('tipo').value == "Recebida")  {
			
			document.getElementById('entrada').style.display = 'block';
			document.getElementById('saida').style.display = 'none';
			document.getElementById('procedencia').style.display = 'block';
			document.getElementById('destino').style.display = 'none';

		} else if (document.getElementById('tipo').value == "Emitida")  {
			document.getElementById('entrada').style.display = 'none';
			document.getElementById('saida').style.display = 'block';
			document.getElementById('procedencia').style.display = 'none';
			document.getElementById('destino').style.display = 'block';

		}

};
	
	  
</script>
-->

<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar CI Emitida'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Ci', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
						<?php echo $this->Form->input('numero', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					

					<div id="saida" class="form-group">
						<div class='input-group date'>
							<?php echo $this->Form->input('data_saida', array(
								'dateFormat' => 'DMY',
								'id' => 'datepicker', 
								'class'=>'form-control', 
								'type' => 'text')); ?>
							
						</div>
					</div>

					
					<div class="form-group">
						<?php echo $this->Form->input('assunto', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					
					<div id="destino" class="form-group">
						<?php echo $this->Form->input('destino', array('empty'=>'::Selecione::', 'options' => $siglas,'class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
						<?php echo $this->Form->input('assessore_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
						<?php echo $this->Form->input('despacho', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
				

					<?php echo $this->Form->submit('Gravar Alteração', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->