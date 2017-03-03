<?php
session_start();
if (!isset($_SESSION["username"])){
    //$_SESSION["bananas"] = 1;
    //$_SESSION["recent_bunch"] = 1;
    echo "<p>Dear user, please log in.</p><form>Your name: <input type='text' name='cname'><br><input class='myButton' type='submit' value='Submit' onclick='createSession(this.form.cname.value)'></form>";
} else {



    echo "<p>Hi,".$_SESSION["username"].". Welcome Back.</p>";
}

?>