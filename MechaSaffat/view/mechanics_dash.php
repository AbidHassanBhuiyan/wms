<!DOCTYPE html>
<html>
<head>
  <title>Mechanic Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="style_mechanicdash.css">
</head>
<body>

  <header><img src="bikelogo.webp" alt="HTML5 Icon" width="128" height="128"><h1>Mechanic Portal</h1></header>
  <nav>
    <a href="#">Assigned Customers</a>
    <a href="#">Update Status</a>
    <a href="#">Service Notes</a>
    <a href="#">Spare Parts</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php"><p style="color: rgb(231, 56, 56);">Logout</p></a>
  </nav>

  <div class="container">

     <p style="text-align: center ;font-size: 2.5em;color: #1e3a8a;font-weight: bold;">Dashboard</p>
    <h2>View Assigned Customers</h2>
    <table>
      <tr>
        <th>Customer Name</th> 
        <th>Vehicle</th>
        <th>Service</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>taaz</td>
        <td>Bike - Gixxer 150</td>
        <td>Oil Change</td>
        <td>Not Done</td>
      </tr>
      <tr>
        <td>Erin</td>
        <td>scooty</td>
        <td>Brake Check</td>
        <td>Done</td>
      </tr>
    </table>

   
    <h2>Customer Serial</h2>
    <table>
      <tr>
        <th>Serial No</th>
        <th>Customer</th>
        <th>Service</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Rahim</td>
        <td>Oil Change</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Karim</td>
        <td>Brake Check</td>
      </tr>
    </table>

    
    <h2>Update Service Status</h2>
    <form>
      <label>Customer Name</label>
      <input type="text" placeholder="Enter customer name">
      
      <label>Status</label>
      <select>
        <option>Done</option>
        <option>Not Done</option>
      </select>
      
      <button type="submit">Update</button>
    </form>

   
    <h2>Add Service Notes</h2>
    <form>
      <label>Customer Name</label>
      <input type="text" placeholder="Enter customer name">
      
      <label>Notes</label>
      <textarea rows="3" placeholder="Write service notes..."></textarea>
      
      <button type="submit">Save Notes</button>
    </form>

   
    <h2>Previous Jobs</h2>
    <table>
      <tr>
        <th>Date</th>
        <th>Customer</th>
        <th>Service</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>2025-08-20</td>
        <td>Hasan</td>
        <td>Tire Replacement</td>
        <td>Done</td>
      </tr>
      <tr>
        <td>2025-08-22</td>
        <td>Mehedi</td>
        <td>Engine Check</td>
        <td>Done</td>
      </tr>
    </table>

   
    <h2>Request Spare Parts</h2>
    <form>
      <label>Part Name</label>
      <input type="text" placeholder="Enter part name">
      
      <label>Quantity</label>
      <input type="number" placeholder="Enter quantity">
      
      <button type="submit">Request</button>
    </form>

  </div>

</body>
</html>
