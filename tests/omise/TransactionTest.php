<?php
require_once dirname(__FILE__).'/TestConfig.php';

use Omise\Transaction;

class TransactionTest extends TestConfig
{
    /**
     * @test
     */
    public function method_exists()
    {
        $this->assertTrue(method_exists('Omise\Transaction', 'retrieve'));
        $this->assertTrue(method_exists('Omise\Transaction', 'reload'));
        $this->assertTrue(method_exists('Omise\Transaction', 'getUrl'));
    }

    /**
     * @test
     * Assert that a list of transactions object could be successfully retrieved.
     */
    public function retrieve_all_transactions()
    {
        $transactions = OmiseTransaction::retrieve();

        $this->assertArrayHasKey('object', $transactions);
        $this->assertEquals('list', $transactions['object']);
    }

    /**
     * @test
     * Assert that a transaction object is returned after a successful retrieve with transaction id.
     */
    public function retrieve_with_specific_transaction()
    {
        $transaction = OmiseTransaction::retrieve('trxn_test_4zmrjhlflnz6id6q0bo');

        $this->assertArrayHasKey('object', $transaction);
        $this->assertEquals('transaction', $transaction['object']);
    }

    /**
     * @test
     * Assert that a transaction object is returned after a successful retrieve with transaction id.
     * And validate json structure that's return back.
     */
    public function validate_omise_transaction_object_retrieved_structure()
    {
        $transaction = OmiseTransaction::retrieve('trxn_test_4zmrjhlflnz6id6q0bo');

        $this->assertArrayHasKey('object', $transaction);
        $this->assertArrayHasKey('id', $transaction);
        $this->assertArrayHasKey('type', $transaction);
        $this->assertArrayHasKey('amount', $transaction);
        $this->assertArrayHasKey('currency', $transaction);
        $this->assertArrayHasKey('created', $transaction);
    }
}
