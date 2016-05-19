<?php
namespace App\Model\Table;

use App\Model\Entity\Capitulo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Capitulos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Novelas
 * @property \Cake\ORM\Association\BelongsTo $Dias
 */
class CapitulosTable extends Table
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

        $this->table('capitulos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Novelas', [
            'foreignKey' => 'novela_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dias', [
            'foreignKey' => 'dia_id',
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
            ->requirePresence('resumo', 'create')
            ->notEmpty('resumo');

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
        $rules->add($rules->existsIn(['novela_id'], 'Novelas'));
        $rules->add($rules->existsIn(['dia_id'], 'Dias'));
        return $rules;
    }
}
