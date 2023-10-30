<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Language</th>
            <th>Stars</th>
            <th>Created at</th>
            <th>URL</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($repositories as $repository): ?>
            <tr>
                <td><?php echo $repository['name']; ?></td>
                <td><?php echo $repository['language'] ?? 'N/A'; ?></td>
                <td><?php echo $repository['stargazers_count']; ?></td>
                <td><?php echo date('Y-m-d H:i:s', strtotime($repository['created_at'])); ?></td>
                <td><a target="_blank" href="<?php echo $repository['html_url']; ?>"><?php echo $repository['html_url']; ?></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>