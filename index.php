<?php
    if (isset($_POST["submit_points"])) {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
        <iframe width="100%" height="500px" src="https://maps.google.com/maps?q=
            <?php echo $latitude;?>,
            <?php echo $longitude; ?>&output=embed">
        </iframe>
        <?php
    }
?>

<form method="Post">
    <input type="text" name="latitude" placeholder="Enter latitude">
    <input type="text" name="longitude" placeholder="Enter longitude">
    <input type="submit" name="submit_points">
</form>