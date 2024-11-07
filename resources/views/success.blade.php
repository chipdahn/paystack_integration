<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
</head>
<body>
    <h1>Payment Successful</h1>
    <p>Thank you for your payment!</p>
    <p>Transaction Details:</p>
    <ul>
        <li>Amount: {{ number_format($paymentDetails['data']['amount'] / 100, 2) }} NGN</li>
        <li>Email: {{ $paymentDetails['data']['customer']['email'] }}</li>
        <li>Transaction ID: {{ $paymentDetails['data']['id'] }}</li>
        <li>Status: {{ $paymentDetails['data']['status'] }}</li>
    </ul>
</body>
</html>