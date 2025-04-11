<div>
    <form class="create_post_form" action="./models/create_post.php" method="POST">
        <textarea class="create_post_area" name="create_post_content" id="create_post_content" placeholder="Share Here!!" required></textarea>
        <input type="submit" value="POST">
    </form>
</div>

<?php
require "./models/dbconnection.php";

$con = create_connection();

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

// Fetch posts
$sql_posts = "SELECT `user`.`firstname`, 
                     `user`.`lastname`, 
                     `post`.`text_content`, 
                     `post`.`date`, 
                     `post`.`time`, 
                     `post`.`uid`, 
                     `post`.`pid` 
              FROM `post` 
              INNER JOIN `user` 
              ON `user`.`uid` = `post`.`uid` 
              ORDER BY `post`.`pid` DESC";

$result_posts = $con->query($sql_posts);

while ($row = $result_posts->fetch_assoc()) {
    echo "<div class='post'>";
    echo "<h3>" . $row['firstname'] . " " . $row['lastname'] . "</h3>";
    echo "<p>" . $row['date'] . " " . $row['time'] . "</p>";
    echo "<p>" . $row['text_content'] . "</p>";

    // Comment form for each post
    echo "<form class='comment_form' action='./models/create_comment.php' method='POST'>";
    echo "<textarea name='comment_text' placeholder='Write a comment...' required></textarea>";
    echo "<input type='hidden' name='post_id' value='" . $row['pid'] . "'>";
    echo "<input type='submit' value='Comment'>";
    echo "</form>";

    // Fetch comments for this post
    $sql_comments = "SELECT `user`.`firstname`, 
                            `user`.`lastname`, 
                            `comment`.`text_content`, 
                            `comment`.`date`, 
                            `comment`.`time` 
                     FROM `comment` 
                     INNER JOIN `user` 
                     ON `user`.`uid` = `comment`.`uid` 
                     WHERE `comment`.`post_id` = " . $row['pid'] . " 
                     ORDER BY `comment`.`cid` ASC";

    $result_comments = $con->query($sql_comments);

    while ($comment = $result_comments->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<p><strong>" . $comment['firstname'] . " " . $comment['lastname'] . "</strong></p>";
        echo "<p>" . $comment['date'] . " " . $comment['time'] . "</p>";
        echo "<p>" . $comment['text_content'] . "</p>";
        echo "</div>";
    }

    echo "</div>";
}

$con->close();
?>