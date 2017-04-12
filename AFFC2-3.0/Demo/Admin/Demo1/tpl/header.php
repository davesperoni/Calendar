<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
    
       <div id="header">  
            <div id="logo">
                <a href="dashboard.php"><h1>ajaxCalendar</h1></a>
            </div>

            <div id="info">
                <ul id="userBox">
                    <?php if(basename($_SERVER['PHP_SELF']) !== 'index.php') { ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION['c_username']; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Add User</a></li>
                            <li class="divider"></li>
                            <li><a href="?action=logout"><span class="glyphicon glyphicon-off"></span><strong> Log out</strong></a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
	  
      <?php if(basename($_SERVER['PHP_SELF']) !== 'index.php') { ?>	
      <!-- search -->
      <form class="pull-right form-inline" style="margin-top: 8px; margin-left: 20px;" id="search">
        <div class="form-group">
        <input class="form-control" type="text">
        <button class="btn" type="button">Search</button>
        </div>
      </form>
      <?php } ?>
        
    </div>
  </div>
</div>