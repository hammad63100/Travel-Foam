<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Foam</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to Logical Creation Trip</h2>
        <p>Enter Your details to Confirm your set</p>
        <form action="main.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            
            <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input type="text" name="fatherName" id="fatherName" required>
            </div>
            
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="PhoneNo">Phone Number</label>
                <input type="Phone" name="PhoneNo" id="PhoneNo" required>
            </div>
            
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender" required>
            </div>
            <div class="form-group">
                <label for="textarea">Text Area</label>
                <textarea id="textarea"name="textarea"  class="textarea" cols="75" rows="10"  required >     </textarea>
            </div>

            <button type="submit">Submit Details</button>
        </form>
        
    </div>
</body>
<script src="script.js"></script>
</html>