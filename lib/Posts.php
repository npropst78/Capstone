<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/14/2014
 * Time: 3:00 AM
 */


include_once "connect.php";

class Posts {


    //Method for getting to Posts to edit.
    function EditPosts() {

        $clicked = $_POST['clicked'];

        $connect = new connect();
        $data = $connect->con();

        $query = $data->query("SELECT id, Title, Author, Content, Date FROM capstone_posts.posts");


            while($row = $query->fetch_assoc()) {

                if($clicked == $row['id']){
                    echo "<input type='hidden' name='id' value='" . $row['id'] . " ' />";
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

    // Method for editing the Post
    function InsertEdit() {


        $id = $_POST['id'];

        $connect = new connect();
        $data = $connect->con();

        $content = mysqli_real_escape_string($data ,$_POST['content']);
        $title = mysqli_real_escape_string($data ,$_POST['title']);
        $author = mysqli_real_escape_string($data ,$_POST['author']);


        if (!empty($title) && !empty($content) && !empty($author)){

            $data->query("UPDATE capstone_posts.posts SET Title = '$title', Content = '$content', Author = '$author' WHERE id = '$id'");
            echo mysqli_error($data);
            echo "Update Successful. You will be redirected in five seconds.";
            $data->close();
            header("Refresh: 5; Gateway.php");

        } else {
            echo "<p>Query Failed. You will be redirected in five seconds.</p>";
            $data->close();
            header("Refresh: 5; Gateway.php");
        }
    }

    // Method for Adding a new post
    function AddPost() {

        date_default_timezone_set("America/Chicago");

        $connect = new connect();
        $data = $connect->con();

        //functionality for the addition of posts.
        $title = mysqli_real_escape_string($data, $_POST['title']);
        $author =  mysqli_real_escape_string($data, $_POST['author']);
        $content =  mysqli_real_escape_string($data, $_POST['content']);
        $date =  mysqli_real_escape_string($data, $_POST['date']);


        if (!empty($title) && !empty($author) && !empty($content) && !empty($date)){

            $data->query("INSERT INTO capstone_posts.posts (Title, Author, Content, Date) VALUES ('$title','$author','$content','$date') ");
            echo "Success! You will be redirected in five seconds";
            $data->close();
            header("Refresh: 5; Gateway.php");

        } elseif (empty($title) || empty($author) || empty($content) || empty($date)){
            echo "Sorry there was an error, you will be redirected in five seconds.";
            $data->close();
            header("Refresh: 5; Gateway.php");
        }
    }



} 