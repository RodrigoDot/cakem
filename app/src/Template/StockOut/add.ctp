<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= __('Actions') ?>
                </h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <?= $this->Html->link(__('List {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Products'), ['controller' => 'Products', 'action' => 'index']) ?>
                </li>
                
<?php if($Auth->user('admin')) { ?>                
                <li>
                    <?= $this->Html->link(__('List {0}', 'Stock Out'), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Product'), ['controller' => 'Products', 'action' => 'add']) ?>
                </li>
<?php } ?>
                           
            </ul>
        </div>
    </div>
    <div class="stockOut col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Add Stock Out' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($stockOut) ?>
                    <fieldset>
                        <?php
                            echo $this->Form->input('user_id', ['options' => $users]);
                            echo $this->Form->input('product_id', ['options' => $products]);
                            echo $this->Form->input('quantity');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
