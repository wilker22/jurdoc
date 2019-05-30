
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Doc'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $doc['Doc']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Docs" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
							<td>
								<?php echo h($doc['Doc']['id']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Tipo'); ?></strong></td>
							<td>
								<?php echo h($doc['Doc']['tipo']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Número'); ?></strong></td>
							<td>
								<?php echo h($doc['Doc']['numero']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Data Entrada'); ?></strong></td>
							<td>
								<?php echo h($doc['Doc']['data_entrada']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Procedencia'); ?></strong></td>
							<td>
									<?php echo h($doc['Doc']['procedencia']); ?>
									&nbsp;
							</td>
						</tr>
						<tr>
								<td><strong><?php echo __('Data Saida'); ?></strong></td>
								<td>
									<?php echo h($doc['Doc']['data_saida']); ?>
									&nbsp;
								</td>
						</tr>
						<tr>
								<td><strong><?php echo __('Destino'); ?></strong></td>
								<td>
									<?php echo h($doc['Doc']['destino']); ?>
									&nbsp;
								</td>
						</tr>
						<tr>
								<td><strong><?php echo __('Assessore'); ?></strong></td>
								<td>
									<?php echo $this->Html->link($doc['Assessore']['nome'], array('controller' => 'assessores', 'action' => 'view', $doc['Assessore']['id']), array('class' => '')); ?>
									&nbsp;
								</td>
						</tr>
						<tr>
								<td><strong><?php echo __('Despacho'); ?></strong></td>
								<td>
									<?php echo h($doc['Doc']['despacho']); ?>
									&nbsp;
								</td>
						</tr>
						<tr>
								<td><strong><?php echo __('Digitalizacao'); ?></strong></td>
								<td>
									<?php echo h($doc['Doc']['digitalizacao']); ?>
									&nbsp;
								</td>
						</tr>
						<tr>
								<td><strong><?php echo __('Criado'); ?></strong></td>
								<td>
									<?php echo h($this->Time->format('d/m/Y',$doc['Doc']['created'])); ?>
									&nbsp;
								</td>
						</tr>
						<tr>
								<td><strong><?php echo __('Modificado'); ?></strong></td>
								<td>
									<?php echo h($this->Time->format('d/m/Y',$doc['Doc']['modified'])); ?>
									&nbsp;
								</td>
						</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

