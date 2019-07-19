<?= $this->Form->create('post', ['class' => 'form-signin']) ?>
    <div class="logo mb-3">
        <?= $this->Html->image('cake-iconography.jpg', ['class' => 'iconography']) ?>
    </div>
    <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>

    <?= $this->Flash->render() ?>

    <div class="form-group">
        <label>Usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite o usuário', 'label' => false]) ?>
    </div>
    <div class="form-group">
        <label>Senha</label>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
    </div>

    <?= $this->Form->button(__('Acessar'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    <p class="text-center">Esqueceu a senha?</p>

    <?= $this->Html->image('cake.power.gif', ['class' => 'mt4']) ?>
<?= $this->Form->end() ?>
