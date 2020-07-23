<div id ="mahasiswa">
<h2>Data mahasiswa</h2>
<?php
if(!empty($mahasiswa)):?>
    <ul>
        <?php foreach($mahasiswa as $data):?>
            <li> <?=$data ?></li>
            <?php endforeach?>
    </ul>
        <?php
            else:
    ?>
    <p>Data mahasiswa kosong.</p>
    <?php endif ?>
</div>
