<h3>INDEX ADMIN</h3>
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
                    <?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Categories Products']), ['controller' => 'CategoriesProducts', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', ['Categories Product']), ['controller' => 'CategoriesProducts', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Products']), ['controller' => 'Products', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', ['Product']), ['controller' => 'Products', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Stock']), ['controller' => 'Stock', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', ['Stock']), ['controller' => 'Stock', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Stock In']), ['controller' => 'StockIn', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', ['Stock In']), ['controller' => 'StockIn', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Stock Out']), ['controller' => 'StockOut', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', ['Stock Out']), ['controller' => 'StockOut', 'action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="users col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Users</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <?= $this->Paginator->sort('id') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('name') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('username') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('password') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('email') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('access') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('created') ?>
                            </th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <?= $this->Number->format($user->id) ?>
                            </td>
                            <td>
                                <?= h($user->name) ?>
                            </td>
                            <td>
                                <?= h($user->username) ?>
                            </td>
                            <td>
                                <?= h($user->password) ?>
                            </td>
                            <td>
                                <?= h($user->email) ?>
                            </td>
                            <td>
                                <?= h($user->access) ?>
                            </td>
                            <td>
                                <?= h($user->created) ?>
                            </td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=>'btn btn-default btn-xs']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
                    <p>
                        <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
