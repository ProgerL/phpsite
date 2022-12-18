<?php
$title = 'about us';
require "blocks/header.php";
?>
<!-- <div class="container mt"> -->
    <h1>About ass</h1>

    <form action="/check_post.php" method="POST">
        <input type="name" name="username" placeholder="enter name" class="form-control"><br>
        <input type="email" name="email" placeholder="enter email" class="form-control"><br>
        <input type="password" name="password" placeholder="enter password" class="form-control"><br>
        <textarea type="message" name="message" class="form-control" placeholder="enter message"></textarea><br>
        <input type="submit" value="Send" class="btn btn-success">

    </form>

<?php
require "blocks/footer.php"
?>
<!-- </div> -->