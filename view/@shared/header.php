<?php 
    function isActive($activeValue){
        return ($_SESSION["page"]===$activeValue)? "active":"";
    }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="./asset/jovo.png" width="30" height="30" class="d-inline-block align-top " alt="">
        Gestion de Personnel
    </a>
    <ul class="navbar-nav mr-auto pl-4">
        <li class="nav-item <?= isActive("listing")?> ">
            <a class="nav-link" href="index.php">List</a>
        </li>
        <li class="nav-item <?= isActive("add")?> ">
            <a class="nav-link" href="index.php?page=add">Add </a>
        </li>
    </ul>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>      