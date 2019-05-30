

<?php include '/../siglas.php';?>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Ci Recebida'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('CiRecebida', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('numero', array('label' => 'Número','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div id="entrada" class="form-group">
						<div class='input-group date'>
							<?php echo $this->Form->input('data_entrada', array(
								'dateFormat' => 'DMY',
								'id' => 'datepicker', 
								'class'=>'form-control', 
								'type' => 'text')); ?>
							
						</div>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('assunto', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('procedencia', array('required','empty'=>'::Selecione::', 'options' => $siglas,'label' => 'procedência','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('assessore_id', array('label' => 'Assessor','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('observacao', array('label' => 'Observação','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<!--<div class="form-group">
						<?php echo $this->Form->input('digitalizacao', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Gravar Alteração', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->