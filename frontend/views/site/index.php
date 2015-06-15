<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php foreach($blogs as $blog): ?>
                <div class="col-lg-4 blog">                    
                    <h2><a href="<?php echo Url::to(['site/blog', 'id' => $blog->id])?>"><?php echo $blog->title;?></a></h2>
                    <p><?php echo substr($blog->text,0, 251).'....';?></p>                    
                </div>
            <?php endforeach;?>            
        </div>

    </div>
</div>
