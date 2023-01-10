<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Model\Transaction;
use Core\Model\User;


use Core\Helpers\Helper;
use Core\Model\Item;

class Admin extends Controller
{
        public function render()
        {
                if (!empty($this->view))
                $this->view();
        }
/**
 *  function to make view
 */
        function __construct()
        {
                $this->auth();
                $this->admin_view(true);
        }
/**
 *  function to make info 
 *
 * @return void
 */
        public function index()
        {
                $this->permissions(['user:read']);
                $this->view = 'dashboard';
        $item = new Item; // new model items.
        $this->data['item'] = $item->get_all();
        $this->data['items_count'] = count($item->get_all());
        $this->data['top_five']= $item->connection->query("SELECT * from items ORDER BY `items`.`silling_price` DESC limit 5");
        // $this->permissions(['item:read']);
        $transaction = new Transaction; // new model Transaction.
        $this->data['transactions'] = $transaction->get_all();
        $this->data['transactions_count'] = count($transaction->get_all());
        $this->data['total_seals']= $transaction->connection->query("SELECT SUM(total) from transactions");
        // var_dump($this->data['total_seals']);
        // die;


        $user = new User; // new model users.
        $this->data['users'] = $user->get_all();
        $this->data['user_count'] = count($user->get_all());

        }
}
