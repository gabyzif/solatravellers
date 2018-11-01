<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $nacionality_id
 * @property string $photo_url
 * @property string $name
 * @property string $surname
 * @property string $password
 * @property string $email
 * @property int $type_of_account_id
 * @property \Cake\I18n\FrozenDate $dateOfBirth
 *
 * @property \App\Model\Entity\Nacionality $nacionality
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\TypeOfAccount $type_of_account
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Publication[] $publications
 * @property \App\Model\Entity\UserGroup[] $user_groups
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
        'nacionality_id' => true,
        'photo_url' => true,
        'name' => true,
        'surname' => true,
        'password' => true,
        'email' => true,
        'type_of_account_id' => true,
        'dateOfBirth' => true,
        'nacionality' => true,
        'photo' => true,
        'type_of_account' => true,
        'comments' => true,
        'publications' => true,
        'user_groups' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }
    }
}
