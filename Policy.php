<?php
    class Policy {
        private $conn;

        public $insurerName;
        public $policyType;
        public $policyPremium;
        public $customerName;
        public $customerAddress;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function read() {
            $query = 'SELECT c.name, c.address, p.insurer_name, p.type, p.premium
                      FROM customers c
                      INNER JOIN policys p
                      ON c.id = p.customer_id
                      ORDER BY c.name DESC';

            $statement = $this->conn->prepare($query);
            $statement->execute();

            return $statement;
        }
    }
?>