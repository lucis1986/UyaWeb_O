<div style="margin: 0 auto;width: 1000px;text-align: left;">
    <span style="text-align: left;margin-left: 10px;"><?php echo $blocktitle ?></span>

    <div style="margin: 10px 0;border-top:1px solid #ccc;border-bottom:1px solid #ccc;text-align: center;min-height: 300px;">
        <ul>
            <?php foreach ($query->result() as $row): ?>
                <li><a href=<?php echo "\"/news/index/".$row->Id."\"";?>><?=$row->Title?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>