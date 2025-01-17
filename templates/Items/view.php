<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="column column-80">
    <div class="items view content">
        <!-- Food Name on Top -->
        <h3 class="order-status-heading"><?= _($item->name) ?></h3>

        <!-- Food details -->
        <div class="food-details">
            <!-- Display item photo -->
            <div class="item-photo">
                <?= $this->Html->image($item->photo, ['alt' => $item->name]) ?>
            </div>

            <!-- Description, Price, Type, Availability -->
            <div class="text">

            <div class="txt1">
                <p><strong><?= __('Price') ?></strong>: $<?= $this->Number->format($item->price, ['places' => 2]) ?></p>
                    <strong><?= __('Description') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($item->description)); ?>
                    </blockquote>
                </div>

                <p><strong><?= __('Type') ?></strong>: <?= h($item->type) ?></p>

            </div>
        </div>

        <!-- Buttons -->
        <div class="buttons">
            <!-- Back Button -->
            <button onclick="goBack()">Back</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
            <!--<div class="related">
                <h4><?php /*= __('Related Orders') */?></h4>
                <?php /*if (!empty($item->orders)) : */?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?php /*= __('Id') */?></th>
                            <th><?php /*= __('Delivery Method') */?></th>
                            <th><?php /*= __('Status') */?></th>
                            <th><?php /*= __('Address') */?></th>
                            <th><?php /*= __('Suburb') */?></th>
                            <th><?php /*= __('State') */?></th>
                            <th><?php /*= __('Postcode') */?></th>
                            <th><?php /*= __('Delivery Fee') */?></th>
                            <th><?php /*= __('Subtotal') */?></th>
                            <th><?php /*= __('Note') */?></th>
                            <th><?php /*= __('Created') */?></th>
                            <th><?php /*= __('Modified') */?></th>
                            <th><?php /*= __('User Id') */?></th>
                            <th class="actions"><?php /*= __('Actions') */?></th>
                        </tr>
                        <?php /*foreach ($item->orders as $order) : */?>
                        <tr>
                            <td><?php /*= h($order->id) */?></td>
                            <td><?php /*= h($order->delivery_method) */?></td>
                            <td><?php /*= h($order->status) */?></td>
                            <td><?php /*= h($order->address) */?></td>
                            <td><?php /*= h($order->suburb) */?></td>
                            <td><?php /*= h($order->state) */?></td>
                            <td><?php /*= h($order->postcode) */?></td>
                            <td><?php /*= h($order->delivery_fee) */?></td>
                            <td><?php /*= h($order->subtotal) */?></td>
                            <td><?php /*= h($order->note) */?></td>
                            <td><?php /*= h($order->created) */?></td>
                            <td><?php /*= h($order->modified) */?></td>
                            <td><?php /*= h($order->user_id) */?></td>
                            <td class="actions">
                                <?php /*= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $order->id]) */?>
                                <?php /*= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $order->id]) */?>
                                <?php /*= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) */?>
                            </td>
                        </tr>
                        <?php /*endforeach; */?>
                    </table>
                </div>
                <?php /*endif; */?>
            </div>-->
        </div>
    </div>
</div>
