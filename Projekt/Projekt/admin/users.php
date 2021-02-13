<?php
require 'database/dbconfig.php';
include 'inc/head.php';
include 'inc/navbar.php';


$users = $connection->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="wrapper">
    <h1>User Table</h1>
    <main>
      <table>
          <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                
            </tr>
          </thead>
          <tbody>
              <?php foreach ($users as $i => $user) : ?>
              <tr>
                <td><?php echo $i + 1 ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
          
      </table>
    </main>
  </div>

</body>
</html>