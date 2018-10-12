<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeOfPublications Model
 *
 * @property \App\Model\Table\PublicationsTable|\Cake\ORM\Association\HasMany $Publications
 *
 * @method \App\Model\Entity\TypeOfPublication get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypeOfPublication newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypeOfPublication[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeOfPublication|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeOfPublication|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeOfPublication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypeOfPublication[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeOfPublication findOrCreate($search, callable $callback = null, $options = [])
 */
class TypeOfPublicationsTable extends Table
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

        $this->setTable('type_of_publications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Publications', [
            'foreignKey' => 'type_of_publication_id'
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
            ->scalar('type')
            ->maxLength('type', 40)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        return $validator;
    }
}
