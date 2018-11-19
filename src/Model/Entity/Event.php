<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $description
 * @property string $long_description
 * @property string $name
 * @property \Cake\I18n\FrozenDate $date
 * @property bool $active
 * @property int $city_id
 * @property string $direction
 * @property string $photo_url
 *
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\City $city
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
        'name' => true,
        'date' => true,
        'active' => true,
        'city_id' => true,
        'direction' => true,
        'photo_url' => true,
        'photo' => true,
        'city' => true,
        'users' => true
    ];
}
