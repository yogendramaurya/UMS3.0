<?php
namespace App\Controller;
use App\Controller\AppController;

class CmspagesController extends AppController
{
	public function initialize()
	{
		 parent::initialize();
		 $this->loadComponent('Flash'); // Include the FlashComponent
		 $login = $loggedUserId = $this->Auth->user('id');
		 $this->set('login', $loggedUserId);
	}

	public function index()
	{

         var_dump($loggedUserId);
	 $this->set('pages', $this->Cmspages->find('all'));

	}
}
?>