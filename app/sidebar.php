<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/engineer.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['username'] . ' | ' . $_SESSION['devisi']; ?></a>
        </div>
    </div>
    <?php
    if ($_SESSION['devisi']=='admin'){
        include('menu/menu.php');
    }else{
        include('menu/user.php');
    }
     ?>
    <!-- Sidebar Menu -->
</div>