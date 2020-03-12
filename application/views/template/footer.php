	<h3>Links</h3>
	<?=($this->session->user_id)?'<a href="'.site_url().'/posts/admin_dashboard">Admin Dashboard</a> | <a href="'.site_url().'/users/admin_logout">Logout</a>':'<a href="'.site_url().'/users/admin_register">Register</a> | <a href="'.site_url().'/users/admin_login">Login</a>'?>

    <!-- footer.php start -->
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>