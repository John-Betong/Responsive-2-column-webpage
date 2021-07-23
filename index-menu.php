<?php declare(strict_types=1);

$title 	= 'Menu.php';
$fffs 	= glob('*.php');
$github = 'https://github.com/John-Betong/Responsive-two-column-web-page/tree/master';
$forum 	= 'https://www.codingforum.net/forum/client-side-development/general-web-building/2432740-how-do-i-create-a-responsive-2-column-page-w-different-content-but-the-same-height';

# LINKS
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


?><!DOCTYPE HTML><html lang="en"><head><meta charset="UTF-8" />
<head>
<meta
	name="viewport"
	content="width=device-width,height=device-height,initial-scale=1"
/>
<style>
/* null margins and padding to give good cross-browser baseline */
html,
body {
	background-color: #f8f8f8; color: #000;
	margin: 0; padding: 0;
	box-sizing: border-box;
} 
h1, h2 {
	margin:0;
	padding:0;
}
header {
	background-color: #ddd; color: #000;
	border-bottom:  solid 1px #ccc;
}
header b {
	float: right;
}
#outer {
	text-align: center;
}
main {
	display: inline-block;
	margin: 4.2em auto;
	padding:  1em;
}
main h2 {
	background-color:#dfd;
}
main section {
	border: solid 1px #ccc;
	text-align: left;
}
section ul li {
	margin: 0 1em 1em 0;
}
main section p {
	width: 88%; margin: 0 auto;
	text-align: left;
	background-color: #efe;
}
.more {
	float: right;
	font-size: large;
	text-decoration: none;
}
</style>
<title> <?= $title ?> </title>	
</head>
<body>

<header class="bgd">	
	<h1> <?= $title ?> </h1>		
	<b> <a href="<?= $github ?>"> GitHub </a> </b>
</header>

<div id="outer">
	<main>
		<section>
			<h2> 
				<b> Menu </b> 
			</h2>

			<ul> 
				<?= $links ?>
			</ul>	

			<h3> Nicked from Forum post </h3>
			<p> 
			How do I create a responsive 2 column page w/different content % but the same height?
			<br>
			Jul 18, 2021, 06:16 AM
			<br>
			I have been learning how to do two column layouts with multiple sections in this folder: http://62.171.149.227/newsite3/index2.html
			<br>
			I have created a new folder (so that the above folder and page still apply to posts that mention it) here: http://62.171.149.227/newsite4/index4.html to continue learning.
			<br>
			I did this because the first link has the element heights (two &lt;div&gt;> elements) fixed at 30em. It works very nicely.... until the content of the first section becomes larger than the container, at 30em, can handle. So I was looking for a solution where both elements (that are side by side on the page) grew depending on the content on the first 
			<a class="more" href="<?= $forum ?>"> ...more </a>
		</p>
		</section>
	</main>

</div><!-- id="outer" -->

</body>
</head>
