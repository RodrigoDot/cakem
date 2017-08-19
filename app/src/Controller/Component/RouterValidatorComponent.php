<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Event\Event;

/**
 * RouterValidator component
 */
class RouterValidatorComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];    
    public $components = ['Auth', 'Flash'];
    
    public function validate() {
        
        $role = $this->Auth->user('role');  
        
        if($role == 'admin') {
            return true;
        } else {
            $this->Auth->redirectUrl(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao tem permissao para acessar essa pagina');
        }
    }
    

    
   
}
