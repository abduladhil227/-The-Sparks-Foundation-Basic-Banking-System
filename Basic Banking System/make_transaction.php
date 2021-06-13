<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABD Bank | Make Transaction</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
    <!--Favicon icon-->
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.png' />
</head>

<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<body>
	
    <header>
    	<div class="container">
        	<nav>
            	<div class="nav-brand">
                	<a href="index.php">
                    	<img src="images/Logo2.png" alt="ABD Bank Logo">
                    </a>
                </div>
                
                <div class="menu-icons open">
                    <ion-icon name="menu"></ion-icon>
                </div>
                
                <ul class="nav-list">
                	<div class="menu-icons close">
                        <ion-icon name="close"></ion-icon>
                	</div>
                    <li class="nav-item">
                    	<a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                    	<a href="create_user.php" class="nav-link">Create User</a>
                    </li>
                    <li class="nav-item">
                    	<a href="make_transaction.php" class="nav-link current">Make Transaction</a>
                    </li>
                    <li class="nav-item">
                    	<a href="transact_history.php" class="nav-link">Transaction History</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
    	<section class="hero">
            <div class="container">
                <div class="main-message">
                    <h1>Make Transaction</h1>
                    <p>
                        Make your transaction safe and secure
                    </p>
                </div>
            </div>
    	</section>   

        <section>
        <div class="container">
        <h1 style="font-size: 30px;">TRANSACTION LIST</h1>
        <hr>
        </div>
        </section>

        <section>
            <div class="container">
           
                <div class="activities-grid">
                    <table>
                        <thead>
                            <tr id="header">
                                <th>ID</th>
                                <th>NAME</thlass=>
                                <th>EMAIL</thss=>
                                <th>BALANCE</th>
                                <th>TRANSFER</th>
                            </tr>
                        </thead>
            
                        <tbody class="t-body">
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                                <tr>
                                    <td><?php echo $rows['id'] ?></td>
                                    <td><?php echo $rows['name']?></td>
                                    <td><?php echo $rows['email']?></td>
                                    <td><?php echo $rows['balance']?></td>
                                    <td style="text-align:center;"><a href="user_details.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="trans-btn">TRANSFER MONEY</button></a></td> 
                                </tr>
                <?php
                    }
                ?>
            
                        </tbody>
            
                    </table>
                </div>
            </div>
        </section>        
    </main>

	<footer>
    	<p>&copy; 2021, All rights reserved</p>
    	<p>Built by <a href="https://www.linkedin.com/in/abdul-adhil-a8446a194" target="_blank">ABDUL ADHIL K</a></p>
        <p>Web Dev Intern @ <a href="https://www.linkedin.com/company/the-sparks-foundation/" target="_blank">The Sparks Foundation</a></p>
    </footer>
    <!--Ion Icons-->
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!--Our own javascript-->
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>