<h2>Résultat de la recherche</h2>

<?php if ($client): ?>

    <p><strong>Nom :</strong> <?= htmlspecialchars($client['nom']) ?></p>
    <p><strong>Prénom :</strong> <?= htmlspecialchars($client['prenom']) ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($client['email']) ?></p>
    <p><strong>Téléphone :</strong> <?= htmlspecialchars($client['tel']) ?></p>

<?php else: ?>

    <p style="color:red;">Aucun client trouvé avec ce nom.</p>

<?php endif; ?>
