<?php
    declare(strict_types = 1);

    require_once('template/essentials.tpl.php');
    require_once('user_session.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/position.css">
        <title>Du'Campu</title>
    </head>
    <body>

    <?php show_header_menu(); ?>
    <main>
        <section id="profile">
            <div id="fields">
                <form action="action_register.php" method="post" class="profile_form">
                    <label>Name</label>
                    <input name="n" class="attr" type="text" placeholder="Name" value="<?php echo getName(); ?>" required="required">
                    <label>Username</label>
                    <input name="u" class="attr" type="text" placeholder="Username" value="<?php echo getUsername(); ?>" required="required">
                    <label>Email</label>
                    <input name="m" class="attr" type="text" placeholder="Email" value="<?php echo getEmail(); ?>" required="required">
                    <label>Phone</label>
                    <input name="ph" class="attr" type="text" placeholder="Phone Number" value="<?php echo getPhone(); ?>" required="">
                    <label>Address</label>
                    <input name="a" class="attr" type="text" placeholder="Address" value="<?php echo getAddress(); ?>" required="">
                    <label>Password</label>
                    <input name="p" class="attr" type="password" placeholder="Password" value="<?php echo getPassword(); ?>" required="required">
                    <input type="submit" name="Submit" value="Register">
                </form>
            </div>
        </section>
    </main>
    <?php show_footer(); ?>

</body>
</html>