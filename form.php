<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take User Info</title>
    <style>
        .container{
            display:grid;
            place-items: center;
        }
        </style>
</head>
<body>
    <div class="container">
    <h1> Enter Your Details</h2>

        <form action="operations.php" method="POST">

            <div>
                <label for="name">Name</label>
                <input type="text" name="name"  required>
            </div>
            <br></br>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <br></br>
            <div>
                <label for ="gender">Gender</label>
                <input type="text" name="gender" required>
           </div>
           <br></br>
            <div>
                <label for="dob">DOB</label>
                <input type="date" name="dob"  required>
            </div>
            <br></br>
            <div>
                <label for ="city">City</label>
                <input type="city" name="city" required>
           </div>
           <br></br>
           
            <button type="submit">Submit Data</button>
        </form>
    </div>
</body>
</html>