<?php

namespace App\CustomStuffs;

class EncryptionClass
{
    public $ENCRYPTION_KEY = 'waysaheadglobaldemo123';
    public $ENCRYPTION_ALGORITHM = 'AES-256-CBC';
    
    public function encryptString($string){
        // BEGIN FUNCTIONS ***************************************************************** 
        // This function encrypts the data passed into it and returns the cipher data with the IV embedded within it.
        // The initialization vector (IV) is appended to the cipher data with 
        // the use of two colons serve to delimited between the two.
        // global $ENCRYPTION_KEY;
        $EncryptionKey = base64_decode($this->ENCRYPTION_KEY);
        $InitializationVector  = openssl_random_pseudo_bytes(openssl_cipher_iv_length($this->ENCRYPTION_ALGORITHM));
        $EncryptedText = openssl_encrypt($string, $this->ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
        $encryptedData = base64_encode($EncryptedText . '::' . $InitializationVector);
        return $encryptedData;
    }

    public function decryptString($string){
        // BEGIN FUNCTIONS ***************************************************************** 
        // and returns the clear text (unencrypted) data.
        // The initialization vector (IV) is appended to the cipher data by the EncryptThis function (see above).
        // There are two colons that serve to delimited between the cipher data and the IV.
        global $ENCRYPTION_ALGORITHM;
        $EncryptionKey = base64_decode($this->ENCRYPTION_KEY);
        list($Encrypted_Data, $InitializationVector ) = array_pad(explode('::', base64_decode($string), 2), 2, null);
        return openssl_decrypt($Encrypted_Data, $this->ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
    }
}