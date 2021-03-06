<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $stockIn->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $stockIn->id)]
                    )
                ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Stock In'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="stockIn col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Stock In' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($stockIn) ?>
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
