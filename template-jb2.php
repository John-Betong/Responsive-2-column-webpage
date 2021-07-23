<?php declare(strict_types=1);

$title = 'Test- Rachel\'s';
$forum = 'https://www.codingforum.net/forum/client-side-development/general-web-building/2432716-why-is-there-space-between-main-section-aside-the-parent-container-top';

?><!DOCTYPE HTML><html lang="en"><head><meta charset="UTF-8" />
<meta
	name="viewport"
	content="width=device-width,height=device-height,initial-scale=1"
/>
<title> <?= $title ?> </title>
<link
	rel="stylesheet"
	href="template/new-jb2.css"
	media="screen"
/>
<!-- ,projection,tv -->

</head>

<body>
Body
<div id="top">
	<header>
		<h1> 
			<?= $title ?> 
			<i> 
				<a href="<?= $forum ?>"> Forum </a> 
			</i>
		</h1>

    <p>
	    	Header goes here
    </p>
    <nav>
	     	<p>
	     		Nav
	     		<br>
	     		<a href="https://search.google.com/test/mobile-friendly?id=Pjg6zaC6UM_oibLpVN7YTw"> 
	     			Google Mobile Friendly Test
	     		</a>
	     		&nbsp; &nbsp; 

	     		<a href='template-ds.php'> template-ds.php </a> 
	     		&nbsp; &nbsp; 

	     		<a href='template-jb2.php'> template-jb2.php </a> 
	     	</p>
    </nav>
	</header>

	<main>
	    <p>
	    	Main
	    </p> 
	    
	    <section>
	    	<h2> Obligatory section header </h2>
	        <p>
	        Section
	      </p>
	    </section>

	    <aside>
	        <p>Aside</p>
	    </aside>    
	    
	    <p>
	    	Main
	    </p>
	</main>

	<footer>
		<p>
			Footer
		</p>
	</footer>

</div>

<?php require '/var/www/footer.php'; ?>

</body>
</html>
