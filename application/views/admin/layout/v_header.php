<body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><?=$title1?></a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               
                <ul class="nav navbar-right navbar-top-links">
                     
                            <li class="active">
                                <a href="<?=base_Url('login/logout')?>"><i class="fa  fa-sign-out"></i> Logout</a>
                                
                                <!-- /.nav-second-level -->
                            </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('nama_user')?> <b></b>
                        </a>
                        
                    </li>
                </ul>