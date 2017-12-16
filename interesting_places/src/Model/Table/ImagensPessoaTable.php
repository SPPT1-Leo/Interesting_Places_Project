<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImagensPessoa Model
 *
 * @property \App\Model\Table\PessoaTable|\Cake\ORM\Association\BelongsTo $Pessoa
 * @property \App\Model\Table\LugarTable|\Cake\ORM\Association\BelongsTo $Lugar
 * @property \App\Model\Table\ComentarioTable|\Cake\ORM\Association\HasMany $Comentario
 *
 * @method \App\Model\Entity\ImagensPessoa get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImagensPessoa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImagensPessoa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImagensPessoa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImagensPessoa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImagensPessoa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImagensPessoa findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagensPessoaTable extends Table
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

        $this->setTable('imagens_pessoa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pessoa', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->belongsTo('Lugar', [
            'foreignKey' => 'lugar_id'
        ]);
        $this->hasMany('Comentario', [
            'foreignKey' => 'imagens_pessoa_id'
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
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoa'));
        $rules->add($rules->existsIn(['lugar_id'], 'Lugar'));

        return $rules;
    }
}
