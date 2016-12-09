<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Topknots User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topknots'), ['controller' => 'Topknots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topknot'), ['controller' => 'Topknots', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="topknotsUsers index large-9 medium-8 columns content">
    <h3><?= __('Topknots Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('topknot_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('Cometario') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($topknotsUsers as $topknotsUser): ?>
            <tr>
                <td><?= $topknotsUser->has('topknot') ? $this->Html->link($topknotsUser->topknot->title, ['controller' => 'Topknots', 'action' => 'view', $topknotsUser->topknot->id]) : '' ?></td>
                <td><?= $topknotsUser->has('user') ? $this->Html->link($topknotsUser->user->id, ['controller' => 'Users', 'action' => 'view', $topknotsUser->user->id]) : '' ?></td>
                <td><?= h($topknotsUser->Cometario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $topknotsUser->topknot_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $topknotsUser->topknot_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $topknotsUser->topknot_id], ['confirm' => __('Are you sure you want to delete # {0}?', $topknotsUser->topknot_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
