<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conversations Model
 *
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\BelongsTo $Photos
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\TgroupsTable|\Cake\ORM\Association\BelongsTo $Tgroups
 *
 * @method \App\Model\Entity\Conversation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conversation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conversation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conversation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conversation|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conversation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conversation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conversation findOrCreate($search, callable $callback = null, $options = [])
 */
class ConversationsTable extends Table
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

        $this->setTable('conversations');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');

        $this->belongsTo('Photos', [
            'foreignKey' => 'photo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tgroups', [
            'foreignKey' => 'tgroup_id'
        ]);

        $this->hasMany('Comments', [
            'foreignKey' => 'conversation_id'
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
            ->integer('Id')
            ->allowEmpty('Id', 'create');

        $validator
            ->scalar('Description')
            ->maxLength('Description', 1000)
            ->requirePresence('Description', 'create')
            ->notEmpty('Description');

        $validator
            ->date('Date')
            ->allowEmpty('Date');

        $validator
            ->scalar('Title')
            ->maxLength('Title', 40)
            ->requirePresence('Title', 'create')
            ->notEmpty('Title');

        $validator
            ->scalar('LongDescription')
            ->maxLength('LongDescription', 20000)
            ->requirePresence('LongDescription', 'create')
            ->notEmpty('LongDescription');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['tgroup_id'], 'Tgroups'));

        return $rules;
    }
}
