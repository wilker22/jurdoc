
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">                
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
       
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <?= $this->Html->link('<i class="fa fa-dashboard"></i> <span>Dashboard</span>', '/', array('escape' => false)); ?>
            </li>
            <li>
                    <?= $this->Html->link('<i class="glyphicon glyphicon-book"></i> <span>Processos</span>', '/Processos', array('escape' => false)); ?>
            </li>
            <li>
                    <?= $this->Html->link('<i class="glyphicon glyphicon-file"></i> <span>CI´s Emitidas</span>', '/Cis', array('escape' => false)); ?>
            </li>
            <li>
                    <?= $this->Html->link('<i class="glyphicon glyphicon-file"></i> <span>CI´s Recebidas</span>', '/cirecebidas', array('escape' => false)); ?>
            </li>
            <li>
                    <?= $this->Html->link('<i class="glyphicon glyphicon-paperclip"></i> <span>DOC´s</span>', '/Docs', array('escape' => false)); ?>   
            </li>
            <li>
                    <?= $this->Html->link('<i class="glyphicon glyphicon-user"></i> <span>Assessores</span>', '/Assessores', array('escape' => false)); ?>   
            </li>
            
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>