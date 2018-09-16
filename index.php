<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hemant Bajpai</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css">	
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container">
        <h1>Hemant Bajpai</h1>
        <img src='images/profile.jpg' alt="Hemant Bajpai">
        <h2>About Me</h2>
        <p>My name is Hemant Bajpai. I recently moved to seattle from boston. I am from mechanical background doing job in software industry. I am pursuing masters from Harvard extension school and this is my 10th course.</p>
    </div>
    <div>
        <h3>Quote</h3>
        <p class="quote">
            <?php 
		$quotes = [
			'Where there is love there is life.',
			'Happiness is when what you think, what you say, and what you do are in harmony.',
			'Strength does not come from physical capacity. It comes from an indomitable will.',
			'Be the change that you wish to see in the world',
			'Live as if you were to die tomorrow. Learn as if you were to live forever.'
			];
		
		$random_quote = rand(0, 4);
		echo $quotes[$random_quote];
	    ?>
        </p>
    </div>
</body>

</html>