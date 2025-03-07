<?php

class Payment {
    private $amount;
    private $currency;
    private $status;

    public function __construct($amount, $currency = 'XAF') {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->status = 'pending'; // Default status
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function save() {
        // Here you would typically save the payment information to a database
        // This is a placeholder for the actual database logic
        // Example: using PDO to prepare and execute an insert statement
    }
}