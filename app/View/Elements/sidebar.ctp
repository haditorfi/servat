
 
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
                                    <strong>پاسخ به سوالات صبح</strong>
                                </div>
                                <div>به سوالات صبح حتما پاسخ بدهید...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>پاسخ به سوالات شب</strong>
                                    <span class="pull-left text-muted">
                                        <em>اﻣﺮﻭﺯ</em>
                                    </span>
                                </div>
                                <div>به سوالات شب حتما پاسخ دهید...</div>
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
             echo 'امروز : '. $this->jDateTime->date("l j F Y", time() , true,true,"Asia/Tehran");
             echo "<br>";
         ?> 
        </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <!-- search -->
                        </li>
                        <li>
                        <?php echo $this->Html->link('<span class="fa fa-dashboard fa-fw"></span>&nbsp;&nbsp;ﺩاﺷﺒﻮﺭﺩ'.__(''), array('controller' => 'dashboards', 'action' => 'index'), array('escape' => false)); 
                        ?>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-list-ul fa-fw"></i>   خواسته ها<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                        <li>
                          <?php echo $this->Html->link('  لیست ﺧواسته ها'.__(''), array('controller' => 'demands', 'action' => 'index'), array('escape' => false)); ?>
                        </li>
                        <li>
                          <?php echo $this->Html->link('  اﻓﺰﻭﺩﻥ ﺧواسته'.__(''), array('controller' => 'demands', 'action' => 'add'), array('escape' => false)); ?>
                        </li>
                        </ul>
                        
                        <li >
                            <a href="#"><i class="fa fa-sun-o fa-fw"></i>   فانوس دریایی<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                        <li>
                             <?php echo $this->Html->link('فانوس دریایی امروز'.__(''), array('controller' => 'mornings', 'action' => 'lantern'), array('escape' => false)); ?>
                        </li>
                        <li>
                             <?php echo $this->Html->link('افزودن سوالات صبح'.__(''), array('controller' => 'mornings', 'action' => 'add'), array('escape' => false)); ?>
                        </li>
                        <li>
                             <?php echo $this->Html->link('افزودن سوالات شب'.__(''), array('controller' => 'nights', 'action' => 'add'), array('escape' => false)); ?>
                        </li>
                        </ul>
                        <li >
                            <a href="#"><i class="fa fa-tasks fa-fw"></i>   اهداف<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                        <li>
                          <?php echo $this->Html->link('لیست اهداف'.__(''), array('controller' => 'goals', 'action' => 'index'), array('escape' => false)); ?>
                        </li>
                        <li>
                          <?php echo $this->Html->link('اﻓﺰﻭﺩﻥ هدف'.__(''), array('controller' => 'goals', 'action' => 'add'), array('escape' => false)); ?>
                        </li>
                        </ul>
                        <li >
                            <a href="#"><i class="fa fa-archive fa-fw"></i>   آرشیو سوالات<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                        <li>
                             <?php echo $this->Html->link('آرشیو سوالات صبح'.__(''), array('controller' => 'mornings', 'action' => 'index'), array('escape' => false)); ?>
                        </li>
                        <li>
                             <?php echo $this->Html->link('آرشیو سوالات شب'.__(''), array('controller' => 'nights', 'action' => 'index'), array('escape' => false)); ?>
                        </li>
                            </ul>
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
