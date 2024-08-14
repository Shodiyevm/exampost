<?php

declare(strict_types=1);
require_once "vendor/autoload.php";

$post= new Post();
$posts= $post->getAll();

?>

<div class="list-group list-group-flush">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Text</th>
            <!--  <th>User ID</th> -->

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($posts as $task) : ?>
            <tr>
                <td>
                    <ul>
                        <li></li>
                    </ul>
                </td>
                <td><?php echo $task['content']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
