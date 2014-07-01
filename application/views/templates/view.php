<div style="margin: 0 auto;width: 1000px;text-align: left;">
    <span style="text-align: left;margin-left: 10px;"><?php echo $blocktitle ?></span>
    <div style="margin: 10px 0;border-top:1px solid #ccc;border-bottom:1px solid #ccc;text-align: center">
        <?php foreach($query->result() as $row):?>
            <h3>
                <?=$row->title?>
            </h3>
        <?php endforeach;?>
        <?php echo $this->pagination->create_links();?>
    </div>
</div>