<?php

require_once 'includes.php';

$sql = 'SELECT * FROM `user` ORDER BY `id` DESC LIMIT 5';

$users = $connection
    ->query($sql)
    ->fetchAll(PDO::FETCH_ASSOC);

/**
 * @todo Update user
 * @todo Delete User
 *
 * @todo Pagination
 */
?>

<?php
require_once 'template_head.php';
?>

<h3>Users</h3>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="/update-user.php?id=<?= $user['id'] ?>">
                    <button>
                        Update
                    </button>
                </a>
                <form method="post" action="/delete-user.php?id=<?= $user['id'] ?>">
                    <button>
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>