<?php
#
   include_once 'layout/header.php';

   session_start();
   if ( !$_SESSION['user']['id'] )
   {
      // If the user tries to change the url path to an inside-account page without being logged in,
      // It will redirect the user to login page as long as the user is not logging in
      header('location: login.php?attempt=failed');
   }
   // The sessions that you're seeing below are the sessions you created in login controller page
   // That will be accessible anywhere inside the account pages as long as the user is active
#
?>
      <div class="jumbotron">
         <h2 class="text-center">Welcome <?= $_SESSION['user']['fname']; ?></h2>
         <p class="text-center">
            Your email address is: <?= $_SESSION['user']['email']; ?>
         </p>
         <p class="text-center">
            Your Username is: <?= $_SESSION['user']['uid']; ?>
         </p>
         <div class="text-center">
            <a href="logout.php" class="btn btn-danger">Logout</a>
         </div>
      </div>
<?php include_once 'layout/footer.php'; ?>