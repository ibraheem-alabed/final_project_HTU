<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Tests;
use Core\Model\Transaction;
use Core\Model\Item;
use Exception;

class Endpoints extends Controller
{
        use Tests;

        protected $request_body;
        protected $http_code = 200;

        protected $response_schema = array(
                "success" => true, // to provide the response status.
                "message_code" => "", // to provide message code for the front-end developer for a better error handling
                "body" => []
        );

        function __construct()
        {
                $this->request_body = json_decode(file_get_contents("php://input"));
        }

        public function render()
        {
                header("Content-Type: application/json"); // changes the header information
                http_response_code($this->http_code); // set the HTTP Code for the response
                echo json_encode($this->response_schema); // convert the data to json format
        }
        /**
         *  function get all 
         *
         */
        function index()
        {
                $transaction = new Transaction;
                $trnsactions_id_user = array();
                $result = $transaction->connection->query("SELECT * FROM users_transactions WHERE user_id={$_SESSION['user']['user_id']}");

                if ($result->num_rows > 0) {
                        while ($row = $result->fetch_object()) {
                                $trnsactions_id_user[] = $row;
                        }
                }
                $transaction_user = array();
                //now i have the id of transactions now i need to fetch all information of transactions in transactions table
                foreach ($trnsactions_id_user as $value) {
                        //we make the sql statement with condition that created tody
                        $sql = "SELECT *FROM transactions WHERE id= {$value->transaction_id} AND created_at >= CURDATE()";
                        $transaction_query_conditions = $transaction->connection->query($sql);
                        if ($transaction_query_conditions->num_rows > 0) {
                                while ($row = $transaction_query_conditions->fetch_object()) {
                                        $transaction_user[] = $row;
                                }
                        }
                }
                $this->response_schema['body'] = $transaction_user;
        }

        /**
         *  function create
         *
         */

        function create()
        {
                self::check_if_empty($this->request_body);
                try {
                        $item = new Item;
                        $item_id = $this->request_body->item_input_id;
                        $current_item = $item->get_by_id($item_id);
                        $stock_quantity = $current_item->quantity;
                        $new_quantity = $stock_quantity - $this->request_body->quantity;
                        if ($this->request_body->quantity > $stock_quantity) {
                                $_SESSION['error'] = "there is no quantity enough in stock";
                                die;
                        }
                        $stmt1 = $item->connection->prepare("UPDATE items SET quantity = ? WHERE id=?");
                        $stmt1->bind_param('ii', $new_quantity, $item_id);
                        $stmt1->execute();
                        $result1 = $stmt1->get_result();
                        $stmt1->close();
                        $total = ($this->request_body->quantity) * ($current_item->silling_price);
                        $create_transaction = array(
                                "item_id" => $current_item->id,
                                "item_name" => $current_item->name,
                                "quantity" => $this->request_body->quantity,
                                "price" => $current_item->silling_price,
                                "cost" => $current_item->cost,
                                "total" => $total
                        );
                        $transaction = new Transaction;
                        $transaction->create($create_transaction);
                        $transaction_id = $transaction->connection->insert_id;
                        $user_id = $this->request_body->user_id;
                        $this->response_schema['body'] = $transaction->get_by_id($transaction_id);
                        $this->response_schema['message_code'] = "transaction_collected_successfuly";
                        $stmt = $transaction->connection->prepare("INSERT INTO users_transactions (user_id, transaction_id) VALUES (?,?)");
                        $stmt->bind_param('ii', $user_id, $transaction_id);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $stmt->close();
                        $this->response_schema['message_code'] = "post_created_successfuly";
                } catch (\Exception $error) {
                        $this->response_schema['message_code'] = "post_was_not_created";
                        $this->http_code = 421;
                }
        }
        /**
         *  function delete
         *
         */

        function delete()
        {
                $transaction = new Transaction;
                $transaction->delete($this->request_body->id);
        }
        /**
         *  function update
         *
         */
        function update()
        {
                $transaction = new Transaction;
                $request_transaction_id = $this->request_body->id;
                $request_quantity = $this->request_body->quantity;
                $transaction_all = $transaction->get_by_id($request_transaction_id);
                $stmt2 = $transaction->connection->prepare("UPDATE transactions SET quantity=?  WHERE id=?");
                $stmt2->bind_param('ii', $request_quantity, $request_transaction_id);
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $stmt2->close();
        }
}
