<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->given_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Given Name') ?></th>
                    <td><?= h($user->given_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name') ?></th>
                    <td><?= h($user->family_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nonce') ?></th>
                    <td><?= h($user->nonce) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suburb') ?></th>
                    <td><?= h($user->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($user->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Card Number') ?></th>
                    <td><?= h($user->card_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Card Cvv') ?></th>
                    <td><?= h($user->card_cvv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= $user->postcode === null ? '' : $this->Number->format($user->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nonce Expiry') ?></th>
                    <td><?= h($user->nonce_expiry) ?></td>
                </tr>
                <tr>
                    <th><?= __('Card Expiry') ?></th>
                    <td><?= h($user->card_expiry) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin') ?></th>
                    <td><?= $user->admin ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->address)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($user->orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Delivery Method') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Suburb') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('Delivery Fee') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Note') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->orders as $order) : ?>
                        <tr>
                            <td><?= h($order->id) ?></td>
                            <td><?= h($order->delivery_method) ?></td>
                            <td><?= h($order->status) ?></td>
                            <td><?= h($order->address) ?></td>
                            <td><?= h($order->suburb) ?></td>
                            <td><?= h($order->state) ?></td>
                            <td><?= h($order->postcode) ?></td>
                            <td><?= h($order->delivery_fee) ?></td>
                            <td><?= h($order->subtotal) ?></td>
                            <td><?= h($order->note) ?></td>
                            <td><?= h($order->created) ?></td>
                            <td><?= h($order->modified) ?></td>
                            <td><?= h($order->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $order->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $order->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>