<html>
    <head>
        <title>Activity 03</title>
        <style type="text/css">
            .form-control {
                font-family: verdana;
            }
            .btn {
                background-color: blue;
                color: white;
            }
            .btn:hover {
                background-color: white;
                color: blue;
            }
        </style>
    </head>
    <body>
        <form method="post" action="activity_03_reciever.php">
            <label for="txtName">First name:</label><br>
            <input type="text" class="form-control" name="txtName" placeholder="First name..."><br>
            <label>Last name:</label><br>
            <input type="text" class="form-control" name="txtLastName" placeholder="Last name..."><br>
            <label>Status:</label><br>
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><br>
            <label>DOB:</label><br>
            <input type="date" class="form-control" name="txtDOB" placeholder="Last Name..."><br>
            <label>Address</label><br>
            <textarea rows="10" class="form-control" 
                cols="24" name="txtAddress" placeholder="Address..."></textarea><br>
            <input class="btn" type="submit" name="btsSubmit" value="Submit" />
            <input class="btn" type="reset" value="Clear" />
        </form>
    </body>
</html>