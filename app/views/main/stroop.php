<?php require_once __DIR__.'/../layouts/header.php'; ?>
    <form action="/stroop/result_stroop" method="post">
        <?php for ($i=0;$i<5;$i++): ?>
        <b style="color: <?= /** @var string $color */$color[$i] ?>">
            <?= /** @var string $word */ $word[$i] ?>
        </b>
            <br>

            <?php /** @var array $colors */
            foreach ($colors as $col): ?>
                <label>
                    <input type="radio" name="result[<?= $i ?>]"
                        <?php if ($word[$i] === $col): ?> value="1" <?php endif; ?>>
                    <?= $col ?>
                </label><br>
            <?php endforeach; ?>
            <hr>
        <?php endfor; ?>
        <input type="submit">
    </form>
<?php require_once __DIR__.'/../layouts/footer.php'; ?>