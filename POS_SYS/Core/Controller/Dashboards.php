<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Helpers\Tests;
use Core\Model\Transaction;
use Core\Model\User;
use Core\Model\Item;
class Dashboards extends Controller
{
    use Tests;

    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }
    /**
     *  function give info to dashboard
     *
     * @return void
     */
    public function index()
    {
        $this->view="dashboard";
        $item = new Item; // new model items.
        $this->data['item'] = $item->get_all();
        $this->data['items_count'] = count($item->get_all());
        $this->permissions(['user:read']);
        $transaction = new Transaction; // new model Transaction.
        $this->data['transactions'] = $transaction->get_all();
        $this->data['transactions_count'] = count($transaction->get_all());
        $this->data['total_seals']= $transaction->connection->query("SELECT SUM(total) from transactions");
        $user = new User; // new model users.
        $this->data['users'] = $user->get_all();
        $this->data['user_count'] = count($user->get_all());

        
    }
}
