<?php
	require_once '/var/www/html/my_blog_project/myBlog(first)/model/posts.php';
	require_once '/var/www/html/my_blog_project/myBlog(first)/model/Request.php';

	$req = new Request();
    $arrayOfGet = $req->request('id');

	if(!isset($arrayOfGet)) {
		header('location: /my_blog_project/myBlog(first)/');
    }

    $postObj = new Post();
    $post = $postObj->getPost($arrayOfGet);

    require_once '/var/www/html/my_blog_project/myBlog(first)/view/post.php';
