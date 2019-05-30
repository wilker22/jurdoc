<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('CI´s Emitidas'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nova CI'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Cis" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('número'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('data_saida'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('assunto'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('destino'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('assessor'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('observação'); ?></th>
							<!--<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>-->
							<th class="text-center"><?php echo __('Ações'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($cis as $ci): ?>
								<tr>
									<td class="text-center"><?php echo h($ci['Ci']['id']); ?>&nbsp;</td>
									<td class="text-center"><?php echo h($ci['Ci']['numero']); ?>&nbsp;</td>
									<td class="text-center"><?php echo h($this->Time->format("d/m/Y", $ci['Ci']['data_saida'])); ?>&nbsp;</td>
									<td class="text-center"><?php echo h($ci['Ci']['assunto']); ?>&nbsp;</td>
									<td class="text-center"><?php echo h($ci['Ci']['destino']); ?>&nbsp;</td>
									<td class="text-center">
										<?php echo $this->Html->link($ci['Assessore']['nome'], array('controller' => 'assessores', 'action' => 'view', $ci['Assessore']['id'])); ?>
									</td>
									<td class="text-center"><?php echo h($ci['Ci']['despacho']); ?>&nbsp;</td>
									<!--<td class="text-center"><?php echo h($ci['Ci']['digitalizacao']); ?>&nbsp;</td>
									<td class="text-center"><?php echo h($ci['Ci']['created']); ?>&nbsp;</td>
									<td class="text-center"><?php echo h($ci['Ci']['modified']); ?>&nbsp;</td>-->
									<td class="text-center">
										<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $ci['Ci']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
										<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $ci['Ci']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
										<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $ci['Ci']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'remover'), __('Tem certeza que deseja remover # %s?', $ci['Ci']['id'])); ?>
									</td>
								</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->

			<nav aria-label="Paginação">
						<p>
							<?php
							echo $this->Paginator->counter(array(
								'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, inciando no registro {:start}, finalizando em {:end}')
							));
							?>	
						</p>
							<div class="paging">
								<ul class="pagination">		
									
										
										<li class="page-item"><?php echo $this->Paginator->first(__('Primera') . ' >', array(), null, array('class' => 'first disabled'));?></li>	
										<li class="page-item"><?php echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));?></li>
										<li class="page-item"><?php echo $this->Paginator->numbers(array('separator' => ''));?></li>
										<li class="page-item"><?php echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));?></li>
										<li class="page-item"><?php echo $this->Paginator->last(__('Última') . ' >', array(), null, array('class' => 'last disabled'));?></li>
									
								</ul>
							</div>
				</nav>


		</div><!-- /.index -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#Cis").dataTable()({
	//		"bPaginate": false;
		});
    });
</script>
