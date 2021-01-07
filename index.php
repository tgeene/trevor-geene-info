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
		<meta property="og:url" content="https://trevor.geene.co" />
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
		<link rel="apple-touch-icon" sizes="114x114" href="favicons//apple-icon-114x114.png">
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
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
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
			<header id="contact" itemscope itemtype="https://schema.org/Person">
				<h1><span itemprop="name"><?php echo $display_name; ?></span><span class="phone-break"> ~ </span><span itemprop="jobTitle"><?php echo $prefered_title; ?></span></h1>
				<p><a title="<?php echo $display_name; ?>'s Cell Phone Number" href="" itemprop="telephone" rel="nofollow"></a>
						~ <a title="<?php echo $display_name; ?>'s Email Address" href="" itemprop="email" rel="nofollow"></a></p>
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
					<article itemscope itemtype="https://schema.org/Organization">
						<header>
							<h3 itemprop="name">RoundSky Inc</h3>
							<span class="dates">
								<time datetime="2020-12">December 2020</time> - <time datetime="<?php echo date("Y-m"); ?>">Present</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Web Developer</h4>
						<ul itemprop="description">
							<li>
								Design custom Docker containers for local, testing, and production enviroments.
								<ul>
									<li>
										Build linux virutal machines using install commands and custom bash scripts.
									</li>
								</ul>
							</li>
							<li>
								Maintain and expand upon companies existing code base.
								<ul>
									<li>
										Use PHP, MySQL, and jQuery to add functionality to custom admin management panel.
									</li>
									<li>
										Make changes to MariaDB tables and update Propel XML to generate ORM Class scripts.
									</li>
								</ul>
							</li>
						</ul>
					</article>
					<article itemscope itemtype="https://schema.org/Organization">
						<header>
							<h3 itemprop="name">Bid, LLC</h3>
							<span class="dates">
								<time datetime="2017-12">December 2017</time> - <time datetime="2020-05">May 2020</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Lead Web Developer / Project Manager</h4>
						<ul itemprop="description">
							<li>
								Created a responsive client facing tour reseller website.
								<ul>
									<li>
										Used Googles AMPscript to create moble first HTML webpages.
									</li>
									<li>
										Utilized SASS to create template specific stylesheets to reduce page load speed.
									</li>
									<li>
										Built site on top of the CodeIgniter framework to handle MySQL connection and templating.
									</li>
								</ul>
							</li>
							<li>
								Created a custom CMS for both administrators and affiliates.
								<ul>
									<li>
										Utilized HTML, SASS, and jQuery to create a rubst interface.
									</li>
									<li>
										Built site on top of the CodeIgniter framework to handle MySQL connection and templating.
									</li>
								</ul>
							</li>
						</ul>
					</article>
					<article itemscope itemtype="https://schema.org/Organization">
						<header>
							<h3 itemprop="name">AllinWebPro.com, LLC</h3>
							<span class="dates">
								<time datetime="2013-07">July 2013</time> - <time datetime="2017-12">December 2017</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Senior Web Developer</h4>
						<ul itemprop="description">
							<li>
								Train new web-focused team members.
								<ul>
									<li>
										Introduce them to client and project management systems.
									</li>
									<li>
										Instruct on how to handle project testing and publishing.
									</li>
								</ul>
							</li>
							<li>
								Manage clients for both web design and development projects.
								<ul>
									<li>
										Meet with clients to establish start of projects and define scope documents.
									</li>
									<li>
										Review projects and maintain contact with client as project proceeds.
									</li>
								</ul>
							</li>
							<li>
								Work with a team to build websites and web applications.
								<ul>
									<li>
										Turned PSDs into responsive page designs.
									</li>
									<li>
										Customize WordPress themes and plugins.
									</li>
								</ul>
							</li>
							<li>
								Provide custom development solutions to clients.
								<ul>
									<li>
										Utilize CodeIgniter or Meteor with HTML5, CSS3, and jQuery to create unique applications.
									</li>
									<li>
										Manage and store data using MySQL or MongoDB depending on projects needs.
									</li>
								</ul>
							</li>
						</ul>
					</article>
					<article itemscope itemtype="https://schema.org/Organization">
						<header>
							<h3 itemprop="name">Sin City Gold Buyers</h3>
							<span class="dates">
								<time datetime="2013-01">January 2013</time> - <time datetime="2014-01">January 2014</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Web Developer</h4>
						<ul itemprop="description">
							<li>
								Work with the owner to build a point of sales and employee management system.
								<ul>
									<li>
										Utilize CodeIgniter with HTML5, CSS3, and jQuery to create a custom application.
									</li>
									<li>
										Manage and store data using MySQL.
									</li>
								</ul>
							</li>
						</ul>
					</article>
					<article itemscope itemtype="https://schema.org/Organization">
						<header>
							<h3 itemprop="name">Cyber House Studios</h3>
							<span class="dates">
								<time datetime="2009-11">November 2009</time> - <time datetime="2012-12">December 2012</time>
							</span>
						</header>
						<h4 itemprop="jobTitle">Web Developer</h4>
						<ul itemprop="description">
							<li>
								Work with a team to build websites and web applications.
								<ul>
									<li>
										Turned PSDs into responsive page designs.
									</li>
									<li>
										Customize WordPress themes and plugins.
									</li>
								</ul>
							</li>
							<li>
								Provide custom development solutions to clients.
								<ul>
									<li>
										Utilize CodeIgniter or Meteor with HTML5, CSS3, and jQuery to create unique applications.
									</li>
									<li>
										Manage and store data using MySQL or MongoDB depending on projects needs.
									</li>
								</ul>
							</li>
						</ul>
					</article>
				</section>
				<!-- Profesional Skills -->
				<section id="skills">
					<header>
						<h2>Skills</h2>
					</header>
					<dl itemscope itemtype="https://schema.org/ItemList">
						<dt itemprop="name">Frontend Languages &amp; Frameworks</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">HTML 5</li>
									<li itemprop="itemListElement">AMPscript</li>
									<li itemprop="itemListElement">CSS 3</li>
									<li itemprop="itemListElement">SASS/SCSS</li>
									<li itemprop="itemListElement">JavaScript</li>
									<li itemprop="itemListElement">jQuery</li>
									<li itemprop="itemListElement">React</li>
									<li itemprop="itemListElement">UmbrellaJS</li>
								</ul>
							</dd>
						<dt itemprop="name">Backend Languages &amp; Frameworks</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">PHP 5/7/8</li>
									<li itemprop="itemListElement">CodeIgniter</li>
									<li itemprop="itemListElement">WordPress/WooCommerce</li>
									<li itemprop="itemListElement">Python 3</li>
									<li itemprop="itemListElement">Flask</li>
									<li itemprop="itemListElement">Tkinter</li>
								</ul>
							</dd>
						<dt itemprop="name">Database Systems &amp; Data Formats</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">MongoDB</li>
									<li itemprop="itemListElement">MySQL/MariaDB</li>
									<li itemprop="itemListElement">XML</li>
									<li itemprop="itemListElement">JSON</li>
									<li itemprop="itemListElement">CSV</li>
								</ul>
							</dd>
						<dt itemprop="name">Servers &amp; Virtual Enviroments</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">CentOS</li>
									<li itemprop="itemListElement">Ubuntu</li>
									<li itemprop="itemListElement">Apache 2</li>
									<li itemprop="itemListElement">OpenLiteSpeed</li>
									<li itemprop="itemListElement">Docker</li>
								</ul>
							</dd>
						<dt itemprop="name">Server and File Mangment</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">WHM/CPanel</li>
									<li itemprop="itemListElement">FTP</li>
									<li itemprop="itemListElement">SFTP</li>
									<li itemprop="itemListElement">SSH</li>
									<li itemprop="itemListElement">Git</li>
									<li itemprop="itemListElement">SVN</li>
								</ul>
							</dd>
						<dt itemprop="name">Miscellaneous</dt>
							<dd>
								<ul class="skills">
									<li itemprop="itemListElement">OOP</li>
									<li itemprop="itemListElement">REST</li>
									<li itemprop="itemListElement">SEO/MicroData</li>
									<li itemprop="itemListElement">Unit Testing</li>
									<li itemprop="itemListElement">WSL 1/2</li>
									<li itemprop="itemListElement">Bash</li>
								</ul>
							</dd>
					</dl>
				</section>
				<!-- Higher Level Education -->
				<section id="education">
					<header>
						<h2>Education</h2>
					</header>
					<article itemscope itemtype="https://schema.org/EducationalOrganization">
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
				<p><a href="https://djinn.dev" title="<?php echo $display_name; ?>'s Development Site" target='_blank'>Djinn Dev</a>
						| <a href="https://github.com/tgeene" title="<?php echo $display_name; ?>'s GitHub Repositories" rel="nofollow" target='_blank'>GitHub</a>
						| <a href="https://www.linkedin.com/in/tgeene/" title="<?php echo $display_name; ?>'s LinkedIn Profile" rel="nofollow" target='_blank'>LinkedIn</a>
						| <a href="https://www.youtube.com/c/TrevorGeene" title="<?php echo $display_name; ?>'s YouTube Portfolio" rel="nofollow" target='_blank'>YouTube Portfolio</a></p>
			</footer>
		</div>
		<?php if(!isset($_GET['ref']) || $_GET['ref'] !== 'djinn-development'): ?>
			<div id="modal-background" onclick="closeModal();"></div>
			<div id="modal-content">
				<p>This site is now only used to display my resume. If you would like to view my primary website you can do so by clicking the link below.</p>
				<p><a href="https://www.djinn.dev" title="Djinn Development" target="_blank">https://www.djinn.dev</a></p>
			</div>
			<script type="text/javascript">
				const closeModal = () => {
					document.getElementById('modal-background').remove();
					document.getElementById('modal-content').remove();
				};
			</script>
		<?php endif; ?>
		<!-- Bot Protection -->
		<script type='text/javascript'>
			const areaCode = '702', firstThree = '485', lastFour = '7566', userFirst = 'trevor', userLast = 'geene', host = 'gmail', ext = 'com';
			document.addEventListener("DOMContentLoaded", function() {
				let phoneLink = document.querySelector('#contact a[itemprop="telephone"]');
				phoneLink.href = 'tel:+1' + areaCode + firstThree + lastFour;
				phoneLink.text = areaCode + '.' + firstThree + '.' + lastFour;
				let emailLink = document.querySelector('#contact a[itemprop="email"]');
				emailLink.text = userFirst + '.' + userLast + '@' + host + '.' + ext;
				emailLink.href = 'mailto:' + emailLink.text;
			});
		</script>
		<!-- Analytics -->
		<script type='text/javascript'>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-93164263-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>
