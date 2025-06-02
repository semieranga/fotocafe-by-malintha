<!-- admin-panel/dashboard.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7ecec;
      color: #333;
    }
    .header {
      background-color: #a9c3eb;
      padding: 20px;
      box-shadow: 0 2px 4px rgba(230, 14, 14, 0.034);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .header h1 {
      margin: 0;
    }
    .header nav a {
      margin-left: 15px;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }
    main {
      padding: 20px;
    }
    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    .card, .form-card, .table-card {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(243, 241, 241, 0.897);
      margin-bottom: 20px;
    }
    .card h3, .form-card h3, .table-card h3 {
      margin-top: 0;
      color: #070707;
    }
    .btn {
      padding: 6px 12px;
      margin-left: 5px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .btn.accept { background-color: #4CAF50; color: white; }
    .btn.reject { background-color: #f44336; color: white; }
    .btn.edit { background-color: #2196F3; color: white; }
    .btn.delete { background-color: #e91e63; color: white; }
    input, textarea {
      width: 100%;
      padding: 8px;
      margin: 6px 0 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table, th, td {
      border: 1px solid #ddd;
    }
    th, td {
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f0f0f0;
    }
    img.preview {
      width: 100px;
      height: auto;
      border-radius: 4px;
    }
    .payment-success {
      background-color: #dff0d8;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #d6e9c6;
      border-radius: 4px;
      color: #3c763d;
    }
    td,p,span{
      color: rgb(10, 10, 10);
    }
    
    
  </style>
</head>
<body>
  <header class="header">
    <h1>Admin Panel</h1>
    <nav>
      <a href="#dashboard">Dashboard</a>
      <a href="#bookings">Bookings</a>
      <a href="#services">Services</a>
      <a href="#gallery">Gallery</a>
      <a href="#payments">Payments</a>
    </nav>
  </header>

  <main>
    <!-- Dashboard -->
    <section id="dashboard">
      <h2>Dashboard</h2>
      <div class="card-container">
        <div class="card">
          <h3>Total Bookings</h3>
          <p>152</p>
        </div>
        <div class="card">
          <h3>Accepted Bookings</h3>
          <p>120</p>
        </div>
        <div class="card">
          <h3>Pending Bookings</h3>
          <p>32</p>
        </div>
        <div class="card">
          <h3>Total Payments</h3>
          <p>Rs. 340,000</p>
        </div>
      </div>
    </section>

    <!-- Bookings -->
    <section id="bookings">
      <h2>Manage Bookings</h2>
      <div class="table-card">
        <table>
          <thead>
            <tr>
              <th>Booking ID</th>
              <th>Username</th>
              <th>Date</th>
              <th>Time</th>
              <th>Location</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1001</td>
              <td>John Doe</td>
              <td>2025-06-10</td>
              <td>10:00 AM</td>
              <td>Colombo</td>
              <td>Pending</td>
              <td>
                <button class="btn accept">Accept</button>
                <button class="btn reject">Reject</button>
              </td>
            </tr>
            <tr>
              <td>1002</td>
              <td>Jane Smith</td>
              <td>2025-06-11</td>
              <td>2:00 PM</td>
              <td>Kandy</td>
              <td>Pending</td>
              <td>
                <button class="btn accept">Accept</button>
                <button class="btn reject">Reject</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Services -->
    <section id="services">
      <h2>Services</h2>
      <div class="form-card">
        <h3>Add New Service</h3>
        <form>
          <input type="text" placeholder="Service Name" required>
          <input type="url" placeholder="Image URL" required>
          <input type="number" placeholder="Price (Rs)" required>
          <button class="btn accept" type="submit">Add Service</button>
        </form>
      </div>
      <div class="card">
        <div class="service-item">
          <img src="https://via.placeholder.com/100" alt="Service Image" class="preview">
          <span>Wedding Package - Rs. 50,000</span>
          <div>
            <button class="btn edit">Edit</button>
            <button class="btn delete">Delete</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section id="gallery">
      <h2>Gallery</h2>
      <div class="form-card">
        <h3>Add Gallery Image</h3>
        <form>
          <input type="text" placeholder="Image Title" required>
          <input type="url" placeholder="Image URL" required>
          <button class="btn accept" type="submit">Add Image</button>
        </form>
      </div>
      <div class="card">
        <div class="gallery-item">
          <img src="https://via.placeholder.com/100" alt="Gallery Image" class="preview">
          <span>Outdoor Portrait</span>
          <div>
            <button class="btn edit">Edit</button>
            <button class="btn delete">Delete</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Payments -->
    <section id="payments">
      <h2>Payments</h2>
      <div class="payment-success">
        Payment was successful.
        <a href="receipt.pdf" target="_blank" rel="noopener noreferrer">Get Receipt</a>
      </div>
      <div class="table-card">
        <table>
          <thead>
            <tr>
              <th>Payment ID</th>
              <th>Customer</th>
              <th>Amount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>PMT001</td>
              <td>John Doe</td>
              <td>Rs. 25,000</td>
              <td>2025-05-01</td>
            </tr>
            <tr>
              <td>PMT002</td>
              <td>Jane Smith</td>
              <td>Rs. 35,000</td>
              <td>2025-05-05</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>
</body>
</html>
