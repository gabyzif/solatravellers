<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Model\Entity\User;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\Locator\TableLocator;
use Cake\ORM\TableRegistry;
use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 * @property User $User
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    var $User;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */


    public function initialize()
    {
        // Existing code
        parent:: initialize();

        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],

            'loginAction' => [
                'controller' => 'Sesion',
                'action' => 'login'
            ],


            //use isAuthorized in Controllers
            'authorize' => ['Controller'],
            // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);

        // Allow the display action so our PagesController
        // continues to work. Also enable the read only actions.


        $this->Auth->allow(['register','display','home']);
    }

    public function beforeFilter(Event $event)
    {
        if(!$this->request->is('ajax')) {

            if ($this->Auth->user('id')) {
                $this->User = TableRegistry::get('Users')
                    ->get($this->Auth->user('id'));

                $this->set('User', $this->User);
            }
        }

        return parent::beforeFilter($event); // TODO: Change the autogenerated stub
    }


    public function isAuthorized($user){
        return true;
    }


}

