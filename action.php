<?php

require_once "vendor/autoload.php";
use App\classes\Calculator;
use App\classes\Series;
use App\classes\Product;
use App\classes\Blog;
use App\classes\Auth;

if (isset($_GET['page']))
{
    $result = '';
    if ($_GET['page'] == 'home')
    {
        $css = 'home';
        $title = 'Home';
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'calc')
    {
        $css = 'calc';
        $title = 'CALCULATOR';
        include 'pages/calculator.php';
    }
    elseif ($_GET['page'] == 'series')
    {
        $css = 'series';
        $title = 'SERIES';
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'product')
    {
        $css = 'calc';
        $title = 'Product';
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['page'] == 'detail')
    {
        $title = 'product Detail';
        $id = $_GET['id'];
        $product = new Product();
        $singleProduct=$product->getProductById($id);
        include 'pages/detail.php';
    }
    elseif ($_GET['page']== 'blog')
    {
        $css = 'blog';
        $title= 'Blog';
        $blog = new Blog();
        $blogs = $blog->getAllBlog();
        include 'pages/blog.php';
    }
    elseif ($_GET['page']=='rm_btn')
    {
        $title = 'Read More';
        $id = $_GET['id'];
        $blog = new Blog();
        $singleBlog=$blog->getAllBlogById($id);
        include "pages/readmore.php";
    }
    elseif ($_GET['page'] == 'login')
    {
        $css = 'login';
//        session_start();
        unset($_SESSION['id']);
        include "pages/login.php";
    }
    elseif ($_GET['page']=='logout')
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location: action.php?page=login');
    }
}
elseif (isset($_POST['btn_calc']))
{
    $title = 'CALCULATOR';
    $calValue = new Calculator($_POST);
    $result=$calValue->myCalc();
    include 'pages/calculator.php';
}

elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->mySeries();

    include 'pages/series.php';
}
elseif (isset($_POST['loginBtn']))
{
    $auth= new Auth($_POST);
    $message = $auth->loginCheck();
    include 'pages/login.php';
}

