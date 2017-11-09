<?php

/*
 *       _______________________________________________________
 *	|                                                       |
 *	|   National Bank of Greece (NBG) API Library in PHP.	|
 *	|_______________________________________________________|
 *
 *		Created on : October 21, 2017, 02:06:20 PM
 *		Author	   : Alexandros Bourlivas
 *
 */

class NBGiBankAPI {
	
	var $apikey;	// Required
	var $track_id;	// Optional
	var $apn;	// Optional
	var $auth_id;	// Optional
	
	function __construct($apikey, $track_id, $apn, $auth_id){
		$this->apikey = $apikey;
		$this->track_id = $track_id;
		$this->apn = $apn;
		$this->auth_id = $auth_id;
	}

	protected function APIRequest($method, $api){

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_HTTPHEADER  => array('Ocp-Apim-Subscription-Key: '.$this->apikey, 'Track-ID: '.$this->track_id, 'Auth-Provider-Name: '.$this->apn, 'Auth-ID: '.$this->auth_id,/* 'Content-Length: '.strlen(null)*/),
			CURLOPT_URL => 'https://nbgdemo.azure-api.net/nodeopenapi/'.$api,
			CURLOPT_CUSTOMREQUEST => $method
		));
		$result = curl_exec($curl);
		curl_close($curl);
	}
	
    public function deleteAccounts($bank_id, $account_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id);
    }
    public function deleteAtms($bank_id, $atm_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/atms/'.$atm_id);
    }
    public function deleteBanks($bank_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id);
    }
    public function deleteBranches($bank_id, $branch_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/branches/'.$branch_id);
    }
    public function deleteCustomers($bank_id, $customer_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/customers/'.$customer_id);
    }
    public function deleteMessanges($bank_id, $message_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/messages/'.$message_id);
    }
    public function deleteMetadata(){
      $this->APIRequest("DELETE", 'api/metadata');
    }
    public function deleteOtherAccounts($bank_id, $account_id, $view_id, $other_account_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts/'.$other_account_id);
    }
    public function deleteProducts($bank_id, $product_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/products/'.$product_id);
    }
    public function deleteTransactionType($bank_id, $account_id, $view_id, $transaction_id, $type){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type);
    }
    public function deleteTransactionTypeID($bank_id, $account_id, $view_id, $transaction_id, $type, $type_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type.'/'.$type_id);
    }
    public function deleteView($bank_id, $view_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/views/'.$view_id);
    }
    public function deleteViewAccount($bank_id, $account_id, $view_id){
      $this->APIRequest("DELETE", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/views/'.$view_id);
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getAccount($bank_id, $account_id, $view_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/account');
    }
    public function getAccountIDfromIBAN($iban){
      $this->APIRequest("GET", 'api/accounts/getid/'.$iban);
    }
    public function getAccounts($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts');
    }
    public function getAccountsAllBanksPrivatePublic($private_public){
      $this->APIRequest("GET", 'api/accounts/'.$private_public);
    }
    public function getAccountsPrivatePublic($bank_id, $private_public){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$private_public);
    }
    public function getAccountsScope($bank_id, $account_id, $view_id, $scope){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/'.$scope);
    }
    public function getAtm($bank_id, $atm_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/atms/'.$atm_id);
    }
    public function getAtms($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/atms');
    }
    public function getBank($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id);
    }
    public function getBanks(){
      $this->APIRequest("GET", 'api/banks/');
    }
    public function getBranch($bank_id, $branch_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/branches/'.$branch_id);
    }
    public function getBranches($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'branches');
    }
    public function getCustomer($bank_id, $customer_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/customers/'.$customer_id);
    }
    public function getCustomerOwner($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/customer');
    }
    public function getCustomers($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/customers');
    }
    public function getMessage($bank_id, $message_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/messages/'.$message_id);
    }
    public function getMessages($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/messages');
    }
    public function getMessagesOwner($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/customer/messages');
    }
    public function getMetadata(){
      $this->APIRequest("GET", 'api/metadata');
    }
    public function getOtherAccount($bank_id, $account_id, $view_id, $other_account_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts/'.$other_account_id);
    }
    public function getOtherAccounts($bank_id, $account_id, $view_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function getProduct($bank_id, $product_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/products/'.$product_id);
    }
    public function getProducts($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/products');
    }
    public function getRegisterForm(){
      $this->APIRequest("GET", 'Register');
    }
    public function getTransaction($bank_id, $account_id, $view_id, $transaction_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/transactions');
    }
    public function getTransactions($bank_id, $account_id, $view_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions');
    }
    public function getTransactionsMetadataType($bank_id, $account_id, $view_id, $transaction_id, $type){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type);
    }
    public function getTransactionsRequest($bank_id, $account_id, $view_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transaction-requests');
    }
    public function getTransactionsRequestTypes($bank_id, $account_id, $view_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transaction-request-types');
    }
    public function getUsers(){
      $this->APIRequest("GET", 'api/user');
    }
    public function getViews($bank_id){
      $this->APIRequest("GET", 'api/banks/'.$bank_id.'/views');
    }
    public function getWeb(){
      $this->APIRequest("GET", '');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function postAtms($bank_id){
      $this->APIRequest("POST", 'api/banks/'.$bank_id.'/atms');
    }
    public function postBanks(){
      $this->APIRequest("POST", 'api/banks');
    }
    public function postBranches($bank_id){
      $this->APIRequest("POST", 'api/banks/'.$bank_id.'/branches');
    }
    public function postCustomers($bank_id){
      $this->APIRequest("POST", 'api/banks/'.$bank_id.'/customers');
    }
    public function postMessages($bank_id){
      $this->APIRequest("POST", 'api/banks/'.$bank_id.'/messages');
    }
    public function postMetadata(){
      $this->APIRequest("POST", 'api/metadata');
    }
    public function postOtherAccounts($bank_id, $account_id, $view_id){
      $this->APIRequest("POST", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function postProducts($bank_id){
      $this->APIRequest("POST", 'api/banks/'.$bank_id.'/products');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function putAccount($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts');
    }
    public function putAccountID($bank_id, $account_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id);
    }
    public function putAtm($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/atms');
    }
    public function putAtmID($bank_id, $atm_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/atms/'.$atm_id);
    }
    public function putBank(){
      $this->APIRequest("PUT", 'api/banks');
    }
    public function putBankID($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id);
    }
    public function putBranch($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/branches');
    }
    public function putBranchID($bank_id, $branch_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/branches/'.$branch_id);
    }
    public function putCustomer($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/customers');
    }
    public function putCustomerID($bank_id, $customer_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/customers/'.$customer_id);
    }
    public function putMessage($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/messages');
    }
    public function putMessageID($bank_id, $message_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/messages/'.$message_id);
    }
    public function putMessageIDtoCustomer($bank_id, $customer_id, $message_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/customer/'.$customer_id.'/messages/'.$message_id);
    }
    public function putMessageToCustomer($bank_id, $customer_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/customer/'.$customer_id.'/messages');
    }
    public function putMetadata(){
      $this->APIRequest("PUT", 'api/metadata');
    }
    public function putOtherAccount($bank_id, $account_id, $view_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function putOtherAccountID($bank_id, $account_id, $view_id, $other_account_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/other_accounts');
    }
    public function putProduct($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/products');
    }
    public function putProductID($bank_id, $product_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/products/'.$product_id);
    }
    public function putTransactions($bank_id, $account_id, $view_id, $transaction_id, $type){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transactions/'.$transaction_id.'/metadata/'.$type);
    }
    public function putTransactionsRequest($bank_id, $type){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/transaction-request-types/'.$type.'/transaction-requests');
    }
    public function putTransactionsRequestAccount($bank_id, $account_id, $view_id, $type){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/'.$view_id.'/transaction-request-types/'.$type.'/transaction-requests');
    }
    public function putUser(){
      $this->APIRequest("PUT", 'api/user');
    }
    public function putUserID($user_id){
      $this->APIRequest("PUT", 'api/user/'.$user_id);
    }
    public function putView($bank_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/views');
    }
    public function putViewAccount($bank_id, $account_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/views');
    }
    public function putViewID($bank_id, $view_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/views/'.$view_id);
    }
    public function putViewIDAccount($bank_id, $account_id, $view_id){
      $this->APIRequest("PUT", 'api/banks/'.$bank_id.'/accounts/'.$account_id.'/views/'.$view_id);
    }

}

?>
