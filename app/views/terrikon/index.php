<?php require_once __DIR__.'/../layouts/header.php'; ?>
<form action="/terrikon/result" method="post">
    <label>
        <select name="season" class="form-control" required>
            <option value="">Выбрать сезон</option>
            <?php /** @var array $seasons */
            foreach ($seasons as $season):
                if (empty($season)): ?>
                    <option value="table">Текущий сезон</option>
                <?php else: ?>
                    <option value="<?= $season ?>/table"><?= $season ?></option>
                <?php endif;
            endforeach; ?>
        </select>
    </label>

    <label>
        <input type="text" class="form-control" name="team" placeholder="название команды"
               title="название команды" required>
    </label>
    <input type="submit" class="btn btn-success">
</form>
<?php require_once __DIR__.'/../layouts/footer.php'; ?>
