
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('CI Emitida'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $ci['Ci']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Cis" class="table table-bordered table-striped">
					<tbody>
						<tr>		
							<td><strong><?php echo __('Id'); ?></strong></td>
							<td>
								<?php echo h($ci['Ci']['id']); ?>
								&nbsp;
							</td>
						</tr>
						
						<tr>		<td><strong><?php echo __('Número'); ?></strong></td>
							<td>
								<?php echo h($ci['Ci']['numero']); ?>
								&nbsp;
							</td>
						</tr>
						
						<tr>		
							<td><strong><?php echo __('Data Saida'); ?></strong></td>
							<td>
								<?php echo h($this->Time->format('d/m/Y',$ci['Ci']['data_saida'])); ?>
								&nbsp;
							</td>
						</tr>
						
						<tr>		
							<td><strong><?php echo __('Assunto'); ?></strong></td>
							<td>
								<?php echo h($ci['Ci']['assunto']); ?>
								&nbsp;
							</td>
						</tr>
						
						<tr>		
							<td><strong><?php echo __('Destino'); ?></strong></td>
							<td>
								<?php echo h($ci['Ci']['destino']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Assessor'); ?></strong></td>
							<td>
								<?php echo $this->Html->link($ci['Assessore']['nome'], array('controller' => 'assessores', 'action' => 'view', $ci['Assessore']['id']), array('class' => '')); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Observação'); ?></strong></td>
							<td>
								<?php echo h($ci['Ci']['despacho']); ?>
								&nbsp;
							</td>
						</tr>
						</tr>
						<tr>
							<td><strong><?php echo __('Criada'); ?></strong></td>
							<td>
								<?php echo h($this->Time->format('d/m/Y',$ci['Ci']['created'])); ?>
								&nbsp;
							</td>
						</tr>
						<tr>		
							<td><strong><?php echo __('Modificada'); ?></strong></td>
							<td>
									<?php echo h($this->Time->format('d/m/Y',$ci['Ci']['modified'])); ?>
								&nbsp;
							</td>

						</tr>					
					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

