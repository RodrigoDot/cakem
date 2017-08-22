<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= __('Actions') ?>
                </h3>
            </div>
            <?php if($Auth->user('admin')) { ?>

            <ul class="nav nav-pills nav-stacked">
                <li>
                    <?= $this->Html->link(__('List {0}', 'Users'), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Adress'), ['controller' => 'Adress', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Adres'), ['controller' => 'Adress', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Categories'), ['controller' => 'Categories', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Category'), ['controller' => 'Categories', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Categories Products'), ['controller' => 'CategoriesProducts', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Categories Product'), ['controller' => 'CategoriesProducts', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Products'), ['controller' => 'Products', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Product'), ['controller' => 'Products', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Stock'), ['controller' => 'Stock', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Stock'), ['controller' => 'Stock', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Stock In'), ['controller' => 'StockIn', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Stock In'), ['controller' => 'StockIn', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Stock Out'), ['controller' => 'StockOut', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', 'Stock Out'), ['controller' => 'StockOut', 'action' => 'add']) ?>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Add User' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($user) ?>
                    <fieldset>
                        <?php
                                    echo $this->Form->input('name');
                                    echo $this->Form->input('username');
                                    echo $this->Form->input('email');
                                    echo $this->Form->input('password');
                                    echo $this->Form->input('role');
                                    echo $this->Form->hidden('status');
                                ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
