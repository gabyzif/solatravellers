<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nacionalities Model
 *
 * @method \App\Model\Entity\Nacionality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nacionality newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nacionality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nacionality|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nacionality|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nacionality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nacionality[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nacionality findOrCreate($search, callable $callback = null, $options = [])
 */
class NacionalitiesTable extends Table
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

        $this->setTable('nacionalities');
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
            ->scalar('description')
            ->maxLength('description', 40)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
