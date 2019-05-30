<?php include '/../siglas.php';?>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Novo Processo'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Processo', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('numero', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('srd', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('qtd_volumes', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<!--<?php echo $this->Form->input('data_entrada', array('class' => 'form-control')); ?>-->
						<div class='input-group date'>
							<?php echo $this->Form->input('data_entrada', array(
								'dateFormat' => 'DMY',
								'id' => 'datepicker', 
								'class'=>'form-control', 
								'type' => 'text')); ?>
							
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('procedencia', array('empty'=>'::Selecione::', 'options' => $siglas,'class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('assunto', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('destino', array('empty'=>'::Selecione::', 'options' => $siglas,'class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<!-- <?php echo $this->Form->input('data_saida', array('class' => 'form-control')); ?> -->
						<div class='input-group date'>
							<?php echo $this->Form->input('data_saida', array(
								'dateFormat' => 'DMY',
								'id' => 'datepicker', 
								'class'=>'form-control', 
								'type' => 'text')); 
							?>
							
						</div>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('assessore_id', array('label' => 'Assessor','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('despacho_assessor', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->