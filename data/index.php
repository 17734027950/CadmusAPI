<?php

    header('content-type:application/json');


    $title = empty($_POST['title'])?'':$_POST['title'];
    if(!$title){
        $title = empty($_GET['title'])?'':$_GET['title'];
    }

    $content = empty($_POST['content'])?'':$_POST['content'];
    if(!$content){
        $content = empty($_GET['content'])?'':$_GET['content'];
    }

    $array = array(
      'title' => $title,
      'content' => $content,
    );

    echo json_encode($array);

    die;