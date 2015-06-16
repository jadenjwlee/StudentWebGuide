<?php include '../View/Public/Home/header.php'; ?>
            <div id="header">
                <h1>Database error message</h1>
            </div>

            <div id="main">
                <h1>Database Error</h1>
                <p>There was an error connecting to the database.</p>           
                <p>Error message: <?php echo $error_message; ?></p>
                <p>&nbsp;</p>
            </div><!-- end main -->

<? include '../View/Public/Home/footer.php'; ?>