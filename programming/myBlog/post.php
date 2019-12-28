<?php
	require_once '/var/www/html/myBlog/model/posts.php';


    /*объяснить подробнее*/
	if(!isset($_GET['id'])) { //understand
		header('location: /'); //what for ?
    }
    $arr2 = post($_GET['id']);

    require_once '/var/www/html/myBlog/view/post.php';




