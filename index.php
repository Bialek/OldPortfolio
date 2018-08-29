<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$to = 'contact@bialekrafal.pl'; 
		$subject = 'Message from bialekrafal.pl';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<p>Thank You! I will be in touch</p>';
	} else {
		$result='<p>Sorry there was an error sending your message. Please try again later.</p>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Białek Rafał Portfolio</title>
	<meta name="author" content="Rafał Białek" />
	<meta name="description" content="Rafał Białek Portfolio" />
	<meta name="keywords"  content="Front-end,Portfolio,webdeveloper" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/fullpage.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/styles.min.css"/>
</head>
<body>
<div id="fullpage">
	<div class="section " id="section0">
		<h1>Hi, I'm Rafał, I am a beginner front-end developer. Currently, I am looking for a place for further professional development and learn new technologies.</h1>
		<a href="#about" class="arrow">About me<i class="fas fa-angle-down"></i></a>
	</div>
	<div class="section" id="section1">
		<div class="flex-container">			
			<h2>
				<img src="./images/35x45E.jpg" alt="me">		
				Computers have interested me since childhood, 
				curiosity turned into passions, which is why I decided to graduate from the IT school. 
				There, I wrote my first "Hello World" and started to be interested in creating websites. 
				I made my first commissioned website in 2015. 
				Websites and web applications are created in: HTML, CSS, SCSS, JavaScript, Jquery, React, Redux, NodeJs, ExpressJS. 
				I'm using Git. The code is written according to the best practices, such as BEM and DRY. 
				The project is validated and tested. 
				As a person I am communicative, honest and objective. I can admit guilt, I am not afraid of criticism, 
				I have a large distance to myself. 
				I try to solve my problems by myself. 
				I want to learn React Native in the future.
			</h2>
			<a href="#skills" class="arrow">Skills<i class="fas fa-angle-down"></i></a>
		</div>		
	</div>
	<div class="section" id="section2">
		<div class="flex-container">
			<h5>Skills</h5>		
			<div class="flex-item">
				<p>HTML<img src="./images/icon1.png" alt="icon"></p>
			</div>
			<div class="flex-item">
				<p>CSS<img src="./images/icon2.png" alt="icon"></p>
			</div>
			<div class="flex-item">
				<p>JavaScript<img src="./images/icon3.png" alt="icon"></p>		
			</div>
			<div class="flex-item">
				<p>Sass<img src="./images/icon4.png" alt="icon"></p>		
			</div>
			<div class="flex-item">
				<p>Bootstrap<img src="./images/icon6.png" alt="icon"></p>			
			</div>
			<div class="flex-item">
				<p>JQuery<img src="./images/icon8.png" alt="icon"></p>				
			</div>
			<div class="flex-item">
				<p>ReactJS<img src="./images/icon9.png" alt="icon"></p>			
			</div>
			<div class="flex-item">
				<p>Redux<img src="./images/icon11.png" alt="icon"></p>		
			</div>
			<div class="flex-item">
				<p>NodeJS<img src="./images/icon5.png" alt="icon"></p>		
			</div>
			<div class="flex-item">
				<p>NPM<img src="./images/icon7.png" alt="icon"></p>
			</div>
			<div class="flex-item">
				<p>Git<img src="./images/icon10.png" alt="icon"></p>
			</div>
			<div class="flex-item">
				<p>Unit tests<img src="./images/icon12.png" alt="icon"></p>	
			</div>							
		</div>
		<div class="flex-container">
			<h5>Certificates</h5>
			<div>
				<a href="./images/certificate/html.jpg" target="_blank"><img src="./images/certificate/html-m.jpg" alt="certificate"></a>
				<a href="./images/certificate/css.jpg" target="_blank"><img src="./images/certificate/css-m.jpg" alt="certificate"></a>
				<a href="./images//certificate/js.jpg" target="_blank"><img src="./images/certificate/js-m.jpg" alt="certificate"></a>
				<a href="./images/certificate/kodilla.jpg" target="_blank"><img src="./images/certificate/kodilla-m.jpg" alt="certificate"></a>
			</div>		
		</div>
		<a href="#projects" class="arrow">Projects<i class="fas fa-angle-down"></i></a>
	</div>
	<div class="section" id="section3">
		<h5>Projects</h5>
		<div class="flex-container">
			<div class="flex-item">
				<h4>Chat</h4>
				<div class="miniature project1">
					<div class="layer">
						<div class="tech-icons">
							<span>React.js</span>
							<span>Node.js</span>
							<span>Express.js</span>
							<span>Socket.io</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-18-chat" target="_blank"><i class="fas fa-code"></i></a>
						<a href="https://limitless-fjord-29023.herokuapp.com/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>		
			</div>
			<div class="flex-item">
				<h4>Countries DB</h4>
				<div class="miniature project2">
					<div class="layer">
						<div class="tech-icons">
							<span>React.js</span>
							<span>Redux</span>
							<span>React-router</span>
							<span>Api</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-20-react-router/Database-of-countries" target="_blank"><i class="fas fa-code"></i></a>
						<a href="./countriesdb/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h4>Kanban</h4>
				<div class="miniature project3">
					<div class="layer">
						<div class="tech-icons">
							<span>MongoDB</span>
							<span>Express</span>
							<span>React</span>
							<span>Node</span>
							<span>React DnD</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-23-kanban" target="_blank"><i class="fas fa-code"></i></a>
						<a href="https://guarded-ocean-98725.herokuapp.com/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h4>Stopwatch</h4>
				<div class="miniature project4">
					<div class="layer">
						<div class="tech-icons">
							<span>React.js</span>
							<span>ES6</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-15-es6/15.7-react-stopwatch" target="_blank"><i class="fas fa-code"></i></a>
						<a href="./stopwatch/index.html" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h4>ToDo list</h4>
				<div class="miniature project5">
					<div class="layer">
						<div class="tech-icons">
							<span>Ajax</span>
							<span>JQuery</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-12-ajax/12.7-TODO-list"><i class="fas fa-code"></i></a>
						<a href="./ToDo/index.html" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h4>GitHub Search Engine</h4>
				<div class="miniature project6">
					<div class="layer">
						<div class="tech-icons">
							<span>React</span>
							<span>ES6</span>
							<span>Api</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-15-es6/15.8-Github-users-search-engine" target="_blank"><i class="fas fa-code"></i></a>
						<a href="./github/index.html" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section4">
		<h5>PSD to HTML</h5>
		<div class="flex-container">
			<div class="flex-item">
				<h3>Awax layout</h3>
				<div class="miniature psd1">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Scss</span>
							<span>Bootstrap3</span>
							<span>JQuery</span>
						</div>
						<a href="https://github.com/Bialek/Awax-layout" target="_blank"><i class="fas fa-code"></i></a>
						<a href="https://bialek.github.io/Awax-layout/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Golden layout</h3>
				<div class="miniature psd2">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Scss</span>
							<span>Bootstrap4</span>
						</div>
						<a href="https://github.com/Bialek/golden-layout" target="_blank"><i class="fas fa-code"></i></a>
						<a href="https://bialek.github.io/golden-layout/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Photo layout</h3>
				<div class="miniature psd3">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Scss</span>
							<span>JQuery</span>
							<span>FullPage.js</span>
						</div>
						<a href="https://github.com/Bialek/Photo-layout-fullpage.js" target="_blank"><i class="fas fa-code"></i></a>
						<a href="https://bialek.github.io/Photo-layout-fullpage.js/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="section" id="section5">
		<h5>Games</h5>
		<div class="flex-container">
			<div class="flex-item">
				<h3>Sudoku</h3>
				<div class="miniature game1">
					<div class="layer">
					<div class="tech-icons">
						<span>React</span>
						<span>sudoku-umd</span>
					</div>
						<a href="https://github.com/Bialek/sudoku-react" target="_blank"><i class="fas fa-code"></i></a>
						<a href="./sudoku/index.html" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Rock Paper Scissors Lizard Spock</h3>
				<div class="miniature game2">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>Bootstrap3</span>
							<span>JavaScript</span>
						</div>
						<a href="https://github.com/Bialek/rock-paper-scissors-lizard-spock" target="_blank"><i class="fas fa-code"></i></a>
						<a href="/rock-paper-scissors-lizard-spock/index.html" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Battleship</h3>
				<div class="miniature game3">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>JavaScript</span>
						</div>
						<a href="https://github.com/Bialek/Battleship" target="_blank"><i class="fas fa-code"></i></a>
						<a href="./battleship/index.html" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="section" id="section6">
		<h5>Paid Orders</h5>
		<div class="flex-container">
			<div class="flex-item">
				<h3>Amarant<br>Guesthouse in Pobierowo</h3>
				<div class="miniature order1">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>JavaScript</span>
						</div>
						<a href="http://pobierowo-amarant.pl/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>7 Żab<br>Camping in Pobierowo</h3>
				<div class="miniature order2">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>JavaScript</span>
						</div>
						<a href="http://7zab.com/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Droplet<br>Handmake jewellery</h3>
				<div class="miniature order3">	
					<div class="layer">
						<div class="tech-icons">
							<span>WordPress</span>
							<span>WooCommerce</span>
						</div>
						<a href="http://www.e-droplet.com/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="section" id="section7">
	<div class="flex-container">
			<div class="flex-item">
				<form class="contact" method="post" action="index.php#contact">
					<input type="text" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
					<?php echo "<p>$errName</p>";?>
					<input type="email" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
					<?php echo "<p>$errEmail</p>";?>
					<textarea  placeholder="Your message" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
					<?php echo "<p>$errMessage</p>";?>
					<input type="text" id="human" name="human" placeholder="2 + 3 = ?">
					<?php echo "<p>$errHuman</p>";?>
					<input id="submit" name="submit" type="submit" value="Send">
					<?php echo "<p>$result</p>";?>	
				</form> 
			</div>
			<div class="flex-item">
				<div class="contact">
                    <h2><i class="fas fa-user-alt"></i><a>Białek Rafał</a></h2>
                    <h2><a href="tel:607846422"><i class="fas fa-mobile-alt"></i>607846422</a></h2>
                    <h2><a href="mailto:contact@bialekrafal.pl"><i class="far fa-envelope"></i>contact@bialekrafal.pl</a></h2>
					<h2><a href="https://github.com/Bialek"  target="_blank"><i class="fab fa-github"></i>Github</a></h2>
					<h2><a href="https://www.linkedin.com/in/rafa%C5%82-bia%C5%82ek/"  target="_blank"><i class="fab fa-linkedin"></i>linkedin</a></h2>    
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/fullpage-compressed.js"></script>
<script src="js/scripts-compressed.js"></script>

</body>
</html>