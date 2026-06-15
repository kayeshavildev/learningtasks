<html>
    <head>
        <title>Activity 02</title>
    </head>
    <body>
        <?php
            if(isset($_POST['btsSubmit'])){
                echo "the name you entered is <strong>". $_POST['txtName']."/strong><br>";
                echo "<a href='activity_02.php'>Back</a>";
        } else {
        ?>     
        <form method="post" action="activity_02.php">
            <label for="txtName">Name:</label><br>
            <input type="text" name="txtName" id="txtName" placeholder="Enter your name..."><br>
            <input type="submit" name="btsSubmit" value="Submit" />
        </form>
    </body>
</html>