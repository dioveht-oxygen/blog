<?php
include_once '../layouts/header.php';
$idmodel = 1;
?>
<script>
    document.title = 'Sách';
</script>
<div class="container-fluid">

</div>
<?php
if(isset($success)){
    echo "<script>
           alert('$success');
                </script>";
}
?>
<?php
include_once '../layouts/footer.php';
?>
