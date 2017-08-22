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
                    <?= $this->Html->link(__('List {0}', ['Adress']), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('New {0}', ['Adress']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Edit {0}', ['Adress']), ['action' => 'edit', $adres->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Delete {0}', ['Adress']), ['action' => 'delete', $adres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adres->id)]) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="adress col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($adres->nome_endereco) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>User</th>
                        <td>
                            <?= $adres->has('user') ? $this->Html->link($adres->user->name, ['controller' => 'Users', 'action' => 'view', $adres->user->id]) : '' ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Rua</th>
                        <td>
                            <?= h($adres->rua) ?>
                        </td>
                    </tr>   
                    <tr>
                        <th>Numero</th>
                        <td>
                            <?= $this->Number->format($adres->numero) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Bairro</th>
                        <td>
                            <?= h($adres->bairro) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Cidade</th>
                        <td>
                            <?= h($adres->cidade) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Uf</th>
                        <td>
                            <?= h($adres->uf) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Cep</th>
                        <td>
                            <?= $this->Number->format($adres->cep) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Ibge</th>
                        <td>
                            <?= $this->Number->format($adres->ibge) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
