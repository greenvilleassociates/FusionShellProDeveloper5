<?php

@unlink('update_appkey.php');

//Required to autoload the namespaces
require_once 'vendor/autoload.php';

//Generate APP_KEY and store it in .env file
$key = \Defuse\Crypto\Key::createNewRandomKey();
$appsecret = $key->saveToAsciiSafeString();

echo '<appsecret>'.$appsecret.'</appsecret>';


//Generate private/public keypair using openssl functions
$key = openssl_pkey_new([
	'digest_alg' => 'aes256',
	'private_key_type' => \OPENSSL_KEYTYPE_RSA,
	'encrypt_key' => false,
	'encrypt_key_cipher' => \OPENSSL_CIPHER_AES_256_CBC,
]);

// export private key
openssl_pkey_export($key, $priv_key);

// export public key
$keyData = openssl_pkey_get_details($key);

$public_key = $keyData['key'];
$private_key = $priv_key;

echo '<publickey>'.$public_key.'</publickey>';
echo '<privatekey>'.$private_key.'</privatekey>';

?>
