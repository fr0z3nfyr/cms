<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>

<div class="row">
    <div class="col-md-12">
        <?= $this->Form->create($menu); ?>
            <fieldset>
                <legend><?= __d('menu', 'Menu Information'); ?></legend>

                <?= $this->Form->input('title', ['label' => __d('menu', 'Title *')]); ?>
                <?= $this->Form->input('description', ['label' => __d('menu', 'Description')]); ?>
                <em class="help-block"><?= __d('menu', 'Briefly describe your menu, e.g. "Sitemap Links".'); ?></em>

                <?= $this->Form->submit(__d('menu', 'Save & add links &raquo;'), ['escape' => false]); ?>
            </fieldset>
        <?= $this->Form->end(); ?>
    </div>
</div>