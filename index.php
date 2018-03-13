<?php
	$seconds_to_cache = 86400;
	$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
	header("Expires: $ts");
	header("Pragma: cache");
	header("Cache-Control: public, max-age=$seconds_to_cache, true");

	$slug = ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	$filename = "content/" . $slug . ".php";

	//	Manage all of those old urls and send them somewhere meaningful
	$redirect_array = [
	    "post/161397324964/awesome-custom-jeep-crew-chief-715-incredible" => "/custom-jeep-truck",
	    "post/148717611994/a-kids-dream-cardboard-castle-made-out-of-boxes" => "/a-kids-dream-cardboard-castle-boxes",
	    "post/148716861914/customize-and-build-your-jeep" => "/customize-and-build-your-jeep",
	    "post/148714196324/building-my-dream-home" => "/building-my-dream-home",
	    "post/148716711679/top-10-tools-to-improve-your-website-and-increase-perfor" => "/top-10-tools-improve-website-performance",
	    "post/148714258979/some-of-my-oil-paintings" => "/some-of-my-paintings",
	    "post/148714155894/building-a-cardboard-castle" => "/cardboard-castle-from-boxes-fun",
	    "post/158008461834/benvolio-a-folk-inspired-melodic-album-by-danny" => "/benvolio-folk-inspired-music",
	    "some-of-my-oil-paintings" => "/some-of-my-paintings",
	    "customize-and-build-your-jeep" => "/jeep",
	    "building-a-large-cardboard-castle" => "/a-kids-dream-cardboard-castle-boxes",
	    "top-10-tools-to-improve-your-website-and-increase-performance" => "/top-10-tools-improve-website-performance",
	    "standbyme" => "/my-guitar-cover-songs-youtube"
	];

	if (is_file($filename)) {
        include $filename;
    } else {
    	if($slug){
    		$trimSlug = rtrim($slug,"/");
			$trimSlug = rtrim($trimSlug,"/amp");
    		if(array_key_exists($trimSlug, $redirect_array)){
    			$newUrl = $redirect_array[$trimSlug];
    			header("Location: " . $newUrl, TRUE, 301);
    		} else {
    			http_response_code(404);
    			echo "<h3>Page Not Found</h3>";
    		}
    	} else {
    		include "content/home.php";
    	}
    }

?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo $title; ?> | Brandon Tran</title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="/s.css">
	<?

		if($module === "home"){
			//	Content Array and PREFETCH
			$content = [
				"bonsai-tree-hobby",
				"custom-jeep-truck",
				"a-kids-dream-cardboard-castle-boxes",
				"customize-and-build-your-jeep",
				"my-guitar-cover-songs-youtube",
				"some-of-my-paintings",
				"top-10-tools-improve-website-performance",
				"building-my-dream-home",
				"cardboard-castle-from-boxes-fun",
				"benvolio-folk-inspired-music"
			];
			$i=0;
			foreach ($content as $item){
				if($i < 5){
					echo '<link rel="prefetch" href="/' . $item . '">';
				}
				$i++;
			}

		} else {
			echo '<link rel="prefetch prerender" href="/">';
			echo '<link rel="prefetch" href="https://storage.googleapis.com/brandontran-196302.appspot.com/bg-top.jpg">';
		}

	?>
	</head>

<body <?php if($module === "home"){ echo 'class="home"'; } ?>>

	<nav>
		<a href="/" class="icon-home">Home</a>
		<a href="/" class="logo">BRANDON TRAN</a>
	</nav>

	<?php if($module === "home"){ ?>


	<div id="backdrop" style="background-image: url('https://storage.googleapis.com/brandontran-196302.appspot.com/bg-top.jpg');">
		<h2>Creative Technologist, Web Developer, Musician and Builder passionate about bringing innovative products to life</h2>
	</div>
	<?php } ?>

	<div class="main">

		<?php

			// Simple html module renders body html for content pages
			if($module === "html"){
				echo '<section><h1>' . $title . '</h1>' . $body . '</section>';
			}

			// Index main home page
			if($module === "home"){
				echo $body;
				echo "<section>";
				foreach ($content as $item){
					include("content/" . $item . ".php");
					echo "<p><a href='" . $item . "'>" . $title . "</a> - " . $description . "</p>";
				}
				echo "</section>";

			}

		?>

		<footer>
		    &copy; Brandon Tran |
		    <a href="/about">About Me</a> |
		    <a href="/privacy-policy">Privacy Policy</a> |
		    <a href="/contact">Contact Me</a>
		</footer>

	</div>



	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2896135-41"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-2896135-41');
	</script>


</body>
</html>