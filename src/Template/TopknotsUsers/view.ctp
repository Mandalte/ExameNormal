<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Topknots User'), ['action' => 'edit', $topknotsUser->topknot_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Topknots User'), ['action' => 'delete', $topknotsUser->topknot_id], ['confirm' => __('Are you sure you want to delete # {0}?', $topknotsUser->topknot_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Topknots Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topknots User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Topknots'), ['controller' => 'Topknots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topknot'), ['controller' => 'Topknots', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="topknotsUsers view large-9 medium-8 columns content">
    <h3><?= h($topknotsUser->topknot_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Topknot') ?></th>
            <td><?= $topknotsUser->has('topknot') ? $this->Html->link($topknotsUser->topknot->title, ['controller' => 'Topknots', 'action' => 'view', $topknotsUser->topknot->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $topknotsUser->has('user') ? $this->Html->link($topknotsUser->user->id, ['controller' => 'Users', 'action' => 'view', $topknotsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cometario') ?></th>
            <td><?= h($topknotsUser->Cometario) ?></td>
        </tr>
    </table>
</div>
