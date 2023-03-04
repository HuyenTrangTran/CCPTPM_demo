<!DOCTYPE html>
<html lang = "vi">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="author" content="tranthihuyentrang" />
        <link href="C:/xampp/htdocs/lab2/site.css" rel="stylesheet" />
        <title>OOP PHP </title>
    </head>
    <body>
        <div id = "wrapper">
            <?php // IDEA:
            require_once("userclass.php");
            //create new user
            $huyentrangtran = new User ('huyentrangtran', 'trang@gmail.com');
            //output user info
            echo "<h2>---User info--</2>";
            echo "UserID: ".$huyentrangtran->GetUserID()."<br/>";
            echo "UserName: ".$huyentrangtran->GetUserName()."<br/>";
            //add more user
            $huyentrangmore = new User("Tran Thi A", "youremail@gmail.com");
            echo "<h2>--More user--</h2>";
            echo "User ID: ".$huyentrangmore->GetUserID()."<br/>";
            echo "UserName: ".$huyentrangmore->GetUserName()."br/>";
            ?>
        </div>
        <footer>
            $#169; 2023 - Huyen Trang Tran - Faculty Of Information Technology (HUTECH)
        </footer>
    </body>
</html>