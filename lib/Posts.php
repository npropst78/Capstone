<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/14/2014
 * Time: 3:00 AM
 */


include_once "connect.php";

class Posts {

    function EditPosts() {

        $clicked = $_POST['clicked'];

        $connect = new connect();
        $data = $connect->con();

        $query = $data->query("SELECT id, Title, Author, Content, Date FROM capstone_posts.posts");


            while($row = $query->fetch_assoc()) {

                if($clicked == $row['id']){
                    echo "<table>";
                    echo "<tr><td>Title: </td><td><input type='text' name='title' value='" . $row['Title'] . "'/></td></tr>";
                    echo "<tr><td>Author:</td><td><input type='text' name='author' value='" . $row['Author'] . "'/></td></tr>";
                    echo "<tr><td></td><td><textarea rows='20' cols='50' name='content'>" . $row['Content'] . "</textarea></td></tr>";
                    echo "<tr><td><input type='submit' name='submit' value='Submit'/></td></tr>";
                    echo "</table>";

                }

            }
        $data->close();
    }



    function InsertEdit() {



    }

} 