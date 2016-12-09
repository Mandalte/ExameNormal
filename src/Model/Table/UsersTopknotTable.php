<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersTopknot Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Topknots
 *
 * @method \App\Model\Entity\UsersTopknot get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersTopknot newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersTopknot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersTopknot|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersTopknot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersTopknot[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersTopknot findOrCreate($search, callable $callback = null)
 */
class UsersTopknotTable extends Table
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

        $this->table('users_topknot');
        $this->displayField('topknot_id');
        $this->primaryKey(['topknot_id', 'user_id']);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Topknots', [
            'foreignKey' => 'topknot_id',
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['topknot_id'], 'Topknots'));

        return $rules;
    }
}
