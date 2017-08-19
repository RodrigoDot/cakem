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
        $table->addColumn('access', 'string', [
            'limit'=>20,
            'null'=>true,
            'default'=>'user'
        ]);
        $table->addColumn('status', 'boolean', [
            'default'=>0
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
