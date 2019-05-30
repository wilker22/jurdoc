
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Processo'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $processo['Processo']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Processos" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Número'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['numero']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Srd'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['srd']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Qtd Volumes'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['qtd_volumes']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Data Entrada'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['data_entrada']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Procedência'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['procedencia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Assunto'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['assunto']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Destino'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['destino']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Data Saída'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['data_saida']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Assessor'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($processo['Assessore']['nome'], array('controller' => 'assessores', 'action' => 'view', $processo['Assessore']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Despacho Assessor'); ?></strong></td>
		<td>
			<?php echo h($processo['Processo']['despacho_assessor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Criado'); ?></strong></td>
		<td>
			<?php echo h($this->Time->format('d/m/Y',$processo['Processo']['created'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($this->Time->format('d/m/Y', $processo['Processo']['modified'])); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

