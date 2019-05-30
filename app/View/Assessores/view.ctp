
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Assessor'); ?></h3>
				
			</div>
			
			<div class="box-body table-responsive">
                <table id="Assessores" class="table table-bordered table-striped">
					<tbody>
						
						<tr>		
								<td><strong><?php echo __('Nome'); ?></strong></td>
								<td>
									<?php echo h($assessore['Assessore']['nome']); ?>
									&nbsp;
								</td>
						</tr>
					
					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->


		<div class="box box-primary">
				<div class="box-header">
					
				
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Processos</h3>
					</div>
					<div class="panel-body">
										<!--Panel content-->
										<?php if (!empty($assessore['Processo'])): ?>
										
										<div class="box-body table-responsive">
											<table class="table table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-center"><?php echo __('Id'); ?></th>
														<th class="text-center"><?php echo __('Numero'); ?></th>
														<th class="text-center"><?php echo __('Srd'); ?></th>
														<th class="text-center"><?php echo __('Qtd Volumes'); ?></th>
														<th class="text-center"><?php echo __('Data Entrada'); ?></th>
														<th class="text-center"><?php echo __('Procedencia'); ?></th>
														<th class="text-center"><?php echo __('Assunto'); ?></th>
														<th class="text-center"><?php echo __('Destino'); ?></th>
														<th class="text-center"><?php echo __('Data Saida'); ?></th>
														<th class="text-center"><?php echo __('Assessor'); ?></th>
														<th class="text-center"><?php echo __('Despacho Assessor'); ?></th>
													
													<!--	<th class="text-center"><?php echo __('Ações'); ?></th>-->
													</tr>
												</thead>
												<tbody>
														<?php
															$i = 0;
															foreach ($assessore['Processo'] as $processo): ?>
																<tr>
																	<td class="text-center"><?php echo $processo['id']; ?></td>
																	<td class="text-center"><?php echo $processo['numero']; ?></td>
																	<td class="text-center"><?php echo $processo['srd']; ?></td>
																	<td class="text-center"><?php echo $processo['qtd_volumes']; ?></td>
																	<td class="text-center"><?php echo $this->Time->format("d/m/Y", $processo['data_entrada']); ?></td>
																	<td class="text-center"><?php echo $processo['procedencia']; ?></td>
																	<td class="text-center"><?php echo $processo['assunto']; ?></td>
																	<td class="text-center"><?php echo $processo['destino']; ?></td>
																	<td class="text-center"><?php echo $this->Time->format("d/m/Y", $processo['data_saida']); ?></td>
																	<td class="text-center"><?php echo $processo['assessore_id']; ?></td>
																	<td class="text-center"><?php echo $processo['despacho_assessor']; ?></td>
																	
																<!--	<td class="text-center">
																		<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'processos', 'action' => 'view', $processo['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
																		<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'processos', 'action' => 'edit', $processo['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
																		<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'processos', 'action' => 'delete', $processo['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'remover'), __('Tem certeza que deseja remover # %s?', $processo['id'])); ?>
																	</td>-->
																</tr>
															<?php endforeach; ?>
												</tbody>
											</table><!-- /.table table-striped table-bordered -->
										</div><!-- /.table-responsive -->
										
									<?php endif; ?>

									
									
								</div><!-- /.related -->
					</div>
         		 </div>
				
			
					
			<div class="panel panel-primary">
				<div class="panel-heading">
					  <h3 class="panel-title">CI´s Recebidas</h3>
				 </div>
				  <div class="panel-body">
				  <!--Panel content-->
				<?php if (!empty($assessore['CiRecebida'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="text-center"><?php echo __('Id'); ?></th>
									<th class="text-center"><?php echo __('Numero'); ?></th>
									<th class="text-center"><?php echo __('Data Entrada'); ?></th>
									<th class="text-center"><?php echo __('Assunto'); ?></th>
									<th class="text-center"><?php echo __('Procedencia'); ?></th>
									<th class="text-center"><?php echo __('Assessor'); ?></th>
									<th class="text-center"><?php echo __('Observacao'); ?></th>
								<!--	<th class="text-center"><?php echo __('Ações'); ?></th>-->
								
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($assessore['CiRecebida'] as $ciRecebida): ?>
										<tr>
											<td class="text-center"><?php echo $ciRecebida['id']; ?></td>
											<td class="text-center"><?php echo $ciRecebida['numero']; ?></td>
											<td class="text-center"><?php echo $ciRecebida['data_entrada']; ?></td>
											<td class="text-center"><?php echo $ciRecebida['assunto']; ?></td>
											<td class="text-center"><?php echo $ciRecebida['procedencia']; ?></td>
											<td class="text-center"><?php echo $ciRecebida['assessore_id']; ?></td>
											<td class="text-center"><?php echo $ciRecebida['observacao']; ?></td>
									<!--		<td class="text-center">
												<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'ci_recebidas', 'action' => 'view', $ciRecebida['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
												<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'ci_recebidas', 'action' => 'edit', $ciRecebida['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
												<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'ci_recebidas', 'action' => 'delete', $ciRecebida['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Remover'), __('Tem certeza que deseja remover # %s?', $ciRecebida['id'])); ?>
											</td>-->
										</tr>
									<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->
		</div>
	</div>

	<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">CI´S Emitidas</h3>
            </div>
            <div class="panel-body">
			<?php if (!empty($assessore['Ci'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="text-center"><?php echo __('Id'); ?></th>
									<th class="text-center"><?php echo __('Numero'); ?></th>
									<th class="text-center"><?php echo __('Data Saida'); ?></th>
									<th class="text-center"><?php echo __('Assunto'); ?></th>
									<th class="text-center"><?php echo __('Destino'); ?></th>
									<th class="text-center"><?php echo __('Assessor'); ?></th>
									<th class="text-center"><?php echo __('Despacho'); ?></th>
									
									<!--<th class="text-center"><?php echo __('Ações'); ?></th>-->
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($assessore['Ci'] as $ci): ?>
											<tr>
												<td class="text-center"><?php echo $ci['id']; ?></td>
												<td class="text-center"><?php echo $ci['numero']; ?></td>
												<td class="text-center"><?php echo $ci['data_saida']; ?></td>
												<td class="text-center"><?php echo $ci['assunto']; ?></td>
												<td class="text-center"><?php echo $ci['destino']; ?></td>
												<td class="text-center"><?php echo $ci['assessore_id']; ?></td>
												<td class="text-center"><?php echo $ci['despacho']; ?></td>
												
											<!--	<td class="text-center">
													<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'cis', 'action' => 'view', $ci['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
													<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'cis', 'action' => 'edit', $ci['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
													<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'cis', 'action' => 'delete', $ci['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'remover'), __('Tem certeza que deseja remover # %s?', $ci['id'])); ?>
												</td>-->
											</tr>
										<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>
            </div>
          </div>
					
						

					
			<div class="panel panel-primary">
			<div class="panel-heading">
				  <h3 class="panel-title">DOC´S</h3>
			 </div>
			  <div class="panel-body">
			  <!--Panel content-->
				<?php if (!empty($assessore['Doc'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="text-center"><?php echo __('Id'); ?></th>
									<th class="text-center"><?php echo __('Tipo'); ?></th>
									<th class="text-center"><?php echo __('Data Entrada'); ?></th>
									<th class="text-center"><?php echo __('Procedencia'); ?></th>
									<th class="text-center"><?php echo __('Data Saida'); ?></th>
									<th class="text-center"><?php echo __('Destino'); ?></th>
									<th class="text-center"><?php echo __('Assessor'); ?></th>
									<th class="text-center"><?php echo __('Despacho'); ?></th>
									
							<!--		<th class="text-center"><?php echo __('Ações'); ?></th>-->
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($assessore['Doc'] as $doc): ?>
											<tr>
												<td class="text-center"><?php echo $doc['id']; ?></td>
												<td class="text-center"><?php echo $doc['tipo']; ?></td>
												<td class="text-center"><?php echo $this->Time->format("d/m/Y",$doc['data_entrada']); ?></td>
												<td class="text-center"><?php echo $doc['procedencia']; ?></td>
												<td class="text-center"><?php echo $this->Time->format("d/m/Y",$doc['data_saida']); ?></td>
												<td class="text-center"><?php echo $doc['destino']; ?></td>
												<td class="text-center"><?php echo $doc['assessore_id']; ?></td>
												<td class="text-center"><?php echo $doc['despacho']; ?></td>
												
											<!--	<td class="text-center">
													<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'docs', 'action' => 'view', $doc['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
													<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'docs', 'action' => 'edit', $doc['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
													<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'docs', 'action' => 'delete', $doc['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Remover'), __('Tem certeza que deseja remover # %s?', $doc['id'])); ?>
												</td>-->
											</tr>
										<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->
			</div>
			</div>

					
			

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

