
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('CI Recebida'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $ciRecebida['CiRecebida']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="CiRecebidas" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
							<td>
								<?php echo h($ciRecebida['CiRecebida']['id']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>					
							<td><strong><?php echo __('Número'); ?></strong></td>
							<td>
								<?php echo h($ciRecebida['CiRecebida']['numero']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Data Entrada'); ?></strong></td>
							<td>
								<?php echo h($ciRecebida['CiRecebida']['data_entrada']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Assunto'); ?></strong></td>
							<td>
								<?php echo h($ciRecebida['CiRecebida']['assunto']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Procedência'); ?></strong></td>
							<td>
								<?php echo h($ciRecebida['CiRecebida']['procedencia']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Assessor'); ?></strong></td>
							<td>
								<?php echo $this->Html->link($ciRecebida['Assessore']['nome'], array('controller' => 'assessores', 'action' => 'view', $ciRecebida['Assessore']['id']), array('class' => '')); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Observacão'); ?></strong></td>
							<td>
								<?php echo h($ciRecebida['CiRecebida']['observacao']); ?>
								&nbsp;
							</td>
						</tr>
						<!--<tr>		<td><strong><?php echo __('Digitalizacao'); ?></strong></td>
								<td>
									<?php echo h($ciRecebida['CiRecebida']['digitalizacao']); ?>
									&nbsp;
								</td>
						</tr>-->
						<tr>		<td><strong><?php echo __('Criada'); ?></strong></td>
								<td>
									<?php echo h($this->Time->format('d/m/Y',$ciRecebida['CiRecebida']['created'])); ?>
									&nbsp;
								</td>
						</tr><tr>		<td><strong><?php echo __('Modificada'); ?></strong></td>
								<td>
									<?php echo h($this->Time->format('d/m/Y',$ciRecebida['CiRecebida']['modified'])); ?>
									&nbsp;
								</td>
						</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

