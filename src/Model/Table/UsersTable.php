<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\NacionalitiesTable|\Cake\ORM\Association\BelongsTo $Nacionalities
 * @property \App\Model\Table\TypeOfAccountsTable|\Cake\ORM\Association\BelongsTo $TypeOfAccounts
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\PublicationsTable|\Cake\ORM\Association\HasMany $Publications
 * @property \App\Model\Table\UserGroupsTable|\Cake\ORM\Association\HasMany $UserGroups
 * @property |\Cake\ORM\Association\BelongsToMany $Events
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Nacionalities', [
            'foreignKey' => 'nacionality_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TypeOfAccounts', [
            'foreignKey' => 'type_of_account_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Publications', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserGroups', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Events', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'users_events'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo_url' => [
                'path' => 'webroot{DS}images{DS}{model}{DS}{field}{DS}'
                    ]

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
            ->requirePresence('name', 'create');

        $validator
            ->scalar('surname')
            ->maxLength('surname', 40)
            ->requirePresence('surname', 'create')
            ->notEmpty('surname');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->date('dateOfBirth')
            ->allowEmpty('dateOfBirth');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['nacionality_id'], 'Nacionalities'));
        $rules->add($rules->existsIn(['type_of_account_id'], 'TypeOfAccounts'));

        return $rules;
    }
}
