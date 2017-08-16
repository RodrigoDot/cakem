<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <?php
            echo $this->Html->image(
                //'TwitterBootstrap.user2-160x160.jpg',
                ['class'=>'img-circle',  "alt"=>"User Image"]
            );
        ?>
</div>
<div class="pull-left info">
    <p>
        <?= $Auth->user('name') ?>
    </p>
    <!-- Status -->
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>

<!-- search form (Optional) -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
</form>
<!-- /.search form -->

<?php
    if($Auth->user('access') == 'user') {
    echo '<!--';
?>     
  
  <ul class="sidebar-menu">
    <li class="header">Navegação</li>
    
    <li class="active"><a href="/users"><i class="fa fa-link"></i> <span><?php echo __('Users'); ?>
    </span>
    </a>
    </li>
    <li class="active"><a href="/categories"><i class="fa fa-link"></i> <span><?php echo __('Categories'); ?></span></a></li>
    <li class="active"><a href="/stock-in"><i class="fa fa-link"></i> <span><?php echo __('Stock In'); ?></span></a></li>
    <li class="active"><a href="/stock-out"><i class="fa fa-link"></i> <span><?php echo __('Stock Out'); ?></span></a></li>
    <li class="active"><a href="/products"><i class="fa fa-link"></i> <span><?php echo __('Products'); ?></span></a></li>
    <ul class="treeview-menu">
        <li><a href="#">Link in level 2</a></li>
        <li><a href="#">Link in level 2</a></li>
    </ul>
    </li>
    </ul>
<?php    
    echo '-->';    
    }
?>    
    <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
