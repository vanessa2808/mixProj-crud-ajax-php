<?php
if (isset($_SESSION['msg'])) {
    ?>
    <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><p><?= $_SESSION['msg']; ?></p></strong>
    </div>
    <?php
    unset($_SESSION['msg']);
}
?>
