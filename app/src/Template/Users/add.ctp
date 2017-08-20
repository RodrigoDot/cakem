<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('List {0}', 'Users'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Categories Products'), ['controller' => 'CategoriesProducts', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Categories Product'), ['controller' => 'CategoriesProducts', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Stock'), ['controller' => 'Stock', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Stock'), ['controller' => 'Stock', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Stock In'), ['controller' => 'StockIn', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Stock In'), ['controller' => 'StockIn', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Stock Out'), ['controller' => 'StockOut', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Stock Out'), ['controller' => 'StockOut', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add User' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <?php
                        echo $this->Form->input('name');
                        echo $this->Form->input('username');
                        echo $this->Form->input('email');
                        echo $this->Form->input('password');
                        echo $this->Form->input('access');
                    ?>
                </fieldset>
                <fieldset id='endereco'> 
                   <?= $this->Form->label('Endereco 1') ?>           
                    <?= $this->Form->control('cep', [
                        'name'=>'cep',
                        'type'=>'text',
                        'id'=>'cep',
                        'value'=>'',
                        'maxlength'=>'9'
                    ]) ?>
                    <?= $this->Form->control('rua', [
                        'name'=>'rua',
                        'type'=>'text',
                        'id'=>'rua'
                    ]) ?>
                    <?= $this->Form->control('numero', [
                        'name'=>'numero',
                        'type'=>'number',
                        'id'=>'numero'
                    ]) ?>
                    <?= $this->Form->control('bairro', [
                        'name'=>'bairo',
                        'type'=>'text',
                        'id'=>'bairro'
                    ]) ?>
                    <?= $this->Form->control('cidade', [
                        'name'=>'cidade',
                        'type'=>'text',
                        'id'=>'cidade'
                    ]) ?>
                    <?= $this->Form->control('uf', [
                        'name'=>'uf',
                        'type'=>'text',
                        'id'=>'uf'
                    ]) ?>
                    <?= $this->Form->control('ibge', [
                        'name'=>'ibge',
                        'type'=>'text',
                        'id'=>'ibge'
                    ]) ?>
                </fieldset>
                <?= $this->Form->control('+ endereco', [
                    'type'=>'button',
                    'label'=>'',
                    'id'=>'newAdress'
                ]) ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>


<!-- original
<fieldset>            
    <form method="get" action=".">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
    </form>
</fieldset>
-->  
