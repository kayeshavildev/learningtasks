<html>
    <head>
        <title>Activity 02</title>
    </head>
    <style text="text/css">
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
          <label>First Name</label><br>
          <strong><?php echo $_POST ["txtFirstName"] ?></strong><br>
          <label>Last Name</label><br>
          <strong><?php echo $_POST ["txtLastName"] ?></strong><br>
          <label>Status</label><br>
          <strong><?php echo $_POST ["status"] ?></strong><br>
          <label>DOB</label><br>
          <strong><?php echo $_POST ["txtDOB"] ?></strong><br>
          <label>Address</label><br>
          <strong><?php echo $_POST ["txtAreaAddress"] ?></strong><br>
          <a href="activity_03_post.php">Back</a>
       </form>
    </body>
</html>