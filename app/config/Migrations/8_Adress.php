<?php
use Migrations\AbstractMigration;

class Adress extends AbstractMigration
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
        $table = $this->table('adress');
        $table->addColumn('cep', 'text', [
            'limit'=>9
        ]);
        $table->addColumn('rua', 'text', [
            'limit'=>60
        ]);
        $table->addColumn('bairro', 'text', [
            'limit'=>40
        ]);
        $table->addColumn('cidade', 'text', [
            'limit'=>40
        ]);
        $table->addColumn('uf', 'integer', [
            'limit'=>2
        ]);
        $table->addColumn('ibge', 'text', [
            'limit'=>8
        ]);
        $table->addForeignKey('user_id', 'users', 'id');
        $table->create();
    }
}
