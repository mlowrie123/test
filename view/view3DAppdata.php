<!DOCTYPE html>
<html lang="en">


	<h1>Model_3D Data returned from the SQLite database </h1>
    	<?php for ($i=0; $i <count ($data); $i++){ ?>
            <div class="boxModel">

                    <?php echo $data[$i]['x3dModelTitle'] ?>

                    <?php echo $data[$i]['x3dCreationMethod'] ?>

                    <?php echo $data[$i]['modelTitle'] ?>

                   <?php echo $data[$i]['modelSubtitle'] ?>

                    <?php echo $data[$i]['modelDescription'] ?>

            </div>
    	<?php } ?>

</html>