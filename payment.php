 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Credit Card Payment</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f0f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .payment-form {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      width: 350px;
    }

    .payment-form h2 {
      margin-bottom: 20px;
      font-size: 22px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #555;
      font-weight: 500;
    }

    input {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    .flex-group {
      display: flex;
      gap: 10px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #0070f3;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #005bb5;
    }
    a{
      text-decoration: none;
      color: white;
    }
  </style>
</head>
<body>

  <form class="payment-form">
    <h2>Credit Card Payment</h2>

    <div class="form-group">
      <label for="cardholder">Cardholder Name</label>
      <input type="text" id="cardholder" name="cardholder" placeholder="John Doe" required>
    </div>

    <div class="form-group">
      <label for="cardnumber">Card Number</label>
      <input type="text" id="cardnumber" name="cardnumber" maxlength="16" placeholder="1234 5678 9012 3456" required>
    </div>

    <div class="flex-group">
      <div class="form-group" style="flex:1;">
        <label for="expiry">Expiry Date</label>
        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
      </div>

      <div class="form-group" style="flex:1;">
        <label for="cvv">CVV</label>
        <input type="password" id="cvv" name="cvv" maxlength="4" placeholder="123" required>
      </div>
    </div>

    <button type="submit"><a href="message.html">Pay Now</a></button>
  </form>

</body>
</html>
