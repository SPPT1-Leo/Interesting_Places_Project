<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Uf Model
 *
 * @property \App\Model\Table\CidadeTable|\Cake\ORM\Association\HasMany $Cidade
 *
 * @method \App\Model\Entity\Uf get($primaryKey, $options = [])
 * @method \App\Model\Entity\Uf newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Uf[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Uf|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Uf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Uf[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Uf findOrCreate($search, callable $callback = null, $options = [])
 */
class UfTable extends Table
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

        $this->setTable('uf');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Cidade', [
            'foreignKey' => 'uf_id'
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
            ->scalar('nome')
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('sigla')
            ->requirePresence('sigla', 'create')
            ->notEmpty('sigla');

        return $validator;
    }
}
