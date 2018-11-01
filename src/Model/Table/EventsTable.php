<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\BelongsTo $Photos
 * @property |\Cake\ORM\Association\BelongsTo $City
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Photos', [
            'foreignKey' => 'photo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('City', [
            'foreignKey' => 'city_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_events'
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
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('long_description')
            ->maxLength('long_description', 10000)
            ->requirePresence('long_description', 'create')
            ->notEmpty('long_description');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

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
        $rules->add($rules->existsIn(['city_id'], 'City'));

        return $rules;
    }
}
