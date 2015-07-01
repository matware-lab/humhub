<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\core\like\activities;

use humhub\core\activity\components\BaseActivity;

/**
 * Description of SpaceCreated
 *
 * @author luke
 */
class Liked extends BaseActivity
{

    public $viewName = 'liked';

    public function render($mode = self::OUTPUT_WEB, $params = array())
    {
        $like = $this->source;
        $likeSource = $like->getSource();
        $params['preview'] = $this->getContentInfo($likeSource);

        return parent::render($mode, $params);
    }

}
