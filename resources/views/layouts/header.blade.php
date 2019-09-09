        <header class="main-header">
            <a href="{{ route('index') }}" class="logo">
                <span class="logo-mini"><b>sw</b>M</span>
                <span class="logo-lg"><i class="glyphicon glyphicon-fire"></i> simpleworking</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('asset/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">Ini namauser</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
									<!-- <img src="asset/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                                </li>
                                <li class="user-footer">
									<!--
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
									-->
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>