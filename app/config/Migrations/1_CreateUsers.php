<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', [
            'limit'=>100,
            'null'=>false
        ]);
        $table->addColumn('username', 'string', [
            'limit'=>100,
            'null'=>false
        ]);
        $table->addColumn('email', 'string', [
            'limit'=>50,
            'null'=>false
        ]);
        $table->addColumn('password', 'string', [
            'limit'=>255,
            'null'=>false
        ]);
        $table->addColumn('role', 'string', [
            'limit'=>20,
            'null'=>true,
            'default'=>'user'
        ]);
        $table->addColumn('status', 'boolean',[
            'default'=>0
        ]);
        $table->addColumn('nome_endereco', 'text', [
            'limit'=>60
        ]);
        $table->addColumn('cep', 'text', [
            'limit'=>9
        ]);
        $table->addColumn('rua', 'text', [
            'limit'=>60
        ]);
        $table->addColumn('numero', 'integer', [
            'limit'=>10
        ]);
        $table->addColumn('bairro', 'text', [
            'limit'=>40
        ]);
        $table->addColumn('cidade', 'text', [
            'limit'=>40
        ]);
        $table->addColumn('uf', 'text', [
            'limit'=>2
        ]);
        $table->addColumn('ibge', 'text', [
            'limit'=>8
        ]);
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->create();
    }
}

/**
bin\cake bake all categories --theme TwitterBootstrap
bin\cake bake all categories_products --theme TwitterBootstrap
bin\cake bake all products --theme TwitterBootstrap
bin\cake bake all stock --theme TwitterBootstrap
bin\cake bake all stock_in --theme TwitterBootstrap
bin\cake bake all stock_out --theme TwitterBootstrap
bin\cake bake all users --theme TwitterBootstrap
*/
