<?php
var_dump($_SESSION);
if (isset($_SESSION["success"]) && $_SESSION["success"] != null) {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.success('<?php echo addslashes($_SESSION["success"]); ?>');
    </script>
    <?php
}

if (isset($_SESSION["error"]) && $_SESSION["error"] != null) {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.error('<?php echo addslashes($_SESSION["error"]); ?>');
    </script>
    <?php
}
?>