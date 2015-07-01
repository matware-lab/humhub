<?php

use yii\helpers\Html;

echo Yii::t('PostModule.views_activities_PostCreated', '{displayName} created a new {contentTitle}.', array(
    '{displayName}' => '<strong>' . Html::encode($originator->displayName) . '</strong>',
    '{contentTitle}' => '<strong>' . Html::encode($source->getContentTitle()) . '</strong>'
));
?>

<?php echo $source->getContentPreview(); ?>
