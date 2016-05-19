<?php
namespace App\Model\Table;

use App\Model\Entity\Novela;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Novelas Model
 *
 * @property \Cake\ORM\Association\HasMany $Capitulos
 */
class NovelasTable extends Table
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

        $this->table('novelas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Capitulos', [
            'foreignKey' => 'novela_id'
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->boolean('ativo')
            ->allowEmpty('ativo');

        return $validator;
    }
}
