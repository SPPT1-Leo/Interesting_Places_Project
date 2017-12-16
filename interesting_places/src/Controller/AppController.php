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

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

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
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'login',
                        'password' => 'senha',
                        'pessoa_id'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'usuario',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => '/usuario/access_denied'
        ]);

        // Allow the display action so our pages controller
        // continues to work.
        $this->Auth->allow(['display']);
        
        $this->set('username_logged', $this->Auth->user('login'));
    }


    public function isAuthorized($user = null) {
        //-- Dados do usuário logado
        
        $this->privilege = TableRegistry::get('privilege');

        $role_id = $user['role_id'];
        $contr = $this->request->controller;
        $act   = $this->request->action;
        
        $n = $this->privilege->find('all', array(
            'contain' => ['resource.controller', 'resource.action'],
            'conditions' => array(
                'controller.nome ilike ' => $contr,
                'action.nome ilike ' => $act,
                'privilege.role_id = ' => $role_id,
            ),
        ))->count();

        if(!$n) {
            return false;
        }
        return true;
    }


    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        $role_id = $this->Auth->user('role_id');


        //** Modificação para seleção do layout com base no papel do usuário (role_id).
        if($role_id == 1 /* Administrador */) {
            $this->viewBuilder()->layout('default');
        }
        if($role_id == 2 /* Usuário comum */) {
            $this->viewBuilder()->layout('usuario');
        }
        




        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
