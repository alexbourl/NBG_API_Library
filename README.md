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
    deleteAccounts($bank_id, $account_id)
    deleteAtms($bank_id, $atm_id)
    deleteBanks($bank_id)
    deleteBranches($bank_id, $branch_id)
    deleteCustomers($bank_id, $customer_id)
    deleteMessanges($bank_id, $message_id)
    deleteMetadata()
    deleteOtherAccounts($bank_id, $account_id, $view_id, $other_account_id)
    deleteProducts($bank_id, $product_id)
    deleteTransactionType($bank_id, $account_id, $view_id, $transaction_id, $type)
    deleteTransactionTypeID($bank_id, $account_id, $view_id, $transaction_id, $type, $type_id)
    deleteView($bank_id, $view_id)
    deleteViewAccount($bank_id, $account_id, $view_id)
    
<h3>GET</h3>
    getAccount($bank_id, $account_id, $view_id)
    getAccountIDfromIBAN($iban)
    getAccounts($account_id)
    getAccountsAllBanksPrivatePublic($private_public)
    getAccountsPrivatePublic($bank_id, $private_public)
    getAccountsScope($bank_id, $account_id, $view_id, $scope)
    getAtm($bank_id, $atm_id)
    getAtms($bank_id)
    getBank($bank_id)
    getBanks()
    getBranch($bank_id, $branch_id)
    getBranches($bank_id)
    getCustomer($bank_id, $customer_id)
    getCustomerOwner($bank_id)
    getCustomers($bank_id)
    getMessage($bank_id, $message_id)
    getMessages($bank_id)
    getMessagesOwner($bank_id)
    getMetadata()
    getOtherAccount($bank_id, $account_id, $view_id, $other_account_id)
    getOtherAccounts($bank_id, $account_id, $view_id)
    getProduct($bank_id, $product_id)
    getProducts($bank_id)
    getRegisterForm()
    getTransaction($bank_id, $account_id, $view_id, $transaction_id)
    getTransactions($bank_id, $account_id, $view_id)
    getTransactionsMetadataType($bank_id, $account_id, $view_id, $transaction_id, $type)
    getTransactionsRequest($bank_id, $account_id, $view_id)
    getTransactionsRequestTypes($bank_id, $account_id, $view_id)
    getUsers()
    getViews($bank_id)
    getWeb()
    
<h3>POST</h3>
    postAtms($bank_id)
    postBanks()
    postBranches($bank_id)
    postCustomers($bank_id)
    postMessages($bank_id)
    postMetadata()
    postOtherAccounts($bank_id, $account_id, $view_id)
    postProducts($bank_id)
    
<h3>PUT</h3>
    putAccount($bank_id)
    putAccountID($bank_id, $account_id)
    putAtm($bank_id)
    putAtmID($bank_id, $atm_id)
    putBank()
    putBankID($bank_id)
    putBranch($bank_id)
    putBranchID($bank_id, $branch_id)
    putCustomer($bank_id)
    putCustomerID($bank_id, $customer_id)
    putMessage($bank_id)
    putMessageID($bank_id, $message_id)
    putMessageIDtoCustomer($bank_id, $customer_id, $message_id)
    putMessageToCustomer($bank_id, $customer_id)
    putMetadata()
    putOtherAccount($bank_id, $account_id, $view_id)
    putOtherAccountID($bank_id, $account_id, $view_id, $other_account_id)
    putProduct($bank_id)
    putProductID($bank_id, $product_id)
    putTransactions($bank_id, $account_id, $view_id, $transaction_id, $type)
    putTransactionsRequest($bank_id, $type)
    putTransactionsRequestAccount($bank_id, $account_id, $view_id, $type)
    putUser()
    putUserID($bank_id)
    putView($bank_id)
    putViewAccount($bank_id, $account_id)
    putViewID($bank_id, $view_id)
    putViewIDAccount($bank_id, $account_id, $view_id)

}

?>
