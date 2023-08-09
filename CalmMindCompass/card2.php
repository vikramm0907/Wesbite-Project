<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link rel="stylesheet" href="card2.css">
</head>
<body>
    <div class="grid">
        <div class="grid-items">
            <div class="card">
                <img class="card-img" src="img/mentalHealth.jpg" alt="MentalHealth">
                <div class="card-content">
                    <h1 class="card-header">Extending a Helping Hand
</h1>
                    <p class="card-text">
                    For those currently experiencing emotional turbulence and seeking help, this section is a
compassionate space where you can find solace and support. We provide a variety of resources
including discussions about your problems,relevant and efficient solutions corresponding to
it,personal experiences and testimonies of people who have suffered and overcome the turmoil
of mental suffering. We hope this helps. 
                    </p>
                    <a class="card-btn" href="click.Php">Read More <span>&rarr;</span></a>
                </div>
            </div>
        </div>

        <div class="grid-items">
            <div class="card">
                <img class="card-img" src="img/mentalHealth.jpg" alt="MentalHealth">
                <div class="card-content">
                    <h1 class="card-header"> Empowering Self-Discovery</h1>
                    <p class="card-text">
                    Uncertainty about one's mental well-being can be disorienting. This section focuses on offering
a safe space for individuals who are unsure if they are facing mental health challenges. Through
specially curated educational content,self-assessment tools, and informative resources, at Calm
Mind Compass, we empower you to better understand your emotional landscape and act like a
compass needed to navigate you through these uncharted waters.
                    </p>
                    <a class="card-btn" href="click2.php">Read More <span>&rarr;</span></a>
                </div>
            </div>
        </div>

        <div class="grid-items">
            <div class="card">
                <img class="card-img" src="img/mentalHealth.jpg" alt="MentalHealth">
                <div class="card-content">
                    <h1 class="card-header">Embracing Genetic Mental Health</h1>
                    <p class="card-text">
                    Mental health conditions that arise from genetic factors can present unique challenges. In our
final section, we embrace individuals who have genetic mental disorders or conditions since
birth. Here, you will find resources moulded to address specific conditions, advice from experts,
and a supportive community that shares similar experiences. Focussing and analysing the
problems faced by them to provide efficient solutions for the same. 
                    </p>
                    <a class="card-btn" href="click3.php">Read More <span>&rarr;</span></a>
                </div>
            </div>
        </div>

    
    </div>
</body>
</html>