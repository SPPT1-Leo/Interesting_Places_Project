<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lugar Model
 *
 * @property \App\Model\Table\TipoLugarTable|\Cake\ORM\Association\BelongsTo $TipoLugar
 * @property \App\Model\Table\TiposTable|\Cake\ORM\Association\BelongsTo $Tipos
 * @property \App\Model\Table\EnderecoTable|\Cake\ORM\Association\BelongsTo $Endereco
 * @property \App\Model\Table\ImagensLugarTable|\Cake\ORM\Association\HasMany $ImagensLugar
 * @property \App\Model\Table\ImagensPessoaTable|\Cake\ORM\Association\HasMany $ImagensPessoa
 * @property \App\Model\Table\NotaTable|\Cake\ORM\Association\HasMany $Nota
 *
 * @method \App\Model\Entity\Lugar get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lugar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lugar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lugar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lugar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lugar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lugar findOrCreate($search, callable $callback = null, $options = [])
 */
class LugarTable extends Table
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

        $this->setTable('lugar');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TipoLugar', [
            'foreignKey' => 'tipo_lugar_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tipos', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Endereco', [
            'foreignKey' => 'endereco_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ImagensLugar', [
            'foreignKey' => 'lugar_id'
        ]);
        $this->hasMany('ImagensPessoa', [
            'foreignKey' => 'lugar_id'
        ]);
        $this->hasMany('Nota', [
            'foreignKey' => 'lugar_id'
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
            ->scalar('site')
            ->allowEmpty('site');

        $validator
            ->scalar('telefone_1')
            ->requirePresence('telefone_1', 'create')
            ->notEmpty('telefone_1');

        $validator
            ->scalar('telefone_2')
            ->allowEmpty('telefone_2');

        $validator
            ->scalar('facebook')
            ->allowEmpty('facebook');

        $validator
            ->scalar('instagram')
            ->allowEmpty('instagram');

        $validator
            ->scalar('whatsapp')
            ->allowEmpty('whatsapp');

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
        $rules->add($rules->existsIn(['tipo_lugar_id'], 'TipoLugar'));
        $rules->add($rules->existsIn(['tipo_id'], 'Tipos'));
        $rules->add($rules->existsIn(['endereco_id'], 'Endereco'));

        return $rules;
    }
}
