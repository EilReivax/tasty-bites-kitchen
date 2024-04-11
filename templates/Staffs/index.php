<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Staff> $staffs
 */
?>
<div class="staffs index content">
    <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Staffs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('given_name') ?></th>
                    <th><?= $this->Paginator->sort('family_name') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($staffs as $staff): ?>
                <tr>
                    <td><?= h($staff->id) ?></td>
                    <td><?= h($staff->given_name) ?></td>
                    <td><?= h($staff->family_name) ?></td>
                    <td><?= h($staff->phone) ?></td>
                    <td><?= h($staff->email) ?></td>
                    <td><?= h($staff->role) ?></td>
                    <td><?= h($staff->created) ?></td>
                    <td><?= h($staff->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $staff->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staff->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
