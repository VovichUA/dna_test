<?php require_once __DIR__.'/../views/layouts/header.php'; ?>
<div class="alert alert-success" role="alert">
    <p>запрос, который бы выводил полное имя и баланс человека на данный момент, для примера будет пользователь с id=2</p>
    <hr>
    <p class="mb-0">"SELECT persons.fullname, SUM(transactions.amount)+100 FROM persons,transactions WHERE persons.id=2 AND transactions.to_person_id=2 GROUP BY persons.fullname"</p>
</div>
<div class="alert alert-success" role="alert">
    <p>запрос, который бы выводил город, представители которого участвовали в передаче денег наибольшее количество раз</p>
    <hr>
    <p class="mb-0">"SELECT cities.name FROM (SELECT b.city_id FROM (SELECT COUNT(persons.id) as counter, persons.city_id FROM (SELECT to_person_id as person_id, COUNT(DISTINCT transaction_id) FROM transactions GROUP BY person_id UNION SELECT from_person_id as person_id, COUNT(DISTINCT transaction_id) FROM transactions GROUP BY person_id) as a JOIN persons ON persons.id=a.person_id GROUP BY persons.city_id) as b ORDER BY b.counter DESC LIMIT 1) as cities_id, cities WHERE cities.id=cities_id.city_id"</p>
</div>
<div class="alert alert-success" role="alert">
    <p>запрос, отражающий все транзакции, где передача денег осуществлялась между представителями одного города</p>
    <hr>
    <p class="mb-0">"SELECT counter.transaction_id FROM (SELECT trans.transaction_id, COUNT(DISTINCT trans.city_id) as counter FROM (SELECT transactions.transaction_id, persons.city_id FROM transactions, persons WHERE transactions.from_person_id = persons.id UNION SELECT transactions.transaction_id,persons.city_id FROM transactions, persons WHERE transactions.to_person_id = persons.id) AS trans GROUP BY trans.transaction_id) as counter WHERE counter.counter=1"</p>
</div>
<?php require_once __DIR__.'/../views/layouts/footer.php'; ?>
<!-- persons,transactions  -->