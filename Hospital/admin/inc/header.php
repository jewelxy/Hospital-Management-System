<?php 
	include 'lib/session.php';
	Session::checkSession(); 

?>


<header id="cm-header">
		<nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Home</h1> 
                    <form id="cm-search" action="index.php" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>
                <?php 
				if(isset($_GET['action']) && $_GET['action']=="logout"){
					Session:: destroy();
				}
				
				?>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong>Annoye</strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="?action=logout"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
          
        </header>