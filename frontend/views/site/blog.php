<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h2><?php echo $blog->title;?></h2>
                <p><?php echo $blog->text ;?></p>                    
                <div class="col-lg-3"> 
                    <a href="<?php echo Url::to(['site/delete', 'id' => $blog->id])?>"><img src="../images/delete.png" alr="delete"></a>
                    <a href="<?php echo Url::to(['site/update', 'id' => $blog->id])?>"><img src="../images/edit.png" alr="updaet"></a>
                </div>
            </div>
        </div>

    </div>
</div>
