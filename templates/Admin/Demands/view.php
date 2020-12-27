<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demand $demand
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Demand'), ['action' => 'edit', $demand->demand_no], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Demand'), ['action' => 'delete', $demand->demand_no], ['confirm' => __('Are you sure you want to delete # {0}?', $demand->demand_no), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Demands'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Demand'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="demands view content">
            <h3><?= h($demand->demand_no) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($demand->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('About') ?></th>
                    <td><?= h($demand->about) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($demand->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Demand No') ?></th>
                    <td><?= $this->Number->format($demand->demand_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emp No') ?></th>
                    <td><?= $this->Number->format($demand->emp_no) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
