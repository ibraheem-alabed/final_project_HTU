<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Base\View;
use Core\Helpers\Helper;
use Core\Model\Transaction;
use Core\Model\Item;


class Transactions extends Controller
{

    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }

    function __construct()
    {
        $this->auth();
        $this->admin_view(true);
    }

    /**
     * Gets all transactions
     *
     * @return array
     */
    public function index()
    {
        $this->permissions(['transaction:read']);
        $this->view = 'transactions.index';
        $transaction = new Transaction; // new model transaction.
        $this->data['transactions'] = $transaction->get_all();

        
        $this->data['user']=$_SESSION['user']['user_id'];
        $item= new Item;
        $items=$item->get_all();
        $this->data['items']=$items;
    }
    /**
     * Gets single transactions
     *
     * @return array
     */
    public function single()
    {
        $this->permissions(['transaction:read']);
        $this->view = 'transactions.single';
        $transaction = new Transaction();
        $this->data['transaction'] = $transaction->get_by_id($_GET['id']);
    }

    /**
     * Display the HTML form for item creation
     *
     * @return void
     */
    public function create()
    {
        $this->permissions(['transaction:create']);
        $this->view = 'transactions.create';
        $transaction= new Transaction;
        $this->data['transactions'] = $transaction->get_all();
        $this->data['transactions_count'] = count($transaction->get_all());
        $this->data['total_seals']= $transaction->connection->query("SELECT SUM(total) from transactions");
    }

    /**
     * Creates new item
     *
     * @return void
     */
    public function store()
    {
        $this->permissions(['transaction:create']);
        $transaction = new Transaction();
        $transaction->create($_POST);
        Helper::redirect('/transactions');
    }

    /**
     * Display the HTML form for item update
     *
     * @return void
     */
    public function edit()
    {
        $this->permissions(['transaction:read', 'transaction:update']);
        $this->view = 'transactions.edit';
        $transaction = new Transaction();
        $this->data['transaction'] = $transaction->get_by_id($_GET['id']);
    }

    /**
     * Updates the item
     *
     * @return void
     */
    public function update()
    {
        $this->permissions(['transaction:read', 'transaction:update']);
        $transaction = new Transaction();
        $transaction->update($_POST);
        Helper::redirect('/transaction?id=' . $_POST['id']);
    }

    /**
     * Delete the item
     *
     * @return void
     */
    public function delete()
    {
        $this->permissions(['transaction:read', 'transaction:delete']);
        $transaction = new Transaction();
        $transaction->delete($_GET['id']);
        Helper::redirect('/transactions');
    }
}
