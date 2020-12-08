<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "*******");
    define("PayPalSecret", "*******");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "AZ_SWbrgvGDG7wxhXH7MVAtpVWoVxkOx07ZaSl5JBSvn2V2JeTa_h3VXtdF9FORHan_-KbEahENzVLyq");
    define("PayPalSecret", "EBDvT4N0m_ToI-ruJQhNq-AlwtmlpYedpq36ATn5bSEKQN-sc4LNhZK9rbYFg6IxC483-aSb2slgiILP");
    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
    define("PayPalENV", "sandbox");
}
?>