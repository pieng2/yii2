<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p<?php echo Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        
            <div class="input-group">
              
             
                <li class="treeview active">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i>ระบบแจ้งซ่อม<i class="fa pull-right fa-angle-down"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/repair/repairs/index']); ?>">
                                แจ้งซ่อม
                            </a>
                        </li>
                   
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/repair/repairs/indexapprove']); ?>">
                               หน. รับซ่อม
                            </a>
                        </li>
                    
                         <li>
                            <a href="<?php echo yii\helpers\Url::to(['/repair/repairs/indexengineer']); ?>">
                                ช่างรับงาน
                            </a>
                        </li>
                    </ul>
                </li>
                
        
        <!-- /.search form -->


    </section>

</aside>
