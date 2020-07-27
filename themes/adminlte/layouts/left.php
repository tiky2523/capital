<?php
use yii\helpers\Url;
use yii\helpers\Html;
use dektrium\user\models\User;
use yii\bootstrap\Nav;
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?=
        Nav::widget(
                [
                    'encodeLabels' => false,
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => ['<li class="header"></li>', Yii::$app->user->isGuest ?
                                ['label' => '<i class="glyphicon glyphicon-log-in"></i>'
                            . ' เข้าสู่ระบบ', 'url' => ['/user/security/login']] :
                                ['label' => '<i class="glyphicon glyphicon-user"></i>'
                            . ' (' . Yii::$app->user->identity->username . ')', 'items' => [
                                ['label' => 'เปลี่ยนข้อมูล', 'url' => ['/user/settings/account']],
                                ['label' => 'Logout', 'url' => ['/user/security/logout'],
                                    'linkOptions' => ['data-method' => 'post']],
                            ]],
                    ],
                ]
        );
        ?>
        <br><hr/>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i> <span>ข้อมูลพื้นฐาน</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">
               
                    <li><a href="<?php echo Url::to(['amphures/index']); ?>">
                            <i class="fa fa-circle text-yellow"></i> 
                            <span>
                                ตั้งค่าอำเภอ</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['districts/index']); ?>">
                            <i class="fa fa-circle text-yellow"></i> 
                            <span>
                                ตั้งค่าตำบล</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['cbuild/index']); ?>">
                            <i class="fa fa-circle text-red"></i> 
                            <span>ตั้งค่าประเภทสิ่งก่อสร้าง</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li> 
                    <li><a href="<?php echo Url::to(['cbuild2/index']); ?>">
                            <i class="fa fa-circle text-red"></i> 
                            <span>ตั้งค่าประเภทครุภัณฑ์</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li> 
                    <li><a href="<?php echo Url::to(['chos/index']); ?>">
                            <i class="fa fa-circle text-yellow"></i> 
                            <span>ตั้งค่ารหัสสถานบริการ</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['admin/assignment']); ?>">
                            <i class="fa fa-circle text-red"></i> 
                            <span>กำหนดสิทธิ์</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    
                
           </ul>
        </ul>
        <ul class="sidebar-menu">
            <li class="treeview">
                <li class="header"><h5><div class="label label-default">
                    รายการคำขอ</div></h5></li>
                    <li><a href="<?php echo Url::to(['building/index']);?>">
                            <i class="fa fa-circle-o text-red">
                                <span>คำขอสิ่งก่อสร้าง
                                </span>
                                <small class="label pull-right bg-aqua">
                                    
                                </small> 
                            </i>
                        </a>
                        <a href="<?php echo Url::to(['building2/index']);?>">
                            <i class="fa fa-circle-o text-blue">
                                <span>คำขอครุภัณฑ์
                                </span>
                                <small class="label pull-right bg-aqua"></small> 
                            </i>
                        </a>
                    </li>
        
        </ul>
        
        <ul class="sidebar-menu">
        
            <li class="header"><h5><div class="label label-default">
                    รายงานคำของบ</div></h5></li>
                    <li><a href="<?php echo Url::to(['report/index']);?>">
                            <i class="fa fa-circle text-green">
                                <span>รายงานเกี่ยวกับสิ่งก่อสร้าง
                                </span>
                                <small class="label pull-right bg-aqua">
                                    
                                </small> 
                            </i>
                        </a>
                        <a href="<?php echo Url::to(['report2/index']);?>">
                            <i class="fa fa-circle text-blue">
                                <span>รายงานเกี่ยวกับครุภัณฑ์
                                </span>
                                <small class="label pull-right bg-aqua"></small> 
                            </i>
                        </a>
                    </li>
        </ul>
        
    </section>

</aside>
