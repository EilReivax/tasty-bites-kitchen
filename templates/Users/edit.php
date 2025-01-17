<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
<!--    <?php /*if ($user && $user->admin) : */?>
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?php /*= __('Actions') */?></h4>
            <?php /*= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) */?>
            <?php /*= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) */?>
        </div>
    </aside>
    --><?php /*endif; */?>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('given_name');
                    echo $this->Form->control('family_name');
                    echo $this->Form->control('phone', ['type' => 'number']);
                    echo $this->Form->control('email');
                    if ($user && $user->admin) {
                        echo $this->Form->control('admin');
                    }
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <!-- Back Button -->
            <button onclick="goBack()">Back</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>
    </div>
</div>
