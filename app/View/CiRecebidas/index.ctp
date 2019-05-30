<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('CI´s Recebidas'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nova CI Recebida'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="CiRecebidas" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('número'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('data_entrada'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('assunto'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('procedência'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('assessor'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('observacão'); ?></th>
							<!--<th class="text-center"><?php echo $this->Paginator->sort('digitalizacao'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>-->
							<th class="text-center"><?php echo __('Ações'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($ciRecebidas as $ciRecebida): ?>
						<tr>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['id']); ?>&nbsp;</td>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['numero']); ?>&nbsp;</td>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['data_entrada']); ?>&nbsp;</td>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['assunto']); ?>&nbsp;</td>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['procedencia']); ?>&nbsp;</td>
							<td class="text-center">
								<?php echo $this->Html->link($ciRecebida['Assessore']['nome'], array('controller' => 'assessores', 'action' => 'view', $ciRecebida['Assessore']['id'])); ?>
							</td>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['observacao']); ?>&nbsp;</td>
							<!--<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['digitalizacao']); ?>&nbsp;</td>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['created']); ?>&nbsp;</td>
							<td class="text-center"><?php echo h($ciRecebida['CiRecebida']['modified']); ?>&nbsp;</td>-->
							<td class="text-center">
								<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $ciRecebida['CiRecebida']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
								<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $ciRecebida['CiRecebida']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
								<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $ciRecebida['CiRecebida']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Remover'), __('Tem certeza que deseja remover # %s?', $ciRecebida['CiRecebida']['id'])); ?>
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
        $("#CiRecebidas").dataTable()({
		//	"bPaginate": false;
		});
    });
</script>
