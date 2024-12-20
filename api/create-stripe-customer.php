<?php
require '../vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51MPGQtKYbFmGi644nIDwNr4SpbgdCG2FOkJwtRnfcAQ7qpDNcMAKbdbY3jjjPLpl6eTI5G9kFtJo8SlaHPW18K1i00OfcXShCM');

$name = $_POST['name'];
$email = $_POST['email'];

try {
  $customer = \Stripe\Customer::create([
    'name' => $name,
    'email' => $email
  ]);

  echo $customer -> id;
}
catch (\Stripe\Exception\ApiErrorException $e) {
  echo $e -> getMessage();
}
?>