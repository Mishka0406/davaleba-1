<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jobs.ge RSS</title>
<link rel="stylesheet" href="test.css"/>
</head>

<body>
<?php 
	$file = 'http://www.jobs.ge/rss/jobs/';
	$feed = simplexml_load_file($file);
?>
<header>
    <h1> <?php echo $feed->channel->title; ?> </h1>
</header>
	 <?php
		foreach($feed->channel->item as $item):
		$data = strtotime($item->pubDate);
		$time = date('D,   g:i A', $data);
	?>
 <section id="feeds">
	<ul id="feed_list">
    	<li id="feed_title">
				<b><?php echo $item->title;?></b>
				<time id="time"><?php echo $time ?></time>				
        </li>
        <li id="description">
        		<?php echo $item->description; ?>
                <a href="<?php echo $item->link; ?>" id="link">Read more</a>
        </li>
     </ul>
</section>
       <?php endforeach; ?>    
	
</body>
</html>