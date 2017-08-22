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
                    <?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $adres->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $adres->id)]
                    )
                ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', 'Adress'), ['action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="adress col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Edit Adres' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($adres) ?>
                    <fieldset>
                        <?php
                            echo $this->Form->input('user_id', [
                                'value' => $Auth->user('id')
                            ]);
                            echo $this->Form->input('nome_endereco', [
                                'type'=>'text'    
                            ]);
                            echo $this->Form->input('cep', [
                                'type'=>'text'    
                            ]);
                            echo $this->Form->input('rua', [
                                'type'=>'text'    
                            ]);
                            echo $this->Form->input('numero', [
                                'type'=>'text'    
                            ]);
                            echo $this->Form->input('bairro', [
                                'type'=>'text'    
                            ]);
                            echo $this->Form->input('cidade', [
                                'type'=>'text'    
                            ]);
                            echo $this->Form->input('uf', [
                                'type'=>'text'    
                            ]);
                            echo $this->Form->input('ibge', [
                                'type'=>'text'    
                            ]);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
