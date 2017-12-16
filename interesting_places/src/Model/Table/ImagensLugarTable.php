<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImagensLugar Model
 *
 * @property \App\Model\Table\LugarTable|\Cake\ORM\Association\BelongsTo $Lugar
 *
 * @method \App\Model\Entity\ImagensLugar get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImagensLugar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImagensLugar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImagensLugar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImagensLugar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImagensLugar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImagensLugar findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagensLugarTable extends Table
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

        $this->setTable('imagens_lugar');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Lugar', [
            'foreignKey' => 'lugar_id',
            'joinType' => 'INNER'
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
            ->scalar('path')
            ->requirePresence('path', 'create')
            ->notEmpty('path');

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
        $rules->add($rules->existsIn(['lugar_id'], 'Lugar'));

        return $rules;
    }
}
