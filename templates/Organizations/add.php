<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $organization
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Organizations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizations form content">
            <?= $this->Form->create($organization) ?>
            <fieldset>
                <legend><?= __('Add Organization') ?></legend>
                <?php
                    echo $this->Form->control('organization_name');
                    echo $this->Form->control('organization_city');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
