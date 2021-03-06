<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tgroups Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Photos
 * @property |\Cake\ORM\Association\HasMany $Conversations
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

        $this->belongsTo('Photos', [
            'foreignKey' => 'photo_id'
        ]);
        $this->hasMany('Conversations', [
            'foreignKey' => 'tgroup_id'
        ]);

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['photo_id'], 'Photos'));

        return $rules;
    }
}
