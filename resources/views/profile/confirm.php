<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Confirm | Profile</title>
        <?php var_dump($user); ?>
    </head>
    <body>
        <h1>Confirm</h1>
        <table>
            <tr>
                <th>ユーザー名</th>
                <td><?php echo e($user['username']); ?></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><?php echo e($user['password']); ?></td>
            </tr>
            <tr>
                <th>現在地</th>
                <td>（緯度）<?php echo e($user['latitude']); ?>（経度）<?php echo e($user['longitude']); ?></td>
            </tr>
        </table>
    </body>
</html>