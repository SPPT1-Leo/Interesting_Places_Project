<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoLugar Model
 *
 * @property \App\Model\Table\LugarTable|\Cake\ORM\Association\HasMany $Lugar
 *
 * @method \App\Model\Entity\TipoLugar get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoLugar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoLugar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoLugar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoLugar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoLugar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoLugar findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoLugarTable extends Table
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

        $this->setTable('tipo_lugar');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Lugar', [
            'foreignKey' => 'tipo_lugar_id'
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

        return $validator;
    }
}
