<div class="topknots index large-9 medium-8 columns content">
    <h3><?= __('Topknots') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($topknots as $topknot): ?>
            <tr>
                <td><?= $this->Number->format($topknot->id) ?></td>
                <td><?= $topknot->has('user') ? $this->Html->link($topknot->user->id, ['controller' => 'Users', 'action' => 'view', $topknot->user->id]) : '' ?></td>
                <td><?= h($topknot->title) ?></td>
                <td><?= h($topknot->created) ?></td>
                <td><?= h($topknot->modified) ?></td>
                <td><?= h($topknot->status) ?></td>
                <td class="actions">
                   
                <?php if($usuario_corrente['role']=='user'): ?>
                    <?= $this->Html->link(__('Comentar'), ['controller'=>'TopknotsUsers', 'action' => 'add', $topknot->id]) ?>
                  <?php endif ?>

                <?php if($usuario_corrente['role']=='admin'): ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $topknot->id]) ?>
                <?php endif ?>





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
