<!DOCTYPE html>

<html lang="en-GB">
    <?php include('../common/head.php'); ?>

    <body>
        <?php include('../common/header.php'); ?>

        <div class="content center-block">
            <?php
            /* If a username and a good password were given,
            the data are displayed. If the wrong password is given,
            an error message is displayed. */
            if (isset($_POST['username']) AND isset($_POST['password']))
            {
                echo '<h2>Hello '
                . htmlspecialchars((string) $_POST['username']) . ' !</h2>';
                if ((string) $_POST['password'] != 'love')
                {
                    echo '<p>Unfortunately, you entered a wrong password. 
                    You cannot access the data.</p>';
                }
                else
                {
                    echo '<p>Here are the secret data... : ';
                    include('secret');
                    echo '</p>';
                }
            }
            else
            {
            ?>
            <h2>Please, sign in :</h2>
            <form method="post" action="form.php">
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username"><br />
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password"><br />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
                <p>You did not sign in yet. You cannot access the data.</p>
            <?php
            }
            ?>
        </div>
        
        <?php include("../common/footer.php"); ?>
        <?php include('../common/scripts.php'); ?>
    </body>

</html>