<?php declare(strict_types=1);
define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']) ;

$title 	= 'Menu.php';
$online = 'https://this-is-a-test-to-see-if-it-works.tk/codingforum/JD-Responsive-2-column-webpage/';
$github = 'https://github.com/John-Betong/Responsive-2-column-webpage.git';
$forum 	= 'https://www.codingforum.net/forum/client-side-development/general-web-building/2432740-how-do-i-create-a-responsive-2-column-page-w-different-content-but-the-same-height';

# LINKS
	$fffs 	= glob('*.php');
	$links 	= '';
		foreach($fffs as $key => $link) :
			if($key) : # OMIT index-menu.php
				$links .= <<< ____EOT
					<li>
						<a href="$link"> $link </a>
					</li>
____EOT;
			endif;
		endforeach;

$navs = [
	'Github' 		=> $github,
	'Online' 		=> $online,
	'Forum' 		=> $forum,
	'Validate' 	=> '?vvv',
];
$navItems = '';
foreach($navs as $key => $nav) :
	$navItems .= "<li> <a href='$nav'> $key </a> </li>";
endforeach; 

?><!DOCTYPE HTML><html lang="en"><head><meta charset="UTF-8" />
<head>
<meta
	name="viewport"
	content="width=device-width,height=device-height,initial-scale=1"
>
<link
	rel="stylesheet"
	href="template/index-menu.css"
	media="screen"
/>
<title> <?= $title ?> </title>	
</head>
<body>

<header class="bgd">	
	<h1> <?= $title ?> </h1>		
	<a href="incs/RSYNC.php">RSYNC </a>,
</header>

<nav>
	<ul>
		<?= $navItems ?>
	</ul>
</nav>

<div id="outer">
	<main>
		<section>
			<h2> Nicked from Forum post </h2>
			<p> 
				How do I create a responsive 2 column page w/different content % but the same height?
			</p><p>
				Jul 18, 2021, 06:16 AM
			</p><p>
				I have been learning how to do two column layouts with multiple sections in this folder: http://62.171.149.227/newsite3/index2.html
			</p><p>
				I have created a new folder (so that the above folder and page still apply to posts that mention it) here: http://62.171.149.227/newsite4/index4.html to continue learning.
			</p><p>
				I did this because the first link has the element heights (two &lt;div&gt;> elements) fixed at 30em. It works very nicely.... until the content of the first section becomes larger than the container, at 30em, can handle. So I was looking for a solution where both elements (that are side by side on the page) grew depending on the content on the first 
			<a class="more" href="<?= $forum ?>"> ...more </a>
		</p>
		</section>
		
		<div id="extra">	
			<h2> 
				<b> Menu </b> 
			</h2>

			<ul> 
				<?= $links ?>
			</ul>	
		</div><!-- id=extra -->

	</main>

</div><!-- id="outer" -->

<?php require '/var/www/footer.php'; ?>

</body>
</head>
