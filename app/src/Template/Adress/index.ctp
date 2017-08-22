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
                    <?= $this->Html->link(__('New {0}', ['Adres']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="adress col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Adress</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <?= $this->Paginator->sort('nome_endereco') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('user_id') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('rua') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('numero') ?>
                            </th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($adress as $adres): ?>
                        <tr>
                            <td>
                                <?= h($adres->nome_endereco) ?>
                            </td>
                            <td>
                                <?= $adres->has('user') ? $this->Html->link($adres->user->name, ['controller' => 'Users', 'action' => 'view', $adres->user->id]) : '' ?>
                            </td>
                            <td>
                                <?= h($adres->rua) ?>
                            </td>
                            <td>
                                <?= $this->Number->format($adres->numero) ?>
                            </td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $adres->id], ['class'=>'btn btn-default btn-xs']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adres->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adres->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
