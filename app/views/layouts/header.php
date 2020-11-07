<html>
<head>
    <title>DNA_325</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">
    <nav class="nav nav-pills nav-fill">
        <a class="nav-link" href="/two_classes">Два класса</a>
        <a class="nav-link" href="#">Тест Струпа</a>
        <a class="nav-link" href="#">Серия А(Архив результатов)</a>
        <a class="nav-link" href="#">Запросы к БД</a>
    </nav>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php /** @var array $breadcrumb */
            foreach ($breadcrumb as $link => $name) :
                if ($name === end($breadcrumb)) : ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= $name ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item"><a href="<?= $link ?>"><?= $name ?></a></li>
                <?php endif;
                endforeach; ?>
        </ol>
    </nav>
