// connect

$connect = mysqli_connect(host: 'localhost', user: 'test', password: 'password', database: 'crud');


if (!$conect) {
    die  ('error, sasat syka')
}