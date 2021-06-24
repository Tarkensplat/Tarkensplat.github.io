<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/brands.css" integrity="sha384-KtmfosZaF4BaDBojD9RXBSrq5pNEO79xGiggBxf8tsX+w2dBRpVW5o0BPto2Rb2F" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/fontawesome.css" integrity="sha384-8WwquHbb2jqa7gKWSoAwbJBV2Q+/rQRss9UXL5wlvXOZfSodONmVnifo/+5xJIWX" crossorigin="anonymous">

    <link href="css/style.css" type="text/css" rel="stylesheet">

    <title>Samuel Carr</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand scrolling" href="#headImg">Samuel Carr</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scrolling" href="#headImg">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrolling" href="#portfolioPage">Portfolio & Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrolling" href="#aboutPage">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrolling" href="#contactPage">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <header>
            <div id="headImg" class="row justify-content-center">
                <div id="headText">
                    <div class="row justify-content-center">
                        <h1>Samuel Carr</h1>
                    </div>
                    <div class="row justify-content-center">
                        <h2>Game Designer and Developer</h2>
                    </div>
                </div>
            </div>
        </header>

        <div id="aboutPage" class="row justify-content-center">
            <div class="container">
                <div id="aboutHeader" class="aboutRow row justify-content-center">
                    <h1>Who I am</h1>
                </div>

                <div id="aboutCont" class="aboutRow row">
                    <div id="aboutImg" class="about col-lg-4 col-md-6 col-sm-8 mx-auto my-0">
                        <img class=img-fluid src="media/profile.jpg" alt="Samuel Carr">
                    </div>
                    <div id="aboutText" class="about col-lg-8 mx-auto my-auto py-4">
                        <p>
                            I am Samuel Carr, a game developer / designer honing my skills. Having recently graduated from Rochester Institute of Technology, with a BS degree in Game Design and Development, I am focused on bringing fresh ideas and satisfying game play experiences using creativity, grit, and organizational prowess. I am driven by a passion for creating quality gameplay and bringing new ideas to fruition. During my junior year of college, I completed a 6-month internship at Wayfair, where I learned many valuable skills and techniques and got a taste of working a full-time job at a professional company.
                        </p>
                        <p>
                            My specialty when it comes to creating games is leading a team whilst focusing on satisfying gameplay and fresh ideas for game design. I led many teams while in college, planning sprints, coming up with tasks / tickets, and providing direction in various game projects. My skills and experience with and across industry standard applications like Photoshop, Maya, and Unity allow me to complete nearly every part of creating a game, from writing the scripts to implementing the assets.
                        </p>
                        <p>
                            Having completed my 6-month internship as a software engineer at Wayfair, I am now poised for another position with professional experience under my belt. During my tenure, I was exposed to a large company tech stack, and worked directly with my team of skilled engineers as well as the entire engineering department to improve the Wayfair CLI. I learned new programming languages and skills that will be applicable to the current and future of the tech sector, like Git, containerization with Docker, and techniques for efficient CI. I worked directly specifically on making the testing pipeline for our engineering team run faster and more smoothly, by scanning the codebase for tests that were too slow or inefficient, and running diagnostics to find problems quickly, and creating visualizations that allowed the engineering team to quickly pinpoint problems as they cropped up.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="portfolioPage" class="row justify-content-center">
            <div id="portfolioCont">
                <div id="portHead">
                    <h1>Completed Works & Resume</h1>
                </div>
                <div id="portGrid">
                    <div class="row">
                        <div id="portE" class="portfolio col-lg-4 col-md-6" data-toggle="modal" data-target="#EscalationModal">
                            <img class=img-fluid src="media/EscalationPortfolioImg.png" alt="Escalation">
                            <div class="portHover">
                            </div>
                        </div>
                        <div id="portLotLL" class="portfolio col-lg-4 col-md-6" data-toggle="modal" data-target="#LotLLModal">
                            <img class=img-fluid src="media/LotLL_Title.jpg" alt="LotLL">
                            <div class="portHover">
                            </div>
                        </div>
                        <div id="portF" class="portfolio col-lg-4 col-md-6" data-toggle="modal" data-target="#FrogueModal">
                            <img class=img-fluid src="media/FroguePortfolioImg.png" alt="Frogue">
                            <div class="portHover">
                            </div>
                        </div>
                        <div id="portPP" class="portfolio col-lg-4 col-md-6" data-toggle="modal" data-target="#ProspectingPanicModal">
                            <img class=img-fluid src="media/Prospecting_Panic_Title.jpg" alt="LotLL">
                            <div class="portHover">
                            </div>
                        </div>
                        <div id="portSCttR" class="portfolio col-lg-4 col-md-6" data-toggle="modal" data-target="#SlowCanterModal">
                            <img class=img-fluid src="media/SlowCanterPortfolioImg.png" alt="SlowCanter">
                            <div class="portHover">
                            </div>
                        </div>
                        <a id="portRes" class="portfolio col-lg-4 col-md-6" href="media/Samuel_Carr_Game_Design_May_2021.pdf" target="_blank">
                            <img class=img-fluid src="media/ResumePortfolioImg.png" alt="Resume">
                            <div class="portHover">
                            </div>
                        </a>
                    </div>
                </div>
                <div id="portEnd">
                </div>
            </div>
        </div>

        <div id="contactPage" class="row justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <h1>Get in touch</h1>
                </div>
                <div class="row justify-content-center">
                    samuel.robert.carr@gmail.com
                </div>
                <div class="row">
                    <div id="contact">
                        <a href="https://github.com/Tarkensplat?tab=repositories" target="_blank" role="button" class="btn"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/samuel-carr-a7020a173/" target="_blank" role="button" class="btn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- MODALS -->
    <!-- Escalation -->
    <div class="modal fade" id="EscalationModal" tabindex="-1" role="dialog" aria-labelledby="portE" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sgrplmModalTitle">Escalation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Worked as lead gameplay programmer and lead designer on a primary team of 3 programmers and 4
                        artists to create a demo version of Escalation, a 2.5D platformer where the player can jump, climb, and
                        swing to the top of a skyscraper.
                    </p>
                    <p>
                        The illusion of rotation is created using a shader that rotates objects based on the camera’s position.
                    </p>
                    <p>
                        Worked as team lead, managing weekly sprints and team meetings, creating / assigning tasks from a
                        backlog, and planning milestones and status reports every sprint.
                        My specific contributions to the game were as follows:
                    </p>
                    <ul>
                        <li>Designed and coded player movement, including jumping, climbing, and swinging.</li>
                        <li>Created the rotation shader responsible for the rounded building effect.</li>
                        <li>Integrated animations for the player model.</li>
                        <li>Designed the tutorial level.</li>
                    </ul>
                    <p>
                    <p>
                        Link to YouTube playthrough: https://youtu.be/_QT427D9a1Q
                    </p>
                    <img class="img-fluid" src="media/EscalationPortfolio1.png" alt="escalation1">
                    <img class="img-fluid" src="media/EscalationPortfolio2.png" alt="escalation2">
                    <img class="img-fluid" src="media/EscalationPortfolio3.png" alt="escalation3">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- LotLL -->
    <div class="modal fade" id="LotLLModal" tabindex="-1" role="dialog" aria-labelledby="portLotLL" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sgrplmModalTitle">Legend of the Leguminous Legion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Legend of the Leguminous Legion is a turn-based strategy game as it
                        involves 4 players that take turns moving their pieces on the game board.
                        The game involves strategy as players are challenged to earn more points than their
                        opponents by out-maneuvering opponents’ pieces and planning to secure victory.
                    </p>
                    <p>
                        This project was a team effort in a group consisting of five people.
                        My role was as the lead game designer. I pitched the idea and guided it through creation and playtesting.
                    </p>
                    <p>
                        Created a full design document, rule sheet, and physical prototype that was played at the school’s tabletop game club.
                    </p>
                    <p>
                        <img class="img-fluid" src="media/LotLL_Prototype.png" alt="LotLL1">
                        <img class="img-fluid" src="media/LotLLPortfolio1.jpg" alt="LotLL2">
                        <img class="img-fluid" src="media/LotLLPortfolio2.jpg" alt="LotLL3">
                        <img class="img-fluid" src="media/LotLLPortfolio3.png" alt="LotLL4">
                        <img class="img-fluid" src="media/LotLLPortfolio4.png" alt="LotLL5">
                        <img class="img-fluid" src="media/LotLLPortfolio5.png" alt="LotLL6">
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Frogue -->
    <div class="modal fade" id="FrogueModal" tabindex="-1" role="dialog" aria-labelledby="portF" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sgrplmModalTitle">Frogue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Frogue is a fast-paced dungeon crawling experience in much the same vein as The Binding of Isaac and Enter the Gungeon.
                        The game focuses on defeating swarms of enemies all while conserving water and and air to continue shooting without sustaining damage and falling in combat.
                        Another primary focus will be that of slippery combat involving diving underneath the surface to carefully dodge obstacles.
                    </p>
                    <p>
                        I was the lead designer on the game, pitching the idea and leading the team's development. My specific accomplishments are as follows:
                    </p>
                    <ul>
                        <li>Acted as the lead designer for the game, influencing development, the design document, and creating the initial pitch</li>
                        <li>Coded player movement, including the major state machines for the game</li>
                        <li>Created a water shader for the swamp of the level and coded the diving mechanics</li>
                        <li>Implemented art assets for the player character and integrated the animations</li>
                    </ul>
                    <p>
                        Link to YouTube playthrough: https://www.youtube.com/watch?v=T89RqvrZ5aI
                    </p>
                    <p>
                        <img class="img-fluid" src="media/FroguePortfolio1.jpg" alt="frogue1">
                        <img class="img-fluid" src="media/FroguePortfolio2.jpg" alt="frogue2">
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Prospecting Panic -->
    <div class="modal fade" id="ProspectingPanicModal" tabindex="-1" role="dialog" aria-labelledby="portPP" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sgrplmModalTitle">Prospecting Panic</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Prospecting Panic is a party game I helped design with a team of 5 people.
                        It involves players choosing mines secretly and hoping to sabotage other players.
                        Whether that be through tenuous alliances, treacherous backstabs, or straight up sabotage, the player who can best read the room will leave a winner.
                    </p>
                    <p>
                        I helped to design and playtest the succesful game that was created over a month long period. The game loop works as follows:
                    </p>
                    <ul>
                        <li>Mines are restocked (empty mines are restocked with 4 treasure cards while mines with treasure cards left get 2 additional cards).</li>
                        <li>Players secretly choose which action card they are using.</li>
                        <li>Players reveal which action card they are using simultaneously.</li>
                        <li>Players secretly choose which mine they are visiting. They are encouraged to bluff and deceive other players.</li>
                        <li>Players reveal which mine they are going to simultaneously.</li>
                        <li>Mining round (mining round follows its own more intricate rules).</li>
                        <li>Repeat steps 1-6 until no action cards remain.</li>
                    </ul>
                    <p>
                        <img class="img-fluid" src="media/Prospecting_Panic.jpg" alt="pp1">
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Slow Canter to the Right -->
    <div class="modal fade" id="SlowCanterModal" tabindex="-1" role="dialog" aria-labelledby="portSCttR" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sgrplmModalTitle">Slow Canter to the Right</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Play as an orphan polo-playing country club employee who fights to stop big oil companies frim destroying his home! Gameplay consists of multiple waves of enemies that must be fought to proceed to the next wave, culminating in a boss fight. Use your mallet and items from the shop to defeat enemies and save the orphanage in the coliseum platformer.
                    </p>
                    <p>
                        This project was a team effort in a group consisting of four people. My role was as the principal game designer and as the artist for the game. I also ended up doing much of the important code for the game including:
                    </p>
                    <ul>
                        <li>Coded player movement, from jumping to collisions to attacking</li>
                        <li>Created the shop function and the using of items like bombs.</li>
                        <li>Designed the menus, UI, and general game loop for the project.</li>
                        <li>Coded enemy behavior and game progression.</li>
                        <li>Made art assets and animations for everything but the player sprite.</li>
                    </ul>
                    <p>
                        <img class="img-fluid" src="media/SlowCanterPortfolio1.PNG" alt="slowcanter1">
                        <img class="img-fluid" src="media/SlowCanterPortfolio2.PNG" alt="slowcanter2">
                        <img class="img-fluid" src="media/SlowCanterPortfolio3.PNG" alt="slowcanter3">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
    
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/8.6.8/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/8.6.8/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
</body>

</html>