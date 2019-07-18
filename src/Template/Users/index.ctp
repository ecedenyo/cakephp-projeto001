<div class="users index large-12 mediu-12 columns content">
<h3>Lista de Usuários</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario) : ?>
        <tr>
            <td><?php echo $usuario->id ?></td>
            <td><?php echo $usuario->name ?></td>
            <td><?php echo $usuario->email ?></td>
            <td>
                <?php echo $this->Html->link(('Ver'), ['action' => 'view', $usuario->id]) ?>
                <?php echo $this->Html->link(('Editar'), ['action' => 'edit', $usuario->id]) ?>
                Apagar
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->Html->link(__('Cadastrar usuário'), ['action' => 'add']) ?>

<div class="paginator">
    <ul class="pagination">
        <?php echo $this->Paginator->first(html_entity_decode('&laquo; ') . __('Primeira')); ?>
        <?php echo $this->Paginator->prev(html_entity_decode('&lsaquo; ') . __('Anterior')); ?>
        <?php echo $this->Paginator->numbers(); ?>
        <?php echo $this->Paginator->next(__('Próxima') . html_entity_decode(' &rsaquo;')); ?>
        <?php echo $this->Paginator->last(__('Última') . html_entity_decode(' &raquo;')); ?>
    </ul>
    <p>
        <?php 
            echo $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrado {{current}} registro(s) do total de {{count}}')]);
        ?>
    </p>
</div>
</div>