<div class="topknots view large-9 medium-8 columns content">
    <h3><?= h($topknot->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $topknot->has('user') ? $this->Html->link($topknot->user->id, ['controller' => 'Users', 'action' => 'view', $topknot->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($topknot->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($topknot->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($topknot->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($topknot->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($topknot->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users Topknot') ?></h4>
        <?php if (!empty($topknot->users_topknot)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('User Id') ?></th>
                <th><?= __('Topknot Id') ?></th>
                <th><?= __('Description') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($topknot->users_topknot as $usersTopknot): ?>
            <tr>
                <td><?= h($usersTopknot->user_id) ?></td>
                <td><?= h($usersTopknot->topknot_id) ?></td>
                <td><?= h($usersTopknot->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsersTopknot', 'action' => 'view', $usersTopknot->topknot_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsersTopknot', 'action' => 'edit', $usersTopknot->topknot_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersTopknot', 'action' => 'delete', $usersTopknot->topknot_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTopknot->topknot_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
