<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patty $patty
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Patty'), ['action' => 'edit', $patty->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Patty'), ['action' => 'delete', $patty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patty->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Patty'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Patty'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="patty view content">
            <h3><?= h($patty->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($patty->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($patty->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($patty->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($patty->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($patty->phone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
