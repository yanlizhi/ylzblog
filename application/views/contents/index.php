<h2><?php echo $title;?></h2>
<?php foreach($contents as $contents_item):?>
<h3><?php echo $contents_item['title'];?></h3>
<div class="main">
 <?php echo $contents_item['text'];?>
 </div>
 <p><a href="<?php echo site_url('contents/'.$contents_item['slug']);?>">View article</a>
<?php endforeach;?>