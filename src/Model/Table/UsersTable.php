<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('user_salutation')
            ->requirePresence('user_salutation', 'create')
            ->notEmptyString('user_salutation');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 255)
            ->requirePresence('user_name', 'create')
            ->notEmptyString('user_name');

        $validator
            ->scalar('user_email')
            ->maxLength('user_email', 60)
            ->requirePresence('user_email', 'create')
            ->notEmptyString('user_email');

        $validator
            ->scalar('user_password')
            ->maxLength('user_password', 60)
            ->requirePresence('user_password', 'create')
            ->notEmptyString('user_password');

        $validator
            ->scalar('user_phone')
            ->maxLength('user_phone', 15)
            ->requirePresence('user_phone', 'create')
            ->notEmptyString('user_phone');

        $validator
            ->scalar('user_position')
            ->maxLength('user_position', 60)
            ->requirePresence('user_position', 'create')
            ->notEmptyString('user_position');

        $validator
            ->scalar('user_department')
            ->maxLength('user_department', 60)
            ->requirePresence('user_department', 'create')
            ->notEmptyString('user_department');

        $validator
            ->integer('user_organization')
            ->requirePresence('user_organization', 'create')
            ->notEmptyString('user_organization');

        return $validator;
    }
}
