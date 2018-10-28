<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $description
 * @property string $long_description
 * @property int $photo_id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $date
 * @property bool $active
 * @property int $city_id
 *
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\User[] $users
 */
class Event extends Entity
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
        'description' => true,
        'long_description' => true,
        'photo_id' => true,
        'name' => true,
        'date' => true,
        'active' => true,
        'city_id' => true,
        'photo' => true,
        'users' => true
    ];
}
