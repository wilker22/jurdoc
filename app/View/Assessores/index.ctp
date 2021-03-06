<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Assessores'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Novo Assessor'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Assessores" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
							<th class="text-center"><?php echo $this->Paginator->sort('nome'); ?></th>

							<th class="text-center"><?php echo __('Ações'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($assessores as $assessore): ?>
						<tr>
							<td class="text-center"><?php echo h($assessore['Assessore']['id']); ?>&nbsp;</td>
							<td class="text-center"><?php echo h($assessore['Assessore']['nome']); ?>&nbsp;</td>

							<td class="text-center">
								<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $assessore['Assessore']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
								<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $assessore['Assessore']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
								<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $assessore['Assessore']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'remover'), __('Tem certeza que deseja remover # %s?', $assessore['Assessore']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
										</tbody>
				</table>
			</div><!-- /.table-responsive -->


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
        $("#Assessores").dataTable();
    });
</script>
