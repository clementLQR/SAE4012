<h2>Liste complète des clients</h2>

<table cellpadding="6">
    <tr>
        <th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th>
    </tr>

    <?php foreach ($clients as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['nom']) ?></td>
            <td><?= htmlspecialchars($c['prenom']) ?></td>
            <td><?= htmlspecialchars($c['email']) ?></td>
            <td><?= htmlspecialchars($c['tel']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
