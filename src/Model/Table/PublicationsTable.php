<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Publications Model
 *
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\BelongsTo $Photos
 * @property \App\Model\Table\TypeOfPublicationsTable|\Cake\ORM\Association\BelongsTo $TypeOfPublications
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\TgroupsTable|\Cake\ORM\Association\BelongsTo $Tgroups
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 *
 * @method \App\Model\Entity\Publication get($primaryKey, $options = [])
 * @method \App\Model\Entity\Publication newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Publication[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Publication|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publication|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Publication[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Publication findOrCreate($search, callable $callback = null, $options = [])
 */
class PublicationsTable extends Table
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

        $this->setTable('publications');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');

        $this->belongsTo('Photos', [
            'foreignKey' => 'photo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TypeOfPublications', [
            'foreignKey' => 'type_of_publication_id',
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
            'foreignKey' => 'publication_id'
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
        $rules->add($rules->existsIn(['type_of_publication_id'], 'TypeOfPublications'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['tgroup_id'], 'Tgroups'));

        return $rules;
    }
}
