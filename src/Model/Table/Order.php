// src/Model/Table/ArticlesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class order extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    
}