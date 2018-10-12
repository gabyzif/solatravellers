<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tgroups Model
 *
 * @method \App\Model\Entity\Tgroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tgroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tgroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tgroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tgroup|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tgroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tgroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tgroup findOrCreate($search, callable $callback = null, $options = [])
 */
class TgroupsTable extends Table
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

        $this->setTable('tgroups');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('UserGroups', [
            'foreignKey' => 'group_id'
        ]);

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
            ->scalar('name')
            ->maxLength('name', 40)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 500)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
