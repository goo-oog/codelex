<?php
declare(strict_types=1);

require 'header.php';
?>
    <br><br>
    <h2>Pievienot personu</h2>
    <h3 class="error-message"><?= $_SESSION['memory']['message'] ?? '' ?></h3>
    <div class="add-person">
        <form method="post" action="/add/execute">
            <label for="code">Personas kods:</label>
            <input type="text" class="edit-note-text-input" id="code" name="code"
                   value="<?= $_SESSION['memory']['code'] ?? '' ?>"/><br><br>

            <label for="name">Vārds:</label>
            <input type="text" class="edit-note-text-input" id="name" name="name"
                   value="<?= $_SESSION['memory']['name'] ?? '' ?>"/><br><br>

            <label for="surname">Uzvārds:</label>
            <input type="text" class="edit-note-text-input" id="surname" name="surname"
                   value="<?= $_SESSION['memory']['surname'] ?? '' ?>"/><br><br>

            <label for="note">Piezīmes</label>
            <input type="text" class="edit-note-text-input" id="note" name="note"
                   value="<?= $_SESSION['memory']['note'] ?? '' ?>"/><br><br>

            <p style="text-align: center">
                <input type="submit" class="button" value="Pievienot">
            </p>
        </form>
    </div>
<?php
require 'home-button.php';
require 'footer.php';