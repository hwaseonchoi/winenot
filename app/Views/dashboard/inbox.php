<?php $this->layout('layout_dashboard', ['title' => 'Votre messagerie']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
    <section>

        <h2>Bienvenue sur votre messagerie. <span>Vous avez (<strong><?= $count_unread_messages ?></strong>) fils de discussion en cours.</span></h2>

    	<table class="table table-bordered">
        <?php foreach ($messages as $message): ?>
            <tr>
                <td>Photo</td>
                <td>
                    <a href="<?= $this->url('inbox_thread', ['id' => $message['mp_token']]) ?>">
                    <?php if (!empty($message['firstname'])): ?>
                        <?= $message['firstname'] . ' ' . $message['lastname'] ?>
                    <?php else: ?>
                        Invité
                    <?php endif; ?>
                    </a>
                </td>
                <td>
                    <strong><?= $message['subject'] ?></strong>
                    <br />
                    <?= $message['content'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>

    </section>
</div>
<?php $this->stop('main_content') ?>
