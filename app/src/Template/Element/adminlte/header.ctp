<!-- Logo -->
<a href="/users/index" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>R</b>Dot</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b><?= $Auth->user('name') ?></b>DOT</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            
            <!-- Tasks Menu -->
            
            <!-- User Account Menu -->
            <?php 
            if($Auth->user()) {  
                echo '
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                ';
                        //<!-- The user image in the navbar-->
                    echo $this->Html->image(
                        //'TwitterBootstrap.user2-160x160.jpg',
                        ['class'=>'user-image',  "alt"=>"User Image"]
                    );
                
                echo '            
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">' . $Auth->user('name') . ' </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                ';
                        echo $this->Html->image(
                           // 'TwitterBootstrap.user2-160x160.jpg',
                            ['class'=>'img-circle',  "alt"=>"User Image"]
                        );
                echo '
                        <p>
                            ' . $Auth->user('name') . ' - Padawam Web Developer
                                <small>Member since Nov. 2017</small>
                        </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="/stock-out">Compras</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">#######</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">#######</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/users" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="/users/logout" class="btn btn-default btn-flat">Log out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                ';
            }
            ?>
            <!-- Control Sidebar Toggle Button -->
            
        </ul>
    </div>
</nav>
