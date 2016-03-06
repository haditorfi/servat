    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->Html->link("کاربر: $profile".__(''), array('controller' => '', 'action' => 'index'), array('escape' => false,'class'=>'navbar-brand')); ?>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <span class="pull-left text-muted">
                                        <em>اﻣﺮﻭﺯ</em>
                                    </span>
                                    <strong>ﭘﯿﺎﻡ ﺟﺪﯾﺪ</strong>
                                </div>
                                <div>ﭘﺲ اﺯ ﭘﺎﯾﺎﻥ ﮐﺎﺭ اﺯ ﺑﺮﻧﺎﻣﻪ ﺧﺎﺭﺝ ﺷﻮﯾﺪ...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>ﮐﺎﺭﺗﺨﻮاﻥ</strong>
                                    <span class="pull-left text-muted">
                                        <em>اﻣﺮﻭﺯ</em>
                                    </span>
                                </div>
                                <div>ﻟﻄﻔﺎ ﭘﺲ اﺯ ﻭﺭﻭﺩ ﺑﻪ ﻣﺤﻞ ﮐﺎﺭ ، ﮐﺎﺭﺗﺨﻮاﻥ ﺭا ﺭﻭﺷﻦ ﻧﻤﺎﯾﯿﺪ...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <i class="fa fa-angle-left"></i>
                                <strong>ﺧﻮاﻧﺪﻥ ﻫﻤﻪ ﭘﯿﺎﻡ ﻫﺎ</strong>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> ﭘﺮﻭﻓﺎﯾﻞ</a>
                        </li>
                        <li class="divider"></li>

                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> ﺗﻨﻈﯿﻤﺎﺕ</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <?php echo $this->Html->link('<span class="fa fa-sign-out fa-fw"></span>&nbsp;&nbsp;ﺧﺮﻭﺝ'.__(''), array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <br/>
     <div class="centerDate">       
          <?php 
             echo $this->jDateTime->date("l j F Y", time() , true,true,"Asia/Tehran");
             echo "<br>";
         ?> 
        </div>

     <div class="userProfile">       
          <?php 
             echo $profile;
             echo "<br>";
         ?> 
        </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <?php
                                 echo $this->Form->input('', array('class'=>'form-control','placeholder'=>'ﺟﺴﺘﺠﻮ','id'=>'hadi'));
                                 ?>
                                <span class="input-group-btn">
                                <?php echo $this->Html->link('<span class="fa fa-search"></span>', array('controller' => 'lanterns', 'action' => 'search'), array('escape' => false,'class'=>'btn btn-search')); 
                                ?>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                        <?php echo $this->Html->link('<span class="fa fa-dashboard fa-fw"></span>&nbsp;&nbsp;ﺩاﺷﺒﻮﺭﺩ'.__(''), array('controller' => 'dashboard', 'action' => 'index'), array('escape' => false)); 
                        ?>
                        </li>
                        <li>
                          <?php echo $this->Html->link('<span class="fa fa-list-ul"></span>&nbsp;&nbsp;لیست ﺧواسته ها'.__(''), array('controller' => 'demands', 'action' => 'index'), array('escape' => false)); ?>
                        </li>
                        <li>
                          <?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;اﻓﺰﻭﺩﻥ ﺧواسته'.__(''), array('controller' => 'demands', 'action' => 'add'), array('escape' => false)); ?>
                        </li>
                        <li>
                             <?php echo $this->Html->link('<span class="fa fa-sun-o"></span>&nbsp;&nbsp;سوالات صبح'.__(''), array('controller' => 'lanterns', 'action' => 'add'), array('escape' => false)); ?>
                        </li>
                        <li>
                             <?php echo $this->Html->link('<span class="fa fa-moon-o"></span>&nbsp;&nbsp;سوالات شب'.__(''), array('controller' => 'lanterns', 'action' => 'addnight'), array('escape' => false)); ?>
                        </li>
                        <li>
                             <?php echo $this->Html->link('<span class="fa fa-search fa-fw"></span>&nbsp;&nbsp;جستجو'.__('<span class="fa arrow"></span>'), array(), array('escape' => false)); 
                        ?>

                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo $this->Html->link('<span class="fa fa-search"></span>&nbsp;&nbsp; خواسته ها'.__(''), array('controller' => 'demands', 'action' => 'search'), array('escape' => false)); ?>
                                </li>
                                <li>
                                   <?php echo $this->Html->link('<span class="fa fa-search"></span>&nbsp;&nbsp; سوالات'.__(''), array('controller' => 'lanterns', 'action' => 'search'), array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        <?php echo $this->Html->link('<span class="fa fa-lightbulb-o fa-fw"></span>&nbsp;&nbsp;فانوس دریایی'.__('<span class="fa arrow"></span>'), array(), array('escape' => false)); 
                        ?>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo $this->Html->link('<span class="fa fa-sun-o"></span>&nbsp;&nbsp;سوالات صبح'.__(''), array('controller' => 'lanterns', 'action' => 'add'), array('escape' => false)); ?>
                                </li>
                                <li>
                                   <?php echo $this->Html->link('<span class="fa fa-moon-o"></span>&nbsp;&nbsp;سوالات شب'.__(''), array('controller' => 'lanterns', 'action' => 'addnight'), array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-users fa-fw"></i> ﻧﺎﺣﯿﻪ ﮐﺎﺭﺑﺮﯼ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                      <?php echo $this->Html->link('<span class="fa fa-sign-out fa-fw"></span>&nbsp;&nbsp;ﺧﺮﻭﺝ'.__(''), array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">