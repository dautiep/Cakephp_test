<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $user_salutation
 * @property string $user_name
 * @property string $user_email
 * @property string $user_password
 * @property string $user_phone
 * @property string $user_position
 * @property string $user_department
 * @property int $user_organization
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_salutation' => true,
        'user_name' => true,
        'user_email' => true,
        'user_password' => true,
        'user_phone' => true,
        'user_position' => true,
        'user_department' => true,
        'user_organization' => true,
    ];
}
