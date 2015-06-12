<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?= Html::csrfMetaTags() ?>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="page-header-fixed page-quick-sidebar-over-content">
    <?php $this->beginBody() ?>

    <?php
        Yii::$app->runAction('adminmenu/getmenu');
        $arrMenu = $this->params['list_menu'];
    ?>
    <div class="wrap">
        <!-- BEGIN HEADER (Menu top) -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?php echo Url::base();?>/images/logo.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide"></div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
                   data-target=".navbar-collapse"></a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                               data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">12 pending</span> notifications</h3>
                                    <a href="extra_profile.html">view all</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;"
                                        data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                    New user registered.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span>
                                                    Server #12 overloaded.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 mins</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span>
                                                    Server #2 not responding.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">14 hrs</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span>
                                                    Lỗi ứng dụng tiếp.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">2 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span>
                                                    Database overloaded 68%.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span>
                                                    A user IP blocked.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">4 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span>
                                                    Storage Server #4 not responding dfdfdfd.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">5 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span>
                                                    System Error.
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">9 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span>
                                                    Storage server failed.
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                               data-close-others="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default"> 4 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>You have <span class="bold">7 New</span> Messages</h3>
                                    <a href="page_inbox.html">view all</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                        data-handle-color="#637283">
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo Url::base();?>/images/avatar2.jpg"
                                                         class="img-circle"
                                                         alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo Url::base();?>/images/avatar3.jpg"
                                                         class="img-circle"
                                                         alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo Url::base();?>/images/avatar1.jpg"
                                                         class="img-circle"
                                                         alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Bob Nilson </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo Url::base();?>/images/avatar2.jpg"
                                                         class="img-circle"
                                                         alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                                <span
                                                    class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="<?php echo Url::base();?>/images/avatar3.jpg"
                                                         class="img-circle"
                                                         alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                               data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default"> 3 </span>
                            </a>
                            <ul class="dropdown-menu extended tasks">
                                <li class="external">
                                    <h3>You have <span class="bold">12 pending</span> tasks</h3>
                                    <a href="page_todo.html">view all</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                        data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">New release v1.2 </span>
                                                    <span class="percent">30%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 40%;" class="progress-bar progress-bar-success"
                                                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Application deployment</span>
                                                    <span class="percent">65%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 65%;" class="progress-bar progress-bar-danger"
                                                          aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">65% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Mobile app release</span>
                                                    <span class="percent">98%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 98%;" class="progress-bar progress-bar-success"
                                                          aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">98% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Database migration</span>
                                                    <span class="percent">10%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 10%;" class="progress-bar progress-bar-warning"
                                                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">10% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Web server upgrade</span>
                                                    <span class="percent">58%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 58%;" class="progress-bar progress-bar-info"
                                                          aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">58% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Mobile development</span>
                                                    <span class="percent">85%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 85%;" class="progress-bar progress-bar-success"
                                                          aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">85% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">New UI release</span>
                                                    <span class="percent">38%</span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 38%;"
                                                          class="progress-bar progress-bar-important"
                                                          aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">38% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                               data-close-others="true">
                                <img alt="" class="img-circle" src="<?php echo Url::base();?>/images/avatar3_small.jpg"/>
                                <span class="username username-hide-on-mobile"> Nick </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="extra_profile.html"><i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="inbox.html"><i class="icon-envelope-open"></i> My Inbox <span
                                            class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_todo.html">
                                        <i class="icon-rocket"></i> My Tasks <span
                                            class="badge badge-success"> 7 </span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix"></div>
            <!-- BEGIN SIDEBAR (Menu trái) -->
            <?php if(!empty($arrMenu)): $count = count($arrMenu); $li_id = 0;?>
                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true"
                            data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper">
                                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                <div class="sidebar-toggler">
                                </div>
                                <!-- END SIDEBAR TOGGLER BUTTON -->
                            </li>
                            <li class="heading">
                                <h1 class="uppercase">Main menu</h1>
                            </li>
                            <li id="li_0" class="start">
                                <a href="javascript:;">
                                    <i class="icon-rocket"></i>
                                    <span class="title">Menu</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="<?php echo Url::to(['adminmenu/index']); ?>">List menu</a>
                                    </li>
                                </ul>
                            </li>
                            <?php foreach($arrMenu as $itemMenu): $li_id++; ?>
                                <?php if($li_id==1){?>
                                    <li id="li_<?= $li_id ?>" class="start">
                                <?php }elseif($li_id==$count){ ?>
                                    <li id="li_<?= $li_id ?>" class="last">
                                <?php }else{ ?>
                                    <li id="li_<?= $li_id ?>">
                                <?php } ?>
                                        <a href="javascript:;">
                                            <i class="<?= $itemMenu['image']?>"></i>
                                            <span class="title"><?= $itemMenu['title'] ?></span>
                                            <span class="selected"></span>
                                            <span class="arrow open"></span>
                                        </a>
                                        <?php if(!empty($itemMenu['children'])):?>
                                            <ul class="sub-menu">
                                            <?php foreach ($itemMenu['children'] as $itemChildren): ?>
                                                <li>
                                                    <a href="<?php echo Url::to([$itemChildren['link_url']]); ?>">
                                                        <i class="<?= $itemChildren['image'] ?>"></i>
                                                        <?php if($itemChildren['properties_new']==1){?>
                                                            <span class="badge badge-roundless badge-success">new</span>
                                                        <?php } ?>
                                                        <?= $itemChildren['title'] ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                            </ul>
                                        <?php endif;?>
                                    </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
            </div>
            <?php endif; ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT (Nội dung)-->
            <div style="background-color: #fff;">
                <!-- BEGIN CONTENT (Nội dung)-->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <!-- END PAGE HEADER-->
                        <?= $content ?>

                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
    </div>
    <div class="page-footer">
        <div class="page-footer-inner">
            2015 &copy; Metronic by keenthemes.
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
               title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">
                Purchase Metronic!
            </a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            QuickSidebar.init(); // init quick sidebar
            Demo.init(); // init demo features
            Index.init();
            Index.initDashboardDaterange();
            Index.initJQVMAP(); // init index page's custom scripts
            Index.initCalendar(); // init index page's custom scripts
            Index.initCharts(); // init index page's custom scripts
            Index.initChat();
            Index.initMiniCharts();
            Tasks.initDashboardWidget();
        });
        var currController = '<?php echo Yii::$app->controller->id;?>';console.log(currController);
        var currAction = '<?php echo Yii::$app->controller->action->id;?>';console.log(currAction);

        if (currController == 'dashboard') {
            if (currAction == 'index')
                activeMenu(1, 1);
            else if (currAction == 'index_2')
                activeMenu(1, 2);
            else if (currAction == 'index_3')
                activeMenu(1, 3);
        } else if (currController == 'ecommerce') {
            if (currAction == 'index')
                activeMenu(2, 1);
            else if (currAction == 'orders')
                activeMenu(2, 2);
        } else if (currController == 'adminmenu') {
            if (currAction == 'index' || currAction =='update'|| currAction =='create')
                activeMenu(0, 1);
        }
        /**
         * Active các menu
         * @param n
         * @param ni
         */
        function activeMenu(n, ni) {
            $("#li_" + n).addClass('active');
            $("#li_" + n).addClass('open');
            $("#li_" + n + " .sub-menu li:nth-child(" + ni + ")").addClass('active');
        }
    </script>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>