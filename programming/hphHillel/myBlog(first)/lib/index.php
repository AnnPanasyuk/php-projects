<?php
		
    require_once '/var/www/html/my_blog_project/myBlog(first)/model/posts.php';

    var_dump($_GET);
    $link_name = 'link';

    $post = new Post();
	$posts = $post->getPosts();


	require_once '/var/www/html/my_blog_project/myBlog(first)/view/index.php';