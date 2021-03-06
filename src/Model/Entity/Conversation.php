<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conversation Entity
 *
 * @property int $Id
 * @property string $Description
 * @property \Cake\I18n\FrozenDate $Date
 * @property int $photo_id
 * @property int $user_id
 * @property int $category_id
 * @property string $Title
 * @property string $LongDescription
 * @property int $tgroup_id
 *
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Tgroup $tgroup
 */
class Conversation extends Entity
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
        'Description' => true,
        'Date' => true,
        'photo_id' => true,
        'user_id' => true,
        'category_id' => true,
        'Title' => true,
        'LongDescription' => true,
        'tgroup_id' => true,
        'photo' => true,
        'user' => true,
        'category' => true,
        'tgroup' => true
    ];
}
