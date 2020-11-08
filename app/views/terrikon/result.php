<?php require_once __DIR__.'/../layouts/header.php';
/** @var array $tableArray */
if (count($tableArray) === 1): ?>
    <div class="alert alert-danger" role="alert">
        Введите корректное название команды или эта команда в этом сезоне не участвует
    </div>
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Команда <?= $_POST['team'] ?> в сезоне <?= /** @var string $season */ $season ?: 'текущем' ?>
        <?php if ($season) : ?> заняла <?php else: ?> занимает <?php endif; ?>
        <?= /** @var string $teamPosition */ $teamPosition ?> место
    </div>
<?php endif;
require_once __DIR__.'/../layouts/footer.php'; ?>