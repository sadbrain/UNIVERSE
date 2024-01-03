<?php
if (isset($_SESSION["success"]) && $_SESSION["success"] != null) {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.success('<?php echo addslashes($_SESSION["success"]); ?>');
    </script>
    <?php
    unset($_SESSION['success']);

}

if (isset($_SESSION["error"]) && $_SESSION["error"] != null) {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.error('<?php echo addslashes($_SESSION["error"]); ?>');
    </script>
    <?php
    unset($_SESSION['error']);

}
if (isset($_SESSION["info"]) && $_SESSION["info"] != null) {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.info('<?php echo addslashes($_SESSION["info"]); ?>');
    </script>
    <?php
    unset($_SESSION['info']);

}
if (isset($_SESSION["warn"]) && $_SESSION["warn"] != null) {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.warn('<?php echo addslashes($_SESSION["warn"]); ?>');
    </script>
    <?php
    unset($_SESSION['warn']);

}
?>