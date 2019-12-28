<?php
    require_once '/var/www/html/myBlog/model/posts.php';

	$posts = posts();
	$arr2 = post();

	require_once '/var/www/html/myBlog/view/index.php';
