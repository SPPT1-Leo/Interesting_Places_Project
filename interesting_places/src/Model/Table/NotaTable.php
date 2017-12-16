<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nota Model
 *
 * @property \App\Model\Table\PessoaTable|\Cake\ORM\Association\BelongsTo $Pessoa
 * @property \App\Model\Table\LugarTable|\Cake\ORM\Association\BelongsTo $Lugar
 *
 * @method \App\Model\Entity\Notum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Notum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Notum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Notum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notum findOrCreate($search, callable $callback = null, $options = [])
 */
class NotaTable extends Table
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

        $this->setTable('nota');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pessoa', [
            'foreignKey' => 'pessoa_id',
            'joinType' => 'INNER'
        ]);
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
            ->dateTime('horario')
            ->requirePresence('horario', 'create')
            ->notEmpty('horario');

        $validator
            ->integer('valor')
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

        $validator
            ->scalar('resenha')
            ->allowEmpty('resenha');

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
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoa'));

        return $rules;
    }
}
