 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Service Booking</title>
  <link rel="stylesheet" href="booking.css">
</head>
<body>
  <div class="container">
    <div class="left-section">
      <h3>Please select service.</h3>
      <label for="service"> Service</label>
      <select id="service" name="service">
        <option value="">--Select a service--</option>
        <option value="wedding">Wedding Photography</option>
        <option value="Birthday">Birthday Photography</option>
        <option value="preshoot">Pre Shoot</option>
      </select>
    </div>

    <div class="right-section">
      <h3>Pick Date, Time and Place</h3>
      <label for="date">Calendar</label>
      <input type="date" id="date" name="date">

      <label for="time">Time</label>
      <select id="time" name="time">
        <option value="">--Select time--</option>
        <option value="morning">Morning</option>
        <option value="afternoon">Afternoon</option>
        <option value="evening">Evening</option>
      </select>

       <label for="place">Place</label>
      <select id="place" name="place">
        <option value="">--Select Distric--</option>
        <option value="place1">Anuradhapura</option>
        <option value="place2">Kandy</option>
        <option value="place3">Badulla</option>
        <option value="place4">Nuwara-Eli</option>
        <option value="place5">Rathnapura</option>
      </select>

      <button type="submit"><a href="display.html">Continue</a></button>
    </div>
  </div>
</body>
</html>
