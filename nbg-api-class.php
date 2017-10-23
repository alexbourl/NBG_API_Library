<?php

/*
 *       _______________________________________________________
 *	|                                                       |
 *	|   National Bank of Greece (NBG) API Library in PHP.   |
 *	|_______________________________________________________|
 *
 *		Created on : October 21, 2017, 02:06:20 PM
 *		Author	   : Alexandros Bourlivas
 *
 *                  API Owned By https://nbgdemo.portal.azure-api.net/
 */

class NBGiBankAPI {

protected function APIRequest($method, $api){

          $curl = curl_init();
          curl_setopt_array($curl, array(
              CURLOPT_HTTPHEADER  => array('Ocp-Apim-Subscription-Key: {YOUR-KEY}', 'Content-Type: application/json'),
              CURLOPT_URL => 'https://nbgdemo.azure-api.net/nodeopenapi/'.$api,
              CURLOPT_CUSTOMREQUEST => $method
          ));
          $resp = curl_exec($curl);
          curl_close($curl);

  }

    public function deleteAccounts($bank_id, $account_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id);
    }
    public function deleteAtms($bank_id, $atm_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/atms/'.$atm_id);
    }
    public function deleteBanks($bank_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id);
    }
    public function deleteBranches($bank_id, $branch_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/branches/'.$branch_id);
    }
    public function deleteCustomers($bank_id, $customer_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/customers/'.$customer_id);
    }
    public function deleteMessanges($bank_id, $message_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/messages/'.$message_id);
    }
    public function deleteMetadata(){
      self::APIRequest("DELETE", 'api/metadata');
    }
    public function deleteOtherAccounts($bank_id, $account_id, $view_id, $other_account_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts/'.$other_account_id);
    }
    public function deleteProducts($bank_id, $product_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/products/'.$product_id);
    }
    public function deleteTransactionType($bank_id, $account_id, $view_id, $transaction_id, $type){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type);
    }
    public function deleteTransactionTypeID($bank_id, $account_id, $view_id, $transaction_id, $type, $type_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type.'/'.$type_id);
    }
    public function deleteView($bank_id, $view_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/views/'.$view_id);
    }
    public function deleteViewAccount($bank_id, $account_id, $view_id){
      self::APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/views/'.$view_id);
    }

    public function getAccount($bank_id, $account_id, $view_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/account');
    }
    public function getAccountIDfromIBAN($iban){
      self::APIRequest("GET", 'api/accounts/getid/'.$iban);
    }
    public function getAccounts($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts');
    }
    public function getAccountsAllBanksPrivatePublic($private_public){
      self::APIRequest("GET", 'api/accounts/'.$private_public);
    }
    public function getAccountsPrivatePublic($bank_id, $private_public){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$private_public);
    }
    public function getAccountsScope($bank_id, $account_id, $view_id, $scope){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/'.$scope);
    }
    public function getAtm($bank_id, $atm_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/atms/'.$atm_id);
    }
    public function getAtms($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/atms');
    }
    public function getBank($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id);
    }
    public function getBanks(){
      self::APIRequest("GET", 'api/banks/');
    }
    public function getBranch($bank_id, $branch_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/branches/'.$branch_id);
    }
    public function getBranches($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'branches');
    }
    public function getCustomer($bank_id, $customer_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/customers/'.$customer_id);
    }
    public function getCustomerOwner($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/customer');
    }
    public function getCustomers($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/customers');
    }
    public function getMessage($bank_id, $message_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/messages/'.$message_id);
    }
    public function getMessages($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/messages');
    }
    public function getMessagesOwner($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/customer/messages');
    }
    public function getMetadata(){
      self::APIRequest("GET", 'api/metadata');
    }
    public function getOtherAccount($bank_id, $account_id, $view_id, $other_account_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts/'.$other_account_id);
    }
    public function getOtherAccounts($bank_id, $account_id, $view_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function getProduct($bank_id, $product_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/products/'.$product_id);
    }
    public function getProducts($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/products');
    }
    public function getRegisterForm(){
      self::APIRequest("GET", 'Register');
    }
    public function getTransaction($bank_id, $account_id, $view_id, $transaction_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/transactions');
    }
    public function getTransactions($bank_id, $account_id, $view_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions');
    }
    public function getTransactionsMetadataType($bank_id, $account_id, $view_id, $transaction_id, $type){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type);
    }
    public function getTransactionsRequest($bank_id, $account_id, $view_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transaction-requests');
    }
    public function getTransactionsRequestTypes($bank_id, $account_id, $view_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transaction-request-types');
    }
    public function getUsers(){
      self::APIRequest("GET", 'api/user');
    }
    public function getViews($bank_id){
      self::APIRequest("GET", 'api/banks/'.$bank_id.'/views');
    }
    public function getWeb(){
      self::APIRequest("GET", '');
    }

    public function postAtms($bank_id){
      self::APIRequest("POST". 'api/banks/'.$bank_id.'/atms');
    }
    public function postBanks(){
      self::APIRequest("POST". 'api/banks');
    }
    public function postBranches($bank_id){
      self::APIRequest("POST". 'api/banks/'.$bank_id.'/branches');
    }
    public function postCustomers($bank_id){
      self::APIRequest("POST". 'api/banks/'.$bank_id.'/customers');
    }
    public function postMessages($bank_id){
      self::APIRequest("POST". 'api/banks/'.$bank_id.'/messages');
    }
    public function postMetadata(){
      self::APIRequest("POST". 'api/metadata');
    }
    public function postOtherAccounts($bank_id, $account_id, $view_id){
      self::APIRequest("POST". 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function postProducts($bank_id){
      self::APIRequest("POST". 'api/banks/'.$bank_id.'/products');
    }

    public function putAccount($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts');
    }
    public function putAccountID($bank_id, $account_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id);
    }
    public function putAtm($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/atms');
    }
    public function putAtmID($bank_id, $atm_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/atms/'.$atm_id);
    }
    public function putBank(){
      self::APIRequest("PUT", 'api/banks');
    }
    public function putBankID($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id);
    }
    public function putBranch($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/branches');
    }
    public function putBranchID($bank_id, $branch_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/branches/'.$branch_id);
    }
    public function putCustomer($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/customers');
    }
    public function putCustomerID($bank_id, $customer_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/customers/'.$customer_id);
    }
    public function putMessage($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/messages');
    }
    public function putMessageID($bank_id, $message_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/messages/'.$message_id);
    }
    public function putMessageIDtoCustomer($bank_id, $customer_id, $message_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/customer/'.$customer_id.'/messages/'.$message_id);
    }
    public function putMessageToCustomer($bank_id, $customer_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/customer/'.$customer_id.'/messages');
    }
    public function putMetadata(){
      self::APIRequest("PUT", 'api/metadata');
    }
    public function putOtherAccount($bank_id, $account_id, $view_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function putOtherAccountID($bank_id, $account_id, $view_id, $other_account_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function putProduct($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/products');
    }
    public function putProductID($bank_id, $product_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/products/'.$product_id);
    }
    public function putTransactions($bank_id, $account_id, $view_id, $transaction_id, $type){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type);
    }
    public function putTransactionsRequest($bank_id, $type){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/transaction-request-types/'.$type.'/transaction-requests');
    }
    public function putTransactionsRequestAccount($bank_id, $account_id, $view_id, $type){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transaction-request-types/'.$type.'/transaction-requests');
    }
    public function putUser(){
      self::APIRequest("PUT", 'api/user');
    }
    public function putUserID($user_id){
      self::APIRequest("PUT", 'api/user/'.$user_id);
    }
    public function putView($bank_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/views');
    }
    public function putViewAccount($bank_id, $account_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/views');
    }
    public function putViewID($bank_id, $view_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/views/'.$view_id);
    }
    public function putViewIDAccount($bank_id, $account_id, $view_id){
      self::APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/views/'.$view_id);
    }

}

?>
