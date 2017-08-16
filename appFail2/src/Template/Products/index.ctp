<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('New {0}', ['Product']), ['action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Stock']), ['controller' => 'Stock', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['Stock']), ['controller' => 'Stock', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Stock In']), ['controller' => 'StockIn', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['Stock In']), ['controller' => 'StockIn', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Stock Out']), ['controller' => 'StockOut', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['Stock Out']), ['controller' => 'StockOut', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="products col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Products</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('user_id') ?></th>
                                        <th><?= $this->Paginator->sort('title') ?></th>
                                        <th><?= $this->Paginator->sort('price') ?></th>
                                        <th><?= $this->Paginator->sort('cost') ?></th>
                                        <th><?= $this->Paginator->sort('status') ?></th>
                                        <th><?= $this->Paginator->sort('alert_price') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                                        <td><?= $this->Number->format($product->id) ?></td>
                                        <td><?= $product->has('user') ? $this->Html->link($product->user->name, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
                                        <td><?= h($product->title) ?></td>
                                        <td><?= $this->Number->format($product->price) ?></td>
                                        <td><?= $this->Number->format($product->cost) ?></td>
                                        <td><?= $this->Number->format($product->status) ?></td>
                                        <td><?= $this->Number->format($product->alert_price) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class'=>'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                        <?= $this->Paginator->numbers(['escape'=>false]) ?>
                        <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>