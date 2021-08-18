<?php

$target = glob("data/images/posts/" . $row['user_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '" width="' . $width . '" height="' . $height .'">';
} else {
    if($row['user_gender'] == 'M') {
        echo '<IMG SRC="ata/images/profiles/M.jpg" width="' . $width . '" height="' . $height .'">';
    } else if ($row['user_gender'] == 'F') {
        echo '<IMG SRC="data/images/profiles/F.jpg" width="' . $width . '" height="' . $height .'">';
    }
}

?>
