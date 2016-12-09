<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $topknotsUser->topknot_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $topknotsUser->topknot_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Topknots Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Topknots'), ['controller' => 'Topknots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topknot'), ['controller' => 'Topknots', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="topknotsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($topknotsUser) ?>
    <fieldset>
        <legend><?= __('Edit Topknots User') ?></legend>
        <?php
            echo $this->Form->input('Cometario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
