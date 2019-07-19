<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticlesCat[]|\Cake\Collection\CollectionInterface $articlesCats
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articles Cat'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articlesCats index large-9 medium-8 columns content">
    <h3><?= __('Articles Cats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_cate_artigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articlesCats as $articlesCat): ?>
            <tr>
                <td><?= $this->Number->format($articlesCat->id) ?></td>
                <td><?= h($articlesCat->nome_cate_artigo) ?></td>
                <td><?= h($articlesCat->created) ?></td>
                <td><?= h($articlesCat->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articlesCat->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlesCat->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlesCat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesCat->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
