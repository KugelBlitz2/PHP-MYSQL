<?php

include_once __DIR__ . '/config.php';

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <style>
    body { background:#f8f9fa; }
    .card-table { overflow-x:auto; }
    .table td, .table th { vertical-align: middle; }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">My App</a>
    <div class="ms-auto">
      <a class="btn btn-outline-light btn-sm" href="signup.php">Add user</a>
    </div>
  </div>
</nav>

<div class="container my-4">
  <div class="card shadow-sm">
    <div class="card-body">
      <h4 class="card-title mb-3">Dashboard</h4>

      <?php if (!empty($_SESSION['user'])): ?>
        <div class="alert alert-success py-2">
          Logged in: <strong><?= htmlspecialchars($_SESSION['user']['name'] . ' ' . $_SESSION['user']['surname']) ?></strong>
          &nbsp;(<small><?= htmlspecialchars($_SESSION['user']['email']) ?></small>)
        </div>
      <?php endif; ?>

      <div class="card-table">
        <table class="table table-striped table-hover table-bordered">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $u): ?>
              <tr>
                <td><?= htmlspecialchars($u['id']) ?></td>
                <td><?= htmlspecialchars($u['name']) ?></td>
                <td><?= htmlspecialchars($u['surname']) ?></td>
                <td><?= htmlspecialchars($u['email']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="mt-3">
        <a class="btn btn-secondary" href="signup.php">Add another</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>