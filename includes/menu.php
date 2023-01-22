<ul class="nav__list grid">
    
    
    
    <?php
        if(isset($_SESSION['status'])){
            echo ' 
            <li class="nav__item">
            <a href="#" class="nav__link">
                <i class="uil uil-signin nav__icon"></i> 
            </a>
            </li>
            ';
        }
        else{
            echo '<li class="nav__item"><a href="login.php" class="nav__link"><i class="uil uil-signin nav__icon"></i>Login</a></li>';
        }
    ?>
    <li class="nav__item">
        <a href="viewcart.php" class="nav__link">
            <i class="uil uil-shopping-cart-alt nav__icon"></i> Cart
        </a>
    </li>
    <?php
        if(isset($_SESSION['status'])){
            echo 
            ' 
            <li class="nav__item">
            <a href="logout.php" class="nav__link">
                <i class="uil uil-signout nav__icon"></i> Logout
            </a>
            </li>
            ';
        }
    ?>
</ul>