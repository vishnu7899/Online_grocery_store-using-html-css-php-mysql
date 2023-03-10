<?php session_start();
    require('includes/config.php');
    $username = $_SESSION['unm'];
    $password = $_SESSION['uid'];
    $query = "select store_id, store_name from stores where store_username = '$username'";
    $result = mysqli_query($conn, $query);
    $final = mysqli_fetch_assoc($result);
    $id = $final['store_id'];
    $n = $final['store_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products | Grocery Store</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body class="grid">
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Grocery Store</a>
            <div class="nav__menu" id="nav-menu">
                <?php
                    include("includes/menu.php");
                ?>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main>
        <section class="category__title-container">
            <h1 class="category__title">
                Add Products
            </h1>
        </section>
        <section class="error">
        <?php
            if(isset($_GET['error']))
			{
				echo '<font color="red">'.$_GET['error'].'</font>';
				echo '<br><br>';
			}
								
			if(isset($_GET['ok']))
			{
				echo '<font color="blue">Product successfully added!</font>';
				echo '<br><br>';
			}
							
		?>
        </section>
        <section class="add_information-section">
            <form action="addproduct_process.php" method="post">
                <div class="add_information grid">
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                            Product Category ID
                        </h1>
                        <input type="number" name="product_catID" id="" placeholder="product_categoryID">
                    </div>
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                            Product Name
                        </h1>
                        <input type="text" name="product_name" id="" placeholder="product_name">
                    </div>
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                             Product Price
                        </h1>
                        <input type="text" name="product_price" id="" placeholder="product_price">
                    </div>
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                             Product Brand
                        </h1>
                        <input type="text" name="product_brand" id="" placeholder="product_brand">
                    </div>
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                             Product Image
                        </h1>
                        <input type="text" name="product_image" id="" placeholder="product_image">
                    </div>
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                             Product Section
                        </h1>
                        <input type="text" name="product_section" id="" placeholder="product_section">
                    </div>
                    <input type="hidden" name="store_id" value="<?php echo $id; ?>">
                </div>
                <input type="submit" value="Add Product" class="button">
            </form>
        </section>

    </main>
    <footer class="footer">
        <div class="footer__container grid">
            <div class="footer__logo">
                <h1 class="footer__title">Grocery Store</h1>
                <span class="footer__subtitle">
                    Project by Polepalli Vishnu Sai
                </span>
            </div>
            <div class="footer__about">
                <h1 class="footer__about-title">About</h1>
                <ul class="footer__links">
                    <li>
                        <a href="index1.php" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="" class="footer__link">Contact</a>
                    </li>
                   
                </ul>
            </div>

            <div class="footer__socials">
                <a href="https://github.com/vishnu7899" target="_blank" class="footer__social">
                    <i class="uil uil-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/polepalli-vishnu-sai-070964212/" target= "_black" class="footer__social">
                    <i class="uil uil-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/vishnuuu7777/" target= "_black" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://twitter.com/PolepalliVishn2" target= "_black" class="footer__social">  
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
            <p class="footer__copy">&#169; Polepalli Vishnu Sai</p>
        </div>
    </footer>
    <!-- Scroll Up -->

    <a href="" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!-- Javascript -->
    <script src="assets/js/main.js"></script>

</body>

</html>