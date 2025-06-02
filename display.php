 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Details</title>
   <link rel="stylesheet" href="display.css">
  </head>
<body>

  <div class="booking-form">
    <h2>Booking Details</h2>
     
    <form id="bookingForm">
        <label>Service:</label>
      <input type="text" name="service" required>

       <label>Price:</label>
      <input type="number" name="price" required>

      <label>Date:</label>
      <input type="date" name="date" required>

       <label>Time:</label>
      <input type="time" name="time" required>
      
      <label>Place:</label>
      <input type="text" name="place" required>
    
 
      

      <button type="submit" class="send-button"><a href="payment.html">Confirm</a></button>
    </form>
    <div id="message"></div>
  </div>
  <!-- <div class="info-box" id="infoBox">
  <p>After submission, your request will be reviewed by the admin.<br>
  You will be notified whether it is <strong>Accepted</strong> or <strong>Rejected</strong>.</p>
</div> -->

<!-- 
  <script>
    document.getElementById("bookingForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Stop form submission
      document.getElementById("message").textContent = "Pending your request";
    });
  </script> -->

</body>
</html>