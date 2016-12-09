<div class="topknots form large-9 medium-8 columns content">
    <?= $this->Form->create($topknot) ?>
    <fieldset>
        <legend><?= __('Add Topknot') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
