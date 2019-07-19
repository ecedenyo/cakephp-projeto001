<div class="users view large-12 medium-12 columns content">
    <h3>Detalhes do usuário <?php echo $usuario->name ?></h3>

    <table class="vertical-table">
        <tr>
            <th>ID</th>
            <td><?php echo $usuario->id ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $usuario->name ?></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><?php echo $usuario->email ?></td>
        </tr>
        <tr>
            <th>Usuário</th>
            <td><?php echo $usuario->username ?></td>
        </tr>
        <tr>
            <th>Cadastrado</th>
            <td><?php echo $usuario->created ?></td>
        </tr>
        <tr>
            <th>Alterado</th>
            <td><?php echo $usuario->modified ?></td>
        </tr>
    </table>
    
    <?php echo $this->Html->link(('Lista Usuários'), ['controller' => 'users', 'action' => 'index']) ?>
</div>
