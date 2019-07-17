<?php
    session_start();
    $_SESSION['email']=="";
    session_unset();
    
?>
<script language="javascript">
    document.location="login.php";
</script>0