# NBG API Library
National Bank of Greece (NBG) API Library in PHP
<h2>Installation</h2>

```php
<?php
include_once('nbg-api-class');

$api = new NBGiBankAPI();
?>
```
<h2>Methods</h2>
<h3>DELETE</h3>
```php
    deleteAccounts($bank_id, $account_id)<br>
    deleteAtms($bank_id, $atm_id)<br>
    deleteBanks($bank_id)<br>
    deleteBranches($bank_id, $branch_id)<br>
    deleteCustomers($bank_id, $customer_id)<br>
    deleteMessanges($bank_id, $message_id)<br>
    deleteMetadata()<br>
    deleteOtherAccounts($bank_id, $account_id, $view_id, $other_account_id)<br>
    deleteProducts($bank_id, $product_id)<br>
    deleteTransactionType($bank_id, $account_id, $view_id, $transaction_id, $type)<br>
    deleteTransactionTypeID($bank_id, $account_id, $view_id, $transaction_id, $type, $type_id)<br>
    deleteView($bank_id, $view_id)<br>
    deleteViewAccount($bank_id, $account_id, $view_id)<br>
    ```
<h3>GET</h3>
```php
    getAccount($bank_id, $account_id, $view_id)<br>
    getAccountIDfromIBAN($iban)<br>
    getAccounts($account_id)<br>
    getAccountsAllBanksPrivatePublic($private_public)<br>
    getAccountsPrivatePublic($bank_id, $private_public)<br>
    getAccountsScope($bank_id, $account_id, $view_id, $scope)<br>
    getAtm($bank_id, $atm_id)<br>
    getAtms($bank_id)<br>
    getBank($bank_id)<br>
    getBanks()<br>
    getBranch($bank_id, $branch_id)<br>
    getBranches($bank_id)<br>
    getCustomer($bank_id, $customer_id)<br>
    getCustomerOwner($bank_id)<br>
    getCustomers($bank_id)<br>
    getMessage($bank_id, $message_id)<br>
    getMessages($bank_id)<br>
    getMessagesOwner($bank_id)<br>
    getMetadata()<br>
    getOtherAccount($bank_id, $account_id, $view_id, $other_account_id)<br>
    getOtherAccounts($bank_id, $account_id, $view_id)<br>
    getProduct($bank_id, $product_id)<br>
    getProducts($bank_id)<br>
    getRegisterForm()<br>
    getTransaction($bank_id, $account_id, $view_id, $transaction_id)<br>
    getTransactions($bank_id, $account_id, $view_id)<br>
    getTransactionsMetadataType($bank_id, $account_id, $view_id, $transaction_id, $type)<br>
    getTransactionsRequest($bank_id, $account_id, $view_id)<br>
    getTransactionsRequestTypes($bank_id, $account_id, $view_id)<br>
    getUsers()<br>
    getViews($bank_id)<br>
    getWeb()<br>
    ```
    
<h3>POST</h3>
```php
    postAtms($bank_id)<br>
    postBanks()<br>
    postBranches($bank_id)<br>
    postCustomers($bank_id)<br>
    postMessages($bank_id)<br>
    postMetadata()<br>
    postOtherAccounts($bank_id, $account_id, $view_id)<br>
    postProducts($bank_id)<br>
    ```
    
<h3>PUT</h3>
```php
    putAccount($bank_id)<br>
    putAccountID($bank_id, $account_id)<br>
    putAtm($bank_id)<br>
    putAtmID($bank_id, $atm_id)<br>
    putBank()<br>
    putBankID($bank_id)<br>
    putBranch($bank_id)<br>
    putBranchID($bank_id, $branch_id)<br>
    putCustomer($bank_id)<br>
    putCustomerID($bank_id, $customer_id)<br>
    putMessage($bank_id)<br>
    putMessageID($bank_id, $message_id)<br>
    putMessageIDtoCustomer($bank_id, $customer_id, $message_id)<br>
    putMessageToCustomer($bank_id, $customer_id)<br>
    putMetadata()<br>
    putOtherAccount($bank_id, $account_id, $view_id)<br>
    putOtherAccountID($bank_id, $account_id, $view_id, $other_account_id)<br>
    putProduct($bank_id)<br>
    putProductID($bank_id, $product_id)<br>
    putTransactions($bank_id, $account_id, $view_id, $transaction_id, $type)<br>
    putTransactionsRequest($bank_id, $type)<br>
    putTransactionsRequestAccount($bank_id, $account_id, $view_id, $type)<br>
    putUser()<br>
    putUserID($bank_id)<br>
    putView($bank_id)<br>
    putViewAccount($bank_id, $account_id)<br>
    putViewID($bank_id, $view_id)<br>
    putViewIDAccount($bank_id, $account_id, $view_id)
```
