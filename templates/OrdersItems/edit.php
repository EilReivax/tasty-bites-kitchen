<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersItem $ordersItem
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ordersItem->order_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordersItem->order_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orders Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ordersItems form content">
            <?= $this->Form->create($ordersItem) ?>
            <fieldset>
                <legend><?= __('Edit Orders Item') ?></legend>
                <?php
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
