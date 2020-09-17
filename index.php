<?php
$display_name = "Trevor Geene";
$location = "Las Vegas";
$prefered_title = "Web Developer &amp; Consultant";

$page_title = $display_name." ~ ".$location." ".$prefered_title;;
$base_description = "A ".$location." based ".$prefered_title." with ".(date("Y")-2010)." years of professional experience building websites, applications, and managing projects.";
?>
<!doctype html>
<html lang="en-US">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="<?php echo $display_name; ?>">
		<meta name="description" content="<?php echo $base_description; ?>">
		<meta name="keywords" content="<?php echo $display_name; ?>,<?php echo $location; ?>,Web Developer,Web Consultant,PHP,Python,MySQL,MariaDB,MongoDB,JavaScript,ReactJS">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="1 month">
		<!-- Social Meta -->
		<meta property="fb:app_id" content="1287814887965073" />
		<meta property="og:url" content="http://trevor.geene.co" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $page_title; ?>" />
		<meta property="og:description" content="<?php echo $base_description; ?>" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@trevorgeene" />
		<meta name="twitter:title" content="<?php echo $page_title; ?>" />
		<meta name="twitter:description" content="<?php echo $base_description; ?>" />
		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
		<link rel="manifest" href="favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- Styles -->
		<link rel="preload" href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css">
		<!-- Misc -->
		<title><?php echo $page_title; ?></title>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<!-- Page Header -->
			<header id="contact" itemscope itemtype="http://schema.org/Person">
				<h1><span itemprop="name"><?php echo $display_name; ?></span><span class="phone-break"> ~ </span><span itemprop="jobTitle"><?php echo $prefered_title; ?></span></h1>
				<p><a title="<?php echo $display_name; ?>'s Cell Phone Number" href="tel:&#43;17024857566" itemprop="telephone" rel="nofollow">702&#46;485&#46;7566</a>
						~ <a title="<?php echo $display_name; ?>'s Email Address" href="mailto:trevor&#46;geene&#64;gmail&#46;com" itemprop="email" rel="nofollow">trevor&#46;geene&#64;gmail&#46;com</a></p>
			</header>
			<main id="content">
				<!-- Profesional Summary -->
				<section id="summary">
					<header>
						<h2>Summary</h2>
					</header>
					<p><?php echo $base_description; ?> Excels at creating positive working relationships with a wide variety of clients representing a plethora of industries.</p>
				</section>
				<!-- Employment History -->
				<section id="employment">
					<header>
						<h2>Employment</h2>
					</header>
					<article itemscope itemtype="http://schema.org/Organization">
						<header>
							<h3 itemprop="name">Bid, LLC</h3>
							<span class="dates">
								<time datetime="2017-12">December 2017</time> - <time datetime="2020-05">May 2020</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Lead Web Developer / Project Manager</h4>
						<ul itemprop="description">
							<li>Create a tour reseller site using AMP-HTML.</li>
							<li>Build a content management system to handle all of the front end systems including:
                <ul>
                  <li>Categories</li>
                  <li>Locations</li>
                  <li>Articles</li>
                  <li>Companies/Venues</li>
                  <li>Products</li>
                  <li>Orders</li>
                  <li>Users</li>
                </ul>
							</li>
						</ul>
					</article>
					<article itemscope itemtype="http://schema.org/Organization">
						<header>
							<h3 itemprop="name">AllinWebPro.com, LLC</h3>
							<span class="dates">
								<time datetime="2013-07">July 2013</time> - <time datetime="2017-12">December 2017</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Senior Web Developer</h4>
						<ul itemprop="description">
							<li>Train new web-focused team members.</li>
							<li>Manage clients for both web design and development projects.</li>
							<li>Work with a team to build websites and web applications from the ground up.</li>
							<li>Provide custom development solutions to clients.</li>
						</ul>
					</article>
					<article itemscope itemtype="http://schema.org/Organization">
						<header>
							<h3 itemprop="name">Sin City Gold Buyers</h3>
							<span class="dates">
								<time datetime="2013-01">January 2013</time> - <time datetime="2014-01">January 2014</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Web Developer</h4>
						<ul itemprop="description">
							<li>Work with the owner to build a point of sales and employee management system.</li>
							<li>Features included:
                <ul>
                  <li>Customer Tracking</li>
                  <li>Timesheet Management</li>
                  <li>Reporting System</li>
                </ul>
              </li>
						</ul>
					</article>
					<article itemscope itemtype="http://schema.org/Organization">
						<header>
							<h3 itemprop="name">Cyber House Studios</h3>
							<span class="dates">
								<time datetime="2009-11">November 2009</time> - <time datetime="2012-12">December 2012</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Web Developer</h4>
						<ul itemprop="description">
							<li>Work with a team to build websites and web applications from the ground up.</li>
							<li>Provide custom development solutions to clients.</li>
						</ul>
					</article>
				</section>
				<!-- Profesional Skills -->
				<section id="skills">
					<header>
						<h2>Skills</h2>
					</header>
					<dl itemscope itemtype="http://schema.org/ItemList">
						<dt itemprop="name">Frontend Languages</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">HTML5</li>
									<li itemprop="itemListElement">JavaScript</li>
									<li itemprop="itemListElement">CSS3</li>
								</ul>
							</dd>
						<dt itemprop="name">Backend Languages</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">PHP7</li>
									<li itemprop="itemListElement">PHP5</li>
									<li itemprop="itemListElement">Python3</li>
								</ul>
							</dd>
						<dt itemprop="name">Data Systems</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">MongoDB</li>
									<li itemprop="itemListElement">MySQL/MariaDB</li>
								</ul>
							</dd>
						<dt itemprop="name">Frontend Frameworks</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">AMPscript</li>
									<li itemprop="itemListElement">jQuery</li>
									<li itemprop="itemListElement">ReactJS</li>
									<li itemprop="itemListElement">SASS/SCSS</li>
									<li itemprop="itemListElement">UmbrellaJS</li>
								</ul>
							</dd>
						<dt itemprop="name">Backend Frameworks</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">CodeIgniter</li>
									<li itemprop="itemListElement">Flask</li>
									<li itemprop="itemListElement">WordPress/WooCommerce</li>
								</ul>
							</dd>
						<dt itemprop="name">Other</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">FTP</li>
									<li itemprop="itemListElement">Git</li>
									<li itemprop="itemListElement">Git</li>
									<li itemprop="itemListElement">LAMP Stack</li>
									<li itemprop="itemListElement">SEO/MicroData</li>
									<li itemprop="itemListElement">SSH</li>
									<li itemprop="itemListElement">SVN</li>
								</ul>
							</dd>
					</dl>
				</section>
				<!-- Higher Level Education -->
				<section id="education">
					<header>
						<h2>Education</h2>
					</header>
					<article itemscope itemtype="http://schema.org/EducationalOrganization">
						<header>
							<h3 itemprop="name">The Art Institute of Las Vegas</h3>
							<span class="dates">
								<time datetime="2013-03">March 2013</time>
							</span>
						</header>
						<h4 itemprop="name">Web Design &amp; Interactive Media</h4>
						<ul>
							<li>Bachelor of Science</li>
						</ul>
					</article>
				</section>
			</main>
			<!-- Page Footer -->
			<footer id="meta">
				<p><a href="https://github.com/tgeene" title="<?php echo $display_name; ?>'s GitHub Repositories" rel="nofollow">GitHub</a>
						| <a href="https://www.linkedin.com/in/tgeene/" title="<?php echo $display_name; ?>'s LinkedIn Profile">LinkedIn</a>
						| <a href="https://www.youtube.com/channel/UCAaXQueX_8RgMegjq0Tprfw/" title="<?php echo $display_name; ?>'s YouTube Portfolio" rel="nofollow">YouTube Portfolio</a></p>
			</footer>
		</div>
		<!-- Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-93164263-1', 'auto');
		ga('send', 'pageview');
		</script>
	</body>
</html>
