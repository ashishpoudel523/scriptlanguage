<?php
    include 'includes/header.php';

?>


<form action="config/insertindb.php" method="post">
    <label>Title: <input type="text" name="titlee"> </label>
    <br>
    <label for="">Content: <input type="text" name="contentt"></label>
    <br>
    <button type="submit" name="submit"> Create Blog</button>
</form>


<?php
    include 'includes/footer.php';

?>