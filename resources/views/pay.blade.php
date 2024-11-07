<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Payment</title>
</head>
<body>
    <h1>Pay with Paystack</h1>
    <form method="POST" action="{{ route('pay') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="amount">Amount (in Naira):</label>
        <input type="number" name="amount" required><br><br>

        <button type="submit">Proceed to Payment</button>
    </form>
</body>
</html>
