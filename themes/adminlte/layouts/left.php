<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<aside class="main-sidebar">

    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header"><h5><div class="label label-default">
                    รายการคำขอ</div></h5></li>
                    <li><a href="<?php echo Url::to(['building/index']);?>">
                            <i class="fa fa-circle-o text-red">
                                <span>คำขอสิ่งก่อสร้าง
                                </span>
                                <small class="label pull-right bg-aqua"></small> 
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
            <li class="header"><h5><div class="label label-default">
                    รายงานคำของบ</div></h5></li>
                    
        </ul>
    </section>

</aside>
