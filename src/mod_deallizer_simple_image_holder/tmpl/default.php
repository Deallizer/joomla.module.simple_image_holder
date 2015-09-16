<?php
/**
 * @package     Deallizer.Joomla
 * @subpackage  Modules
 *
 * @author      Pavlo Cherniavskyi
 * @email       ionafan2@deallizer.com
 * @version     0.1.0
 * @copyright   Copyright (C) 2015 http://deallizer.com All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;
?>
<a href="<?php echo $link; ?>" <?php if (!empty($linkCss)) : ?> class="<?php echo $linkCss;?>" <?php endif;?>>
    <img <?php if (!empty($imgCss)) : ?> class="<?php echo $imgCss;?>" <?php endif;?>
        src="<?php echo $src; ?>"
        alt="<?php echo $altText;?>"
        />
</a>