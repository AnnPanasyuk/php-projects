<?php
    function posts($number = 1) {
        $str_for_posts = file_get_contents('/var/www/html/myBlog/model/date.txt');
        $date_for_posts = explode("|",$str_for_posts);
	    $posts = [];
        for ($i = 0; $i < $number; $i++) {
            for ($j = 0; $j < count($date_for_posts); $j++) {
                $posts[] = [
                    'title' => $date_for_posts[$j],
                    'body' => $date_for_posts[$j+1],
                    'author' => $date_for_posts[$j+2]
                ];
                $j = $j + 2;
            }
        }
        return $posts;
    }

    function post($id) {
        $str_for_posts = file_get_contents('/var/www/html/myBlog/model/date.txt');
        $date_for_posts = explode("|",$str_for_posts);
        for ($j = 0; $j < (count($date_for_posts) / 9); $j++) {
            $arr2[] = [
                'title' . $id => $date_for_posts[$id * 3 + $j],
                'body' . $id => $date_for_posts[$id * 3 + $j+1],
                'author' . $id => $date_for_posts[$id * 3 + $j+2],
            ];
            $j = $j + 2;
        }
        return $arr2;
	}

?>