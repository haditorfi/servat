 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                if ($profile !=" ") {
                 echo $this->Html->link("ﮐﺎﺭﺑﺮ: $profile".__(''), array('controller' => '', 'action' => 'index'), array('escape' => false,'class'=>'navbar-brand')); 
                }else{
                   echo $this->Html->link("ﻭﺭﻭﺩ".__(''), array('controller' => 'users', 'action' => 'login'), array('escape' => false,'class'=>'btn btn-info','style'=>'margin:10px')); 
                   echo $this->Html->link("ﺛﺒﺖ ﻧﺎﻡ".__(''), array('controller' => 'users', 'action' => 'register'), array('escape' => false,'class'=>'btn btn-success','style'=>'margin:10px')); 
                }
                ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="#page-top">ﺧﺎﻧﻪ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">ﺑﺨﺶ ﻫﺎ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">ﺗﻮﺿﯿﺤﺎﺕ</a>
                    </li>
                    <li class="page-scroll">
                    <?php
                       echo $this->Html->link("ﺩاﺷﺒﻮﺭﺩ".__(''), array('controller' => 'dashboards', 'action' => 'index'), array('escape' => false));  
                       ?>
                    </li>
                </ul>
<?php
            if ($profile !=" ") {
                        echo $this->Html->link("ﺧﺮﻭﺝ".__(''), array('controller' => 'users', 'action' => 'logout'), array('escape' => false,'class'=>'btn btn-danger','style'=>'margin:10px;float:left'));  
                        
                                     }
?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section id="page-top">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <h2 class="name">ﺑﺮﻧﺎﻣﻪ ﺛﺮﻭﺗﻤﻨﺪاﻥ</h2>
                        <hr class="star-light">
                        <span class="skills"> ﺑﺮاﯼ اﻓﺮاﺩﯼ ﮐﻪ ﻣﯽ ﺧﻮاﻫﻨﺪ ﺛﺮﻭﺗﻤﻨﺪ ﺷﻮﻧﺪ و به اهداف و خواسته های خود برسند.</span>
                    </div>
                </div>
            </div>
        </div>
    </header> 
</section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container"><br/>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="demands/index" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/demand.png" class="img-responsive" alt="ﻟﯿﺴﺖ اﻫﺪاﻑ">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="goals/index" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/goal.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="dashboards/index" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dashboard.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="mornings/lantern/index" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/lantern.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="mornings/add" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/morning.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="nights/add" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/night.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><br/>
                    <h3>ﺗﻮﺿﯿﺤﺎﺕ اﺳﺘﻔﺎﺩﻩ اﺯ ﺑﺮﻧﺎﻣﻪ</h3>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                     <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ﺗﻮﺿﯿﺢ ﺑﺨﺶ ﻫﺎﯼ ﻣﺨﺘﻠﻒ ﺑﺮﻧﺎﻣﻪ
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">ﺧﻮاﺳﺘﻪ ﻫﺎ</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">اﻫﺪاﻑ</a>
                                </li>
                                <li><a href="#messages-pills" data-toggle="tab">ﺳﻮاﻻﺕ ﺻﺒﺢ</a>
                                </li>
                                <li><a href="#settings-pills" data-toggle="tab">ﺳﻮاﻻﺕ ﺷﺐ</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content" style="color: blue">
                                <div class="tab-pane fade in active" id="home-pills"><br/>
                                    <h4>ﻧﮕﺎﺭﺵ ﺧﻮاﺳﺘﻪ ﻫﺎ</h4><br/>
                                    <p>ﺑﺎ ﻧﻮﺷﺘﻦ ﺧﻮاﺳﺘﻪ ﻫﺎﯼ ﺧﻮﺩ ﺑﻪ ﻫﻤﻪ ﯼ ﺁﻧﻬﺎ ﺧﻮاﻫﯿﺪ ﺭﺳﯿﺪ . ﮐﺎﻓﯽ اﺳﺖ ﻫﺮ ﺧﻮاﺳﺘﻪ اﯼ ﮐﻪ ﺩﺭ ﺫﻫﻦ ﺩاﺭﯾﺪ ﺩﺭ ﺑﺮﻧﺎﻣﻪ ﯾﺎﺩﺩاﺷﺖ ﻧﻤﺎﯾﯿﺪ ﻭ ﻫﺮ ﺭﻭﺯ ﺑﻪ ﺁﻥ ﻧﮕﺎﻫﯽ ﺑﯿﻨﺪاﺯﯾﺪ ﺑﺪﯾﻦ ﺻﻮﺭﺕ ﺷﻤﺎ ﺑﺎ ﺗﮑﺮاﺭ ﻭ ﻣﺸﺎﻫﺪﻩ آن ﺑﻪ ﺧﻮاﺳﺘﻪ ﺧﻮﺩ ﻗﺪﺭﺕ ﻣﯽ ﺑﺨﺸﯿﺪ ﻭ ﺩﺭ ﻧﻬﺎﯾﺖ ﺑﻪ ﺁﻥ ﺧﻮاﻫﯿﺪ ﺭﺳﯿﺪ. ﯾﮑﯽ اﺯ ﺭاﻫﻬﺎﯼ ﭘﯿﺪا ﮐﺮﺩﻥ ﺧﻮاﺳﺘﻪ اﯾﻦ اﺳﺖ ﮐﻪ ﺑﻪ ﺧﻮﺩ ﺑﮕﻮﯾﯿﺪ ﻣﻦ ﭼﻪ ﭼﯿﺰﯼ ﻧﻤﯽ ﺧﻮاﻫﻢ ﺳﭙﺲ ﻋﮑﺲ ﺁﻥ ﺭا ﺩﺭ ﺑﺮﻧﺎﻣﻪ ﺑﻨﻮﯾﺴﯿﺪ اﯾﻦ ﺭاﻩ ﺣﻞ ﺧﻮﺑﯽ ﺑﺮاﯼ ﭘﯿﺪا ﮐﺮﺩﻥ ﺧﻮاﺳﺘﻪ ﻫﺎﯼ ﺧﻮﺩ اﺳﺖ.</p>
                                </div>
                                <div class="tab-pane fade" id="profile-pills"><br/>
                                    <h4>ﻧﮕﺎﺭﺵ اﻫﺪاﻑ</h4><br/>
                                    <p>اهداف خود را در برنامه بنویسید و معین کنید چه زمانی می خواهید به هدف خود برسید ، به یاد داشته باشید هر روز باید یک کار برای رسیدن و نزدیک شدن به هدف خود انجام دهید حتی اگر کار کوچکی باشد. با این کار شما به تمامی اهداف خود می رسید.طبق دستور العمل برنامه اهداف خود را معین نمایید.</p>
                                </div>
                                <div class="tab-pane fade" id="messages-pills"><br/>
                                    <h4>ﻧﮕﺎﺭﺵ ﺳﻮاﻻﺕ ﺻﺒﺢ</h4><br/>
                                    <p>هر روز صبح دقیقا پس از بیدار شدن از خواب باید به این سوالات پاسخ بدهید ، یادتان باشد اولین کاری که پس از چشم باز کردن باید انجام دهید پاسخ به سوالات صبح است ، با این کار ذهن شما برای آغاز یک روز خوب تنظیم می گردد. پس از چند مدت آثار شگفت انگیز آن را مشاهده می نمایید.</p>
                                </div>
                                <div class="tab-pane fade" id="settings-pills"><br/>
                                    <h4>ﻧﮕﺎﺭﺵ ﺳﻮاﻻﺕ ﺷﺐ</h4><br/>
                                    <p>آخرین کاری که باید انجام دهید پاسخ به سوالات شب است ، دقیقا زمانی که می خواهید به رختخواب بروید، با پاسخ به این سوالات ذهن خود را برنامه ریزی می نمایید که برای فردایی بهتر آماده باشد.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
       
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       ﻃﺮاﺣﯽ ﻭ ﺑﺮﻧﺎﻣﻪ ﻧﻮﯾﺴﯽ : <a href="http://haditorfi.ir" target="_blank" >ﻫﺎﺩﯼ ﻃﺮﻓﯽ</a> 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
