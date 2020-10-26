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
            <?= $this->Html->link(__('Edit Organization'), ['action' => 'edit', $organization->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Organization'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Organizations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Organization'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizations view content">
            <h3><?= h($organization->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Organization Name') ?></th>
                    <td><?= h($organization->organization_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($organization->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Organization City') ?></th>
                    <td><?= $this->Number->format($organization->organization_city) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
