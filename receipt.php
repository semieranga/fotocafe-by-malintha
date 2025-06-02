 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Receipt</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .receipt {
      background: #fff;
      padding: 20px 30px;
      border: 2px solid #000;
      width: 350px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .receipt h2 {
      text-align: center;
      margin-bottom: 10px;
    }

    .receipt p.thank-you {
      text-align: center;
      font-style: italic;
      margin-bottom: 20px;
    }

    .receipt .field {
      margin: 8px 0;
    }

    .receipt .field span {
      font-weight: bold;
    }

    .download-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 20px;
      padding: 10px 15px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
      text-decoration: none;
    }

    .download-btn i {
      margin-right: 8px;
    }

    .download-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="receipt" id="receipt">
  <h2>Receipt</h2>
  <p class="thank-you">Thank you!</p>
  <div class="field"><span>Name:</span> John Doe</div>
  <div class="field"><span>Service:</span> Wedding Photography</div>
  <div class="field"><span>Date:</span> 2025-06-15</div>
  <div class="field"><span>Time:</span> 3:00 PM</div>
  <div class="field"><span>Place:</span> Colombo</div>
  <div class="field"><span>Price:</span> Rs. 25,000</div>

  <button class="download-btn" onclick="downloadReceipt()">
    <i class="fa fa-download"></i> Download
  </button>
</div>

<script>
  function downloadReceipt() {
  const element = document.getElementById('receipt');
  const button = document.querySelector('.download-btn');

  // Hide the button before download
  button.style.display = 'none';

  const opt = {
    margin:       0.5,
    filename:     'receipt.pdf',
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 2 },
    jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
  };

  html2pdf().set(opt).from(element).save().then(() => {
    // Show the button again after download
    button.style.display = 'flex';
  });
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

</body>
</html>
