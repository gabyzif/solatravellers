<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeOfAccounts Model
 *
 * @method \App\Model\Entity\TypeOfAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypeOfAccount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypeOfAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeOfAccount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeOfAccount|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeOfAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypeOfAccount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeOfAccount findOrCreate($search, callable $callback = null, $options = [])
 */
class TypeOfAccountsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('type_of_accounts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('type')
            ->maxLength('type', 40)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        return $validator;
    }
}
