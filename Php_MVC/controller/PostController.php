<?php
require_once "model/Post_m.php";

class PostController
{
    public function index()
    {
        $post = new Post_m();
        $listPost = $post->getAll();
        if (isset($_POST['btnDelete'])) {
            $input = $_POST['id'];
            $post = new Post_m();
            $listPost = $post->del($input);
            header('Location:http://localhost/Php_MVC/?controller=post');
            exit();
        } elseif (isset($_POST['btnSearch'])) {
            if ($_POST['search_id'] != '') {
                $input = $_POST;
                $post = new Post_m();
                $listPost = $post->search($input['search_id']);
            }
        }
        include "view/post/list.php";
    }

    public function add()
    {
        $message = '';
        if (isset($_POST['btnSubmit'])) {
            if ($_POST['content'] != '') {
                $input = $_POST;
                $post = new Post_m();
                $listPost = $post->insert($input['content']);
                header('Location:http://localhost/Php_MVC/?controller=post');
                exit();
            } else {
                $message = '<h4 style="color:red;">Content is required</h4>';
            }
        }
        include "view/post/create.php";
    }

    public function edit()
    {
        if (isset($_POST['btnEdit'])) {
            if ($_POST['id'] != '') {
                $input = $_POST;
                $post = new Post_m();
                $listPost = $post->edit($input['id'], $input['content_new']);
                header('Location:http://localhost/Php_MVC/?controller=post');
                exit();
            }
        }
        if (isset($_GET['id'])) {
            $post = new Post_m();
            $item = $post->getbyId($_GET['id']);
        }
        include "view/post/edit.php";
    }

    public function search()
    {
        if (isset($_POST['btnSearch'])) {
            if ($_POST['id'] != '') {
                $input = $_POST;
                $post = new Post_m();
                $listPost = $post->search($input['id']);
            }
        }
        include "view/post/list.php";
    }
}

