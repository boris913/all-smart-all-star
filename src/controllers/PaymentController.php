<?php

namespace App\Controllers;

use App\Models\Payment;
use Exception;

class PaymentController
{
    public function processDonation()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sanitize and validate input
            $amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $currency = filter_input(INPUT_POST, 'currency', FILTER_SANITIZE_STRING);

            if (!$this->validateAmount($amount)) {
                // Handle invalid amount
                header('Location: /donate.php?error=invalid_amount');
                exit;
            }

            // Create a new payment instance
            $payment = new Payment();
            $payment->setAmount($amount);
            $payment->setCurrency($currency);

            try {
                // Process payment with a payment gateway (e.g., Stripe, PayPal)
                $this->processPayment($payment);
                
                // Redirect to confirmation page
                header('Location: /confirmation.php?status=success');
                exit;
            } catch (Exception $e) {
                // Handle payment processing error
                header('Location: /donate.php?error=payment_failed');
                exit;
            }
        }
    }

    private function validateAmount($amount)
    {
        return is_numeric($amount) && $amount > 0;
    }

    private function processPayment(Payment $payment)
    {
        // Integrate with payment gateway API here
        // Example: Stripe or PayPal API call
    }
}