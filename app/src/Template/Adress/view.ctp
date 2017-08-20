<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Adres']), ['action' => 'edit', $adres->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Adres']), ['action' => 'delete', $adres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adres->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Adress']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Adres']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="adress col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($adres->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>User</th>
                        <td><?= $adres->has('user') ? $this->Html->link($adres->user->name, ['controller' => 'Users', 'action' => 'view', $adres->user->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($adres->id) ?></td>
                    </tr>
                                <tr>
                        <th>Numero</th>
                        <td><?= $this->Number->format($adres->numero) ?></td>
                    </tr>
                                                                </table>
                                        <div class="row">
                    <h4>Nome Endereco</h4>
                    <?= $this->Text->autoParagraph(h($adres->nome_endereco)); ?>
                </div>
                            <div class="row">
                    <h4>Cep</h4>
                    <?= $this->Text->autoParagraph(h($adres->cep)); ?>
                </div>
                            <div class="row">
                    <h4>Rua</h4>
                    <?= $this->Text->autoParagraph(h($adres->rua)); ?>
                </div>
                            <div class="row">
                    <h4>Bairro</h4>
                    <?= $this->Text->autoParagraph(h($adres->bairro)); ?>
                </div>
                            <div class="row">
                    <h4>Cidade</h4>
                    <?= $this->Text->autoParagraph(h($adres->cidade)); ?>
                </div>
                            <div class="row">
                    <h4>Uf</h4>
                    <?= $this->Text->autoParagraph(h($adres->uf)); ?>
                </div>
                            <div class="row">
                    <h4>Ibge</h4>
                    <?= $this->Text->autoParagraph(h($adres->ibge)); ?>
                </div>
                                            </div>
    </div>
</div>
