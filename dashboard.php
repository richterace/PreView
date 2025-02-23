<?php
require 'connection.php'; // Adjust path as necessary
$connect = Connect();

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect if not logged in
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreView Dashboard</title>
    <link rel="stylesheet" href="css\dashboard.css">
    <link rel="stylesheet" href="css\book.css">
    <link rel="stylesheet" href="css\trailer.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-container">
        
            <div class="logo">
                <img class="logoimg" src="background\logo2.png" alt="Logo">
            </div>
         
            <ul>
                <li><a href="#" data-target="home-main">HOME</a></li>
                <li><a href="#" data-target="now-showing-main">NOW SHOWING</a></li>
                <li><a href="#" data-target="upcoming-movies-main">UPCOMING MOVIES</a></li>
                <li><a href="#" data-target="streaming-soon-main">STREAMING SOON</a></li>
            </ul>
        
            <div class="user-menu">
                <img src="background\User.png" alt="User Icon">
                <img src="background\Menu.png" alt="Menu Icon">
            </div>
          
        </div>
        
    </header>

    <main id="home-main" class="section active">    
        <div class="intro-bg"">
        <h1 style="margin-left: 70px; position:absolute; top: 220px; font-size:70px;font-family:'Almarai', sans-serif; font-weight: 400;">Inside Out 2</h1>
        <h1 style="margin-left: 70px; position:absolute; top: 340px; font-size:40px;font-family:'Almarai', sans-serif; font-weight: 400;">Now Showing</h1>
        <img src="posters/insideout.png" alt="User Icon" id="background-img">
        <button class="popupButton" onclick="showPopup('posters/insideout.png', 'Inside Out 2', 'trailer/insideout.mp4', 'Joy, Sadness, Anger, Fear and Disgust have been running a successful operation by all accounts. However, when Anxiety shows up, they aren\'t sure how to feel.', 'Amy Poehler, Maya Hawke, Kensington Tallman', 'Meg LeFauve, Dave Holstein, Kelsey Mann', 'Mark Nielsen', 'Walt Disney Studios Motion Pictures')">Buy Tickets</button>
        </div>

        <div class="intro-bg"">
        <h1 style="margin-left: 70px; position:absolute; top: 220px; font-size:70px;font-family:'Almarai', sans-serif; font-weight: 400;">Garfield The Movie</h1>
        <h1 style="margin-left: 70px; position:absolute; top: 340px; font-size:40px;font-family:'Almarai', sans-serif; font-weight: 400;">Now Showing</h1>
        <img src="posters/garfield.png" alt="User Icon" id="background-img">
        <button class="popupButton" onclick="showPopup('posters/garfield.png', 'Garfield The Movie', 'trailer/garfield.mp4', 'After an unexpected reunion with his long-lost father, the street cat Vic, Garfield is forced to leave his very comfortable life with Harald behind. Together with Vic and Odie, he plans a crazy robbery.', 'Chris Pratt, Samuel L. Jackson, Hannah Waddingham', 'Paul A. Kaplan, Mark Torgove, David Reynolds', 'John Cohen, Broderick Johnson, Andrew A. Kosove, Steven P. Wegner, Craig Sost, Namit Malhotra', 'Sony Pictures Releasing')">Buy Tickets</button>
        </div>

        <div class="intro-bg"">
        <h1 style="margin-left: 70px; position:absolute; top: 220px; font-size:70px;font-family:'Almarai', sans-serif; font-weight: 400;">Despicable Me 4</h1>
        <h1 style="margin-left: 70px; position:absolute; top: 340px; font-size:40px;font-family:'Almarai', sans-serif; font-weight: 400;">Now Showing</h1>
        <img src="posters/despicable.png" alt="User Icon" id="background-img">
        <button class="popupButton" onclick="showPopup('posters/despicable.png', 'Despicable Me 4', 'trailer/despicable.mp4', 'Gru welcomes a new member to the family, Gru Jr., who\'s intent on tormenting his dad. However, their peaceful existence soon comes crashing down when criminal mastermind Maxime Le Mal escapes from prison and vows revenge against Gru.', 'Steve Carell, Kristen Wiig, Joey King', 'Ken Daurio, Mike White', 'Chris Meledandri, Brett Hoffman', 'Universal Pictures')">Buy Tickets</button>
        </div>
        

        <section class="now-showing">
            <h2>Now Showing</h2>
            <div class="movies-grid">
                <!-- Movie cards -->
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\haikyuu.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">HAIKYUU The Dumpster Battle</h3>
                        <p>1hrs, 25mins</p>
                        <button class="popupButton" onclick="showPopup('posters/haikyuu.png', 'HAIKYUU The Dumpster Battle', 'trailer/haikyuu.mp4', 'Shoyo Hinata joins Karasuno high school\'s volleyball team to emulate his idol, the Little Giant; but he has to team up with Tobio Kageyama, his former rival.', 'Ayumu Murase, Kaito Ishikawa, Yûki Kaji', 'Haruichi Furudate, Susumu Mitsunaka', 'Ryota Ikeda, Mayumi Kurashima, Tasuku Honda, Toshihiro Maeda, Syoichiro Taguchi, Fumi Morihiro', 'Toho Co., Ltd.')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\insideout.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Inside Out 2</h3>
                        <p>1hrs, 30mins</p>
                        <button class="popupButton" onclick="showPopup('posters/insideout.png', 'Inside Out 2', 'trailer/insideout.mp4', 'Joy, Sadness, Anger, Fear and Disgust have been running a successful operation by all accounts. However, when Anxiety shows up, they aren\'t sure how to feel.', 'Amy Poehler, Maya Hawke, Kensington Tallman', 'Meg LeFauve, Dave Holstein, Kelsey Mann', 'Mark Nielsen', 'Walt Disney Studios Motion Pictures')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\exorcist.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">The Exorcism</h3>
                        <p>1hrs, 33mins</p>
                        <button class="popupButton" onclick="showPopup('posters/exorcist.png', 'The Exorcism', 'trailer/exorcist.mp4', 'A troubled actor begins to unravel while shooting a horror film. His estranged daughter wonders if he\'s slipping back into his past addictions or if there\'s something more sinister at play.', 'Russell Crowe, Ryan Simpkins, Sam Worthington', 'M.A. Fortin, Joshua John Miller', 'Kevin Williamson, Ben Fast, Bill Block', 'Vertical')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\garfield.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Garfield The Movie</h3>
                        <p>1hrs, 41mins</p>
                        <button class="popupButton" onclick="showPopup('posters/garfield.png', 'Garfield The Movie', 'trailer/garfield.mp4', 'After an unexpected reunion with his long-lost father, the street cat Vic, Garfield is forced to leave his very comfortable life with Harald behind. Together with Vic and Odie, he plans a crazy robbery.', 'Chris Pratt, Samuel L. Jackson, Hannah Waddingham', 'Paul A. Kaplan, Mark Torgove, David Reynolds', 'John Cohen, Broderick Johnson, Andrew A. Kosove, Steven P. Wegner, Craig Sost, Namit Malhotra', 'Sony Pictures Releasing')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\parallel.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Under Parallel Skies</h3>
                        <p>1hrs, 50mins</p>
                        <button class="popupButton" onclick="showPopup('posters/parallel.png', 'Under Parallel Skies', 'trailer/parallel.mp4', 'A man struggling with a painful past tries to move forward, only to discover that the woman in his present life has an uncanny connection to his past.', 'Metawin Opas-Iamkajorn, Janella Salvador', 'Sigrid Andrea Bernardo', 'Richard Juan, Kristhoff Cagape', 'Warner Bros. Pictures')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\despicable.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Despicable Me 4</h3>
                        <p>1hrs, 34mins</p>
                        <button class="popupButton" onclick="showPopup('posters/despicable.png', 'Despicable Me 4', 'trailer/despicable.mp4', 'Gru welcomes a new member to the family, Gru Jr., who\'s intent on tormenting his dad. However, their peaceful existence soon comes crashing down when criminal mastermind Maxime Le Mal escapes from prison and vows revenge against Gru.', 'Steve Carell, Kristen Wiig, Joey King', 'Ken Daurio, Mike White', 'Chris Meledandri, Brett Hoffman', 'Universal Pictures')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-posterSHOWMORE">
                        <img class="mySlides" src="posters/twisters.png" alt="Movie Poster 1">
                        <img class="mySlides" src="posters/despicable.png" alt="Movie Poster 2">
                        <img class="mySlides" src="posters/parallel.png" alt="Movie Poster 3">
                    </div>
                    <div class="showMore">
                        <button class="popupButton" onclick="navigateToNowShowing()"">Show More >>></button>
                    </div>
                </div>


            </div>
        </section>
        <section class="upcoming-movies">
            <h2>Upcoming Movies</h2>
            <div class="movies-grid">
                <!-- Movie cards -->
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/lord.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">The Lord of the Rings: The War of the Rohirrim</h3>
                        <p>2hrs, 10 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/lord.png', 'The Lord of the Rings: The War of the Rohirrim', 'trailer/lord.mp4', 'The untold story behind Helms Deep, hundreds of years before the fateful war, telling the life and bloodsoaked times of its founder, Helm Hammerhand, the King of Rohan.', 'Brian Cox, Miranda Otto, Lorraine Ashbourne', 'Kenji Kamiyama', 'Jeffrey Addiss, Phoebe Gittins, Will Matthews', 'Jason DeMarco, Sam Register, Richard Brener, Carolyn Blackwood', 'Warner Bros. Pictures', 'PG | 2hrs, 10 mins', ['Action', 'Adventure', 'Animation'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/cabrini.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Cabrini</h3>
                        <p>2hrs, 25 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/cabrini.png', 'Cabrini', 'trailer/cabrini.mp4', 'After witnessing disease and poverty in the slums of New York, Italian immigrant Francesca Cabrini embarks on a daring journey to persuade the hostile mayor to provide housing and healthcare for hundreds of orphaned children.', 'Cristiana DellAnna, John Lithgow, David Morse', 'Alejandro Monteverde', 'Rod Barr, Alejandro Monteverde', 'Rod Barr', 'Angel Studios', 'PG-13 | 2hrs, 25 mins', ['Biography', 'History', 'Drama'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/wicked.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Wicked</h3>
                        <p>2hrs, 45 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/wicked.png', 'Wicked', 'trailer/wicked.mp4', 'Misunderstood because of her green skin, a young woman named Elphaba forges an unlikely but profound friendship with Glinda, a student with an unflinching desire for popularity. Following an encounter with the Wizard of Oz, their relationship soon reaches a crossroad as their lives begin to take very different paths.', 'Cynthia Erivo, Ariana Grande, Jonathan Bailey', 'Jon M. Chu', 'L. Frank Baum, Winnie Holzman, Gregory Maguire', 'Marc Platt, David Stone, Erik Baiers', 'Universal Pictures', 'PG | 2hrs, 45mins', ['Fantasy', 'Musical', 'Romance'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/escape.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Escape</h3>
                        <p>1h, 34mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/escape.png', 'Escape', 'trailer/escape.mp4', 'Follows the struggles of a North Korean sergeant who is chased by a ruthless major after he defects.', 'Song Kang, Lee Je-hoon, Koo Kyo-hwan', 'Lee Jong-pil', 'Kwon Seong-Hwi, Kim Woo-Geun', 'Park Eun-Kyung, Hong Jeong-In', 'Megabox Plus M', 'PG | 1h, 34mins', ['Action'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/lionking.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Mufasa: The Lion King</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/lionking.png', 'Mufasa: The Lion King', 'trailer/lionking.mp4', 'Simba, having become king of the Pride Lands, is determined for his cub to follow in his paw prints while the origins of his late father Mufasa are explored.', 'Aaron Pierre, Kelvin Harrison Jr., Seth Rogen', 'Barry Jenkins', 'Linda Woolverton, Irene Mecchi, Jonathan Roberts', 'Adele Romanski, Mark Ceryak, Peter Tobyansen', 'Walt Disney Studios Motion Pictures', 'G | 2hrs, 30 mins', ['Adventure', 'Animation', 'Drama'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/dontturnout.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Don't Turn Out The Lights</h3>
                        <p>1hr, 49 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/dontturnout.png', 'Dont Turn Out The Lights', 'trailer/dontturnout.mp4', 'Seven childhood friends excitedly embark on a road trip in an old RV to the coolest underground music festival out there – Blue Light. When they break down on an isolated road, they soon realise something eerie and unworldly is hiding in the woods. Their nightmare journey to hell has begun, from which there is no U-turn. Will they find the courage to fight and survive?', 'Amber Janea, Bella DeLong, Daryl Tofa, Finley Rose Staler', 'Andy Fickman', 'Andy Fickman', 'Andy Fickman', 'Quiver Distribution', 'R-16 | 1hr, 49 mins', ['Horror'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-posterSHOWMORE">
                        <img class="mySlides" src="posters/twisters.png" alt="Movie Poster 1">
                        <img class="mySlides" src="posters/despicable.png" alt="Movie Poster 2">
                        <img class="mySlides" src="posters/parallel.png" alt="Movie Poster 3">
                    </div>
                    <div class="showMore">
                        <button class="popupButton" onclick="navigateToUpcomingMovies()">Show More >>></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="streaming-soon">
            <h2>Streaming Soon</h2>
            <div class="movies-grid">
                <!-- Movie cards -->
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/karl.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Becoming Karl Lagerfeld</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/karl.png', 'Becoming Karl Lagerfeld', 'trailer/karl.mp4', 'This biographical film chronicles the life of Karl Lagerfeld, from his early days as an aspiring designer to becoming a global fashion icon. It explores his relationships, inspirations, and the impact he left on the fashion industry.', 'Daniel Brühl, Sunnyi Melles, Théodore Pellerin', 'Audrey Estrougo', 'Isaure Pisani-Ferry, Dominique Baumard', 'Isabelle Degeorges, Arnaud de Crémiers', 'Disney+', 'PG | 2hrs, 30 mins', ['Drama', 'History'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/vanished.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Vanished into the Night</h3>
                        <p>1hr, 32 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/vanished.png', 'Vanished into the Night', 'trailer/vanished.mp4', 'Vanished into the Night', '15.mp4', 'Elena is an American psychiatrist who came to live in Italy, in Puglia, for the love of Pietro, a man with a stormy past. They got married and had two children, but things didnt work out, and soon Pietro and Elena broke up. One night, their children vanish into thin air while they are with Pietro at the farm.', 'Riccardo Scamarcio, Annabelle Wallis, Massimiliano Gallo', 'Renato De Maria', 'Luca Infascelli, Francesca Marciano', 'Roberto Sessa', 'Netflix', 'PG-13 | 1hr, 32 mins', ['Thriller'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/familyaffair.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">A Family Affair</h3>
                        <p>Not Specified</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/familyaffair.png', 'A Family Affair', 'trailer/familyaffair.mp4', 'When a young woman falls in love with her fathers business partner, tensions rise, secrets are revealed, and relationships are tested, leading to an emotional and dramatic conclusion.', 'Zac Efron, Joey King, Nicole Kidman', 'Richard LaGravenese', 'Richard LaGravenese', 'Joe Roth, Jeff Kirschenbaum', 'Netflix', 'R | Not Specified', ['Romantic', 'Comedy', 'Drama'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/drawingcloser.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Drawing Closer</h3>
                        <p>1hr, 58 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/drawingcloser.png', 'Drawing Closer', 'trailer/drawingcloser.mp4', 'Akito Hayasaka, a young man with a terminal illness, who finds a new will to live through his relationship with Haruna Sakurai, who also has a terminal condition. Their journey explores love, loss, and the meaning of life.', 'Ren Nagase, Natsuki Deguchi', 'Takahiro Miki', 'Tomoko Yoshida', 'Sho Toguchi, Tatsuya Sakano', 'Netflix', 'PG | 1hr, 58 mins', ['Drama', 'Romance'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/hitman.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Hit Man</h3>
                        <p>2hrs, 25 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/hitman.png', 'Hit Man', 'trailer/hitman.mp4', 'Gary Johnson, a hitman for hire, is suddenly confronted by an unexpected moral dilemma when a target turns out to be someone from his past. The film delves into his struggle between maintaining his cold-hearted profession and confronting the ghosts of his past.', 'Glen Powell, Adria Arjona', 'Richard Linklater', 'WriterRichard Linklater, Glen Powell', 'Richard Linklater, Michael Blizzard', 'Netflix', 'R-16 | 2hrs, 25 mins', ['Comedy', 'Thriller', 'Romance'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/beverly.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Beverly Hills Cop: Axel F</h3>
                        <p>1hr, 50 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/beverly.png', 'Beverly Hills Cop: Axel F', 'trailer/beverly.mp4', 'Eddie Murphy returns as the iconic Axel Foley in this new installment of the Beverly Hills Cop series. After 30 years, Foley is back in Beverly Hills, teaming up with his daughter Jane and old friends to solve a new case.', 'Eddie Murphy, Taylour Paige, Joseph Gordon-Levitt', 'Mark Molloy', 'Josh Appelbaum, André Nemec', 'Jerry Bruckheimer', 'Netflix', 'PG-13 | 1hr, 50 mins', ['Action', 'Comedy', 'Crime'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-posterSHOWMORE">
                        <img class="mySlides" src="posters/twisters.png" alt="Movie Poster 1">
                        <img class="mySlides" src="posters/despicable.png" alt="Movie Poster 2">
                        <img class="mySlides" src="posters/parallel.png" alt="Movie Poster 3">
                    </div>
                    <div class="showMore">
                        <button class="popupButton" onclick="navigateToStreamingSoon()">Show More >>></button>
                    </div>
                </div>

            </div>
        </section>
    

    </main>

   <!-- NOW SHOWING Main Content -->
   <main id="now-showing-main" class="section">
        <section class="now-showing">
            <h2>Now Showing</h2>
            <div class="movies-grid">
                <!-- Movie cards for Now Showing -->
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\haikyuu.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">HAIKYUU The Dumpster Battle</h3>
                        <p>1hrs, 25mins</p>
                        <button class="popupButton" onclick="showPopup('posters/haikyuu.png', 'HAIKYUU The Dumpster Battle', 'trailer/haikyuu.mp4', 'Shoyo Hinata joins Karasuno high school\'s volleyball team to emulate his idol, the Little Giant; but he has to team up with Tobio Kageyama, his former rival.', 'Ayumu Murase, Kaito Ishikawa, Yûki Kaji', 'Haruichi Furudate, Susumu Mitsunaka', 'Ryota Ikeda, Mayumi Kurashima, Tasuku Honda, Toshihiro Maeda, Syoichiro Taguchi, Fumi Morihiro', 'Toho Co., Ltd.')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\insideout.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Inside Out 2</h3>
                        <p>1hrs, 30mins</p>
                        <button class="popupButton" onclick="showPopup('posters/insideout.png', 'Inside Out 2', 'trailer/insideout.mp4', 'Joy, Sadness, Anger, Fear and Disgust have been running a successful operation by all accounts. However, when Anxiety shows up, they aren\'t sure how to feel.', 'Amy Poehler, Maya Hawke, Kensington Tallman', 'Meg LeFauve, Dave Holstein, Kelsey Mann', 'Mark Nielsen', 'Walt Disney Studios Motion Pictures')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\exorcist.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">The Exorcism</h3>
                        <p>1hrs, 33mins</p>
                        <button class="popupButton" onclick="showPopup('posters/exorcist.png', 'The Exorcism', 'trailer/exorcist.mp4', 'A troubled actor begins to unravel while shooting a horror film. His estranged daughter wonders if he\'s slipping back into his past addictions or if there\'s something more sinister at play.', 'Russell Crowe, Ryan Simpkins, Sam Worthington', 'M.A. Fortin, Joshua John Miller', 'Kevin Williamson, Ben Fast, Bill Block', 'Vertical')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\garfield.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Garfield The Movie</h3>
                        <p>1hrs, 41mins</p>
                        <button class="popupButton" onclick="showPopup('posters/garfield.png', 'Garfield The Movie', 'trailer/garfield.mp4', 'After an unexpected reunion with his long-lost father, the street cat Vic, Garfield is forced to leave his very comfortable life with Harald behind. Together with Vic and Odie, he plans a crazy robbery.', 'Chris Pratt, Samuel L. Jackson, Hannah Waddingham', 'Paul A. Kaplan, Mark Torgove, David Reynolds', 'John Cohen, Broderick Johnson, Andrew A. Kosove, Steven P. Wegner, Craig Sost, Namit Malhotra', 'Sony Pictures Releasing')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\parallel.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Under Parallel Skies</h3>
                        <p>1hrs, 50mins</p>
                        <button class="popupButton" onclick="showPopup('posters/parallel.png', 'Under Parallel Skies', 'trailer/parallel.mp4', 'A man struggling with a painful past tries to move forward, only to discover that the woman in his present life has an uncanny connection to his past.', 'Metawin Opas-Iamkajorn, Janella Salvador', 'Sigrid Andrea Bernardo', 'Richard Juan, Kristhoff Cagape', 'Warner Bros. Pictures')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\godzillkong.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Godzilla x Kong: The New Empire</h3>
                        <p>1hr, 55 mins</p>
                        <button class="popupButton" onclick="showPopup('posters/godzillkong.png', 'Godzilla x Kong: The New Empire', 'trailer/godzillkong.mp4', 'Godzilla and the almighty Kong face a colossal threat hidden deep within the planet, challenging their very existence and the survival of the human race.', 'Rebecca HallBrian, Tyree Henry, Dan Stevens', 'Adam Wingard', 'Terry Rossio, Adam Wingard, Simon Barrett', 'Toho Co., Ltd., Warner Bros. Pictures')">Buy Tickets</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\haikyuu.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Ghostbusters: Frozen Empire</h3>
                        <p>1hr, 55mins</p>
                        <button class="popupButton" onclick="showPopup('posters/haikyuu.png', 'Ghostbusters: Frozen Empire', 'trailer/haikyuu.mp4', 'The Spengler family returns to the iconic New York City firehouse where the original Ghostbusters have taken ghost-busting to the next level. When the discovery of an ancient artifact unleashes an evil force, Ghostbusters new and old must unite to protect their home and save the world from a second ice age.', 'Paul Rudd, Carrie Coon, Finn Wolfhard', 'Gil Kenan', 'Gil Kenan, Jason Reitman, Ivan Reitman', 'Sony Pictures Releasing')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\arthur.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Arthur the King</h3>
                        <p>1hrs, 30mins</p>
                        <button class="popupButton" onclick="showPopup('posters/arthur.png', 'Arthur the King', 'trailer/arthur.mp4', 'Desperate for one last chance to win, Michael Light convinces a sponsor to back him and a team of athletes for the Adventure Racing World Championship in the Dominican Republic. As the team gets pushed to the outer limits of endurance, a dog named Arthur comes along for the ride, redefining what victory, loyalty and friendship truly means.', 'Mark Wahlberg, Simu Liu, Juliet Rylance', 'Simon Cellan Jones', 'Michael Brandt, Mikael Lindnord', 'Lionsgate')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\bagoflies.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Bag of Lies</h3>
                        <p>1hr, 36 mins</p>
                        <button class="popupButton" onclick="showPopup('posters/bagoflies.png', 'Bag of Lies', 'trailer/bagoflies.mp4', 'Matthew Quimby is desperate to save his wife, Claire, who is dying from a rare bone cancer. His last resort is an ancient relic capable of healing the dying, but Matt must uphold its rules and withstand the tricks it plays.', 'Patrick Taft, Brandi Botkin, John Wells', 'David James', 'David Andrew James, Nick Laughlin, Joe Zappa', 'Epic Picturesl')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\kingdom.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Kingdom of the Planet of the Apes</h3>
                        <p>2hrs, 25 mins</p>
                        <button class="popupButton" onclick="showPopup('posters/kingdom.png', 'Kingdom of the Planet of the Apes', 'trailer/kingdom.mp4', 'Many years after the reign of Caesar, a young ape goes on a journey that will lead him to question everything hes been taught about the past and make choices that will define a future for apes and humans alike.', 'Owen Teague, Freya Allan, Kevin Durand', 'Wes Ball', 'Josh Friedman, Rick Jaffa, Amanda Silver', '20th Century Studios')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\menwomen.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Men Are From QC, Women Are From Alabang</h3>
                        <p>1hr, 49mins</p>
                        <button class="popupButton" onclick="showPopup('posters/menwomen.png', 'Men Are From QC, Women Are From Alabang', 'trailer/menwomen.mp4', 'AA QC boy and an Alabang girl have been together since college, weathering the distance and other issues that have come their way. But now that they’ve started to work, the “real world” seems to be pushing them even more apart. This is a relationship story told through two different perspectives of the same events, as the couple grows distant (literally and figuratively) through time.', 'Wilbert Ross, Heaven Peralejo, Marco Gallo', 'Kiko Abrillo, Kristine Gabriel', 'Sienna Olaso, Vincent del Rosario III, Veronique del Rosario-Corpus', 'Viva Communications, Inc.')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\fastcharlie.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Fast Charlie</h3>
                        <p>1hr, 30mins</p>
                        <button class="popupButton" onclick="showPopup('posters/fastcharlie.png', 'Fast Charlie', 'trailer/fastcharlie.mp4', 'Charlie Swift is a fixer with a problem: the thug hes whacked is missing his head and Charlie will only be paid if the body can be identified. Enter Marcie Kramer, the victims ex-wife and a woman with all the skills Charlie needs.', 'Pierce Brosnan, Morena Baccarin, James Caan', 'Phillip Noyce', 'Richard WenkVictor Gischler', 'Streamline Global Group')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\watchers.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">The Watchers</h3>
                        <p>1hrs, 34mins</p>
                        <button class="popupButton" onclick="showPopup('posters/watchers.png', 'The Watchers', 'trailer/watchers.mp4', 'A young artist gets stranded in an extensive, immaculate forest in western Ireland, where, after finding shelter, she becomes trapped alongside three strangers, stalked by mysterious creatures each night.', 'Dakota Fanning, Georgina Campbell, Olwen Fouéré, Siobhan Hewlett', 'Ishana Shyamalan', 'A.M. Shine , Ishana Shyamalan', 'Blinding Edge Pictures')">Buy Tickets</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters\howtomake.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">How to Make Millions Before Grandma Dies</h3>
                        <p>2hrs, 5 mins</p>
                        <button class="popupButton" onclick="showPopup('posters/howtomake.png', 'How to Make Millions Before Grandma Dies', 'trailer/howtomake.mp4', 'A man quits work to care for dying grandmother, motivated by her fortune. He schemes to win her favor before she passes.', 'Putthipong AssaratanakulUsha, Seamkhum, Tontawan Tantivejakul', 'Sigrid Andrea Bernardo', 'Pat BoonnitipatThodsapon Thiptinnakorn', ' By Fortune Arts International Films')">Buy Tickets</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- UPCOMING MOVIES Main Content -->
    <main id="upcoming-movies-main" class="section">
        <section class="upcoming-movies">
            <h2>Upcoming Movies</h2>
            <div class="movies-grid">
                <!-- Movie cards for Upcoming Movies -->
                    <div class="movie-card">
                        <div class="movie-poster"> <img src="posters/lord.png" alt="Movie Poster"></div>
                        <div class="movie-info">
                            <h3 id="title">The Lord of the Rings</h3>
                            <p>2hrs, 10 mins</p>
                            <button class="popupButton" onclick="showMovieInfo('posters/lord.png', 'The Lord of the Rings: The War of the Rohirrim', 'trailer/lord.mp4', 'The untold story behind Helms Deep, hundreds of years before the fateful war, telling the life and bloodsoaked times of its founder, Helm Hammerhand, the King of Rohan.', 'Brian Cox, Miranda Otto, Lorraine Ashbourne', 'Kenji Kamiyama', 'Jeffrey Addiss, Phoebe Gittins, Will Matthews', 'Jason DeMarco, Sam Register, Richard Brener, Carolyn Blackwood', 'Warner Bros. Pictures', 'PG | 2hrs, 10 mins', ['Action', 'Adventure', 'Animation'])">SHOW INFO</button>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster"> <img src="posters/cabrini.png" alt="Movie Poster"></div>
                        <div class="movie-info">
                            <h3 id="title">Cabrini</h3>
                            <p>2hrs, 25 mins</p>
                            <button class="popupButton" onclick="showMovieInfo('posters/cabrini.png', 'Cabrini', 'trailer/cabrini.mp4', 'After witnessing disease and poverty in the slums of New York, Italian immigrant Francesca Cabrini embarks on a daring journey to persuade the hostile mayor to provide housing and healthcare for hundreds of orphaned children.', 'Cristiana DellAnna, John Lithgow, David Morse', 'Alejandro Monteverde', 'Rod Barr, Alejandro Monteverde', 'Rod Barr', 'Angel Studios', 'PG-13 | 2hrs, 25 mins', ['Biography', 'History', 'Drama'])">SHOW INFO</button>
                        </div>
                    </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/wicked.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Wicked</h3>
                        <p>2hrs, 45 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/wicked.png', 'Wicked', 'trailer/wicked.mp4', 'Misunderstood because of her green skin, a young woman named Elphaba forges an unlikely but profound friendship with Glinda, a student with an unflinching desire for popularity. Following an encounter with the Wizard of Oz, their relationship soon reaches a crossroad as their lives begin to take very different paths.', 'Cynthia Erivo, Ariana Grande, Jonathan Bailey', 'Jon M. Chu', 'L. Frank Baum, Winnie Holzman, Gregory Maguire', 'Marc Platt, David Stone, Erik Baiers', 'Universal Pictures', 'PG | 2h, 45mins', ['Fantasy', 'Musical', 'Romance'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/escape.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Escape</h3>
                        <p>1hr, 34 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/escape.png', 'Escape', 'trailer/escape.mp4', 'Follows the struggles of a North Korean sergeant who is chased by a ruthless major after he defects.', 'Song Kang, Lee Je-hoon, Koo Kyo-hwan', 'Lee Jong-pil', 'Kwon Seong-Hwi, Kim Woo-Geun', 'Park Eun-Kyung, Hong Jeong-In', 'Megabox Plus M', 'PG | 1h, 34mins', ['Action'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/lionking.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Mufasa: The Lion King</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/lionking.png', 'Mufasa: The Lion King', 'trailer/lionking.mp4', 'Simba, having become king of the Pride Lands, is determined for his cub to follow in his paw prints while the origins of his late father Mufasa are explored.', 'Aaron Pierre, Kelvin Harrison Jr., Seth Rogen', 'Barry Jenkins', 'Linda Woolverton, Irene Mecchi, Jonathan Roberts', 'Adele Romanski, Mark Ceryak, Peter Tobyansen', 'Walt Disney Studios Motion Pictures', 'G | 2hrs, 30 mins', ['Adventure', 'Animation', 'Drama'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/dontturnout.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Don't Turn Out The Lights</h3>
                        <p>1hr, 49 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/dontturnout.png', 'Dont Turn Out The Lights', 'trailer/dontturnout.mp4', 'Seven childhood friends excitedly embark on a road trip in an old RV to the coolest underground music festival out there – Blue Light. When they break down on an isolated road, they soon realise something eerie and unworldly is hiding in the woods. Their nightmare journey to hell has begun, from which there is no U-turn. Will they find the courage to fight and survive?', 'Amber Janea, Bella DeLong, Daryl Tofa, Finley Rose Staler', 'Andy Fickman', 'Andy Fickman', 'Andy Fickman', 'Quiver Distribution', 'R-16 | 1hr, 49 mins', ['Horror'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/uranus.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Uranus 2324</h3>
                        <p>1hr, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/uranus.png', 'Uranus 2324', 'trailer/uranus.mp4', 'Love is deeper than the ocean, and bigger than the universe.', 'Freen Sarocha Chankimha, Rebecca Patricia, Becky Armstrong, Erich Fleshman', 'Thanadol Nualsuth', 'Thitipong Chaisati, Nut Nualpang', 'Thanadol Nualsuth', 'Vel Curve', 'PG | 1hr, 30 mins', ['Romance', 'Drama', 'Sci-Fi'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/survive.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Survive</h3>
                        <p>1h2, 50 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/survive.png', 'Survive', 'trailer/survive.mp4', 'A couple celebrates their sons birthday in the middle of the ocean on their boat . A violent storm hits and it brings up hungry creatures from the depths and they fight for their survival.', 'Émilie Dequenne, Andreas Pietschmann, Lisa Delamar', 'Frédéric Jardin', 'Alexandre Coquelle, Mathieu Oullion', 'Frédéric Jardin', 'Not Specified', 'PG | 1hr, 50 mins', ['Adventure', 'Thriller', 'Action', 'Science Fiction'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/venom.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Venom: The last dance</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/venom.png', 'Venom: The last dance', 'trailer/venom.mp4', 'Eddie and Venom are on the run. Hunted by both of their worlds and with the net closing in, the duo are forced into a devastating decision that will bring the curtains down on Venom and Eddies last dance.', 'Tom Hardy, Rhys Ifans, Juno Temple', 'Kelly Marcel', 'Kelly Marcel, Tom Hardy', 'Joseph M. Caracciolo Jr.', 'Sony Pictures Releasing', 'PG | 2hrs, 20mins', ['Action', 'Sci-fi'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/twisters.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Twisters</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/twisters.png', 'Twisters', 'trailer/twisters.mp4', 'Haunted by a devastating encounter with a tornado, Kate Cooper gets lured back to the open plains by her friend, Javi, to test a groundbreaking new tracking system. She soon crosses paths with Tyler Owens, a charming but reckless social-media superstar who thrives on posting his storm-chasing adventures. As storm season intensifies, Kate, Tyler and their competing teams find themselves in a fight for their lives as multiple systems converge over central Oklahoma.', 'Daisy Edgar-Jones, Glen Powell, Anthony Ramos', 'Mark L. Smith, Joseph Kosinski, Michael Crichton', 'Frank Marshall, Patrick Crowley', 'Mark L. Smith, Joseph Kosinski', 'Universal Pictures, Warner Bros. Pictures', 'PG | 2hrs, 30 mins', ['Action', 'Adventure', 'Thriller'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/despicable.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Despicable Me 4</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/despicable.png', 'Despicable Me 4', 'trailer/despicable.mp4', 'Gru welcomes a new member to the family, Gru Jr., whos intent on tormenting his dad. However, their peaceful existence soon comes crashing down when criminal mastermind Maxime Le Mal escapes from prison and vows revenge against Gru.', 'Steve Carell, Kristen Wiig, Joey King', 'Ken Daurio, Mike White', 'Chris Meledandri, Brett Hoffman', 'Chris Meledandri', 'Universal Pictures', 'R | 2hrs, 30 mins', ['Drama', 'Crime', 'Thriller'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/deadpool.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Deadpool and Wolverine</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/deadpool.png', 'Deadpool and Wolverine', 'trailer/deadpool.mp4', 'A listless Wade Wilson toils away in civilian life with his days as the morally flexible mercenary, Deadpool, behind him. But when his homeworld faces an existential threat, Wade must reluctantly suit-up again with an even more reluctant Wolverine.', 'Ryan Reynolds, Hugh Jackman, Emma Corrin, Morena Baccarin', 'Shawn Levy', 'Rhett Reese, Paul Wernick, Zeb Wells', 'yan Reynolds, Kevin Feige, Shawn Levy', 'Walt Disney Studios Motion Pictures', 'PG | 2hrs, 30 mins', ['Animation', 'Adventure', 'Family'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/joker.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Joker: Folie à Deux</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/joker.png', 'Joker: Folie à Deux', 'trailer/joker.mp4', 'An ocean adventure...Following the events of Joker, Arthur Fleck continues his descent into madness. The film explores his complex relationship with Harleen Quinzel, who transforms into Harley Quinn, as they navigate their twisted romance and further chaos ensues in Gotham City.', 'oaquin Phoenix, Lady Gaga', 'Todd Phillips', 'Todd Phillips, Scott Silver', 'Todd Phillips, Bradley Cooper, Emma Tillinger Koskoff', 'Warner Bros. Pictures', 'PG | 2hrs, 30 mins', ['Animation', 'Adventure', 'Family'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/moana.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Moana 2</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/moanas.png', 'Moana 2', 'trailer/moana.mp4', 'After receiving an unexpected call from her wayfinding ancestors, Moana journeys alongside Maui and a new crew to the far seas of Oceania and into dangerous, long-lost waters for an adventure unlike anything shes ever faced.', 'Aulii Cravalho, Dwayne Johnson', 'John Musker, Ron Clements', 'Jared Bush', 'Osnat Shurer', 'Walt Disney Studios Motion Pictures', 'PG | 2hrs, 30 mins', ['Action', 'Adventure', 'Thriller'])">SHOW INFO</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- STREAMING SOON Main Content -->
    <main id="streaming-soon-main" class="section">
        <section class="streaming-soon">
            <h2>Streaming Soon</h2>
            <div class="movies-grid">
                <!-- Movie cards for Streaming Soon -->
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/karl.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Becoming Karl Lagerfeld</h3>
                        <p>2hrs, 30mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/karl.png', 'Becoming Karl Lagerfeld', 'trailer/karl.mp4', 'This biographical film chronicles the life of Karl Lagerfeld, from his early days as an aspiring designer to becoming a global fashion icon. It explores his relationships, inspirations, and the impact he left on the fashion industry.', 'Daniel Brühl, Sunnyi Melles, Théodore Pellerin', 'Audrey Estrougo', 'Isaure Pisani-Ferry, Dominique Baumard', 'Isabelle Degeorges, Arnaud de Crémiers', 'Disney+', 'PG | 2hrs, 30 mins', ['Drama', 'History'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/familyaffair.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">A Family Affair</h3>
                        <p>Not Specified</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/familyaffair.png', 'A Family Affair', 'trailer/familyaffair.mp4', 'When a young woman falls in love with her fathers business partner, tensions rise, secrets are revealed, and relationships are tested, leading to an emotional and dramatic conclusion.', 'Zac Efron, Joey King, Nicole Kidman', 'Richard LaGravenese', 'Richard LaGravenese', 'Joe Roth, Jeff Kirschenbaum', 'Netflix', 'R | Not Specified', ['Romantic', 'Comedy', 'Drama'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/drawingcloser.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Drawing Closer</h3>
                        <p>1hr, 58 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/drawingcloser.png', 'Drawing Closer', 'trailer/drawingcloser.mp4', 'Akito Hayasaka, a young man with a terminal illness, who finds a new will to live through his relationship with Haruna Sakurai, who also has a terminal condition. Their journey explores love, loss, and the meaning of life.', 'Ren Nagase, Natsuki Deguchi', 'Takahiro Miki', 'Tomoko Yoshida', 'Sho Toguchi, Tatsuya Sakano', 'Netflix', 'PG | 1hr, 58 mins', ['Drama', 'Romance'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/hitman.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Hit Man</h3>
                        <p>2hrs, 25 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/hitman.png', 'Hit Man', 'trailer/hitman.mp4', 'Gary Johnson, a hitman for hire, is suddenly confronted by an unexpected moral dilemma when a target turns out to be someone from his past. The film delves into his struggle between maintaining his cold-hearted profession and confronting the ghosts of his past.', 'Glen Powell, Adria Arjona', 'Richard Linklater', 'WriterRichard Linklater, Glen Powell', 'Richard Linklater, Michael Blizzard', 'Netflix', 'R-16 | 2hrs, 25 mins', ['Comedy', 'Thriller', 'Romance'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/vanished.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Vanished into the Night</h3>
                        <p>1hr, 32 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/vanished.png', 'Vanished into the Night', 'trailer/vanished.mp4', 'Vanished into the Night', '15.mp4', 'Elena is an American psychiatrist who came to live in Italy, in Puglia, for the love of Pietro, a man with a stormy past. They got married and had two children, but things didnt work out, and soon Pietro and Elena broke up. One night, their children vanish into thin air while they are with Pietro at the farm.', 'Riccardo Scamarcio, Annabelle Wallis, Massimiliano Gallo', 'Renato De Maria', 'Luca Infascelli, Francesca Marciano', 'Roberto Sessa', 'Netflix', 'PG-13 | 1hr, 32 mins', ['Thriller'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/beverly.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Beverly Hills Cop: Axel F</h3>
                        <p>1hr, 50 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/beverly.png', 'Beverly Hills Cop: Axel F', 'trailer/beverly.mp4', 'Eddie Murphy returns as the iconic Axel Foley in this new installment of the Beverly Hills Cop series. After 30 years, Foley is back in Beverly Hills, teaming up with his daughter Jane and old friends to solve a new case.', 'Eddie Murphy, Taylour Paige, Joseph Gordon-Levitt', 'Mark Molloy', 'Josh Appelbaum, André Nemec', 'Jerry Bruckheimer', 'Netflix', 'PG-13 | 1hr, 50 mins', ['Action', 'Comedy', 'Crime'])">SHOW INFO</button>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/decameron.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">The Decameron</h3>
                        <p>1hr, 30 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/decameron.png', 'The Decameron', 'trailer/decameron.mp4', 'Based on Giovanni Boccaccios classic, this series set in 1384 follows nobles and their servants as they seek refuge from the Black Death in a countryside villa. Amidst the chaos, they confront class divisions and their own personal dramas.', 'Zosia Mamet, Saoirse-Monica Jackson, Tony Hale', 'Michael Uppendahl', 'Kathleen Robertson', 'Jenji Kohan', 'Netflix', 'PG | 1hr, 30 mins', ['Historical Drama', 'Comedy'])">SHOW INFO</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/findmefalling.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Find Me Falling</h3>
                        <p>1hr, 35 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/findmefalling.png', 'Find Me Falling', 'trailer/findmefalling.mp4', ' In this romantic comedy, a struggling musician moves to the countryside and unexpectedly finds love. Starring Harry Connick Jr., the film explores themes of serendipity and new beginnings.', 'Harry Connick Jr., Agni Scott', 'Pavlos Vrionides', 'Steve Bloom', 'Lara Alameddine', 'Netflix', 'PG-13 | 1hr, 35 mins', ['Romance', 'Comedy'])">SHOW INFO</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/ultraman.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Ultraman: Rising</h3>
                        <p>2hrs</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/ultraman.png', 'Ultraman: Rising', 'trailer/ultraman.mp4', 'This family-friendly animated movie follows Ken Sato, who reluctantly takes on the role of Ultraman to protect Tokyo from monster attacks while caring for a baby kaiju. The film is praised for its heartwarming story and visual appeal.', 'Christopher Sean, Gedde Watanabe, Tamlyn Tomita', 'Shannon Tindle', 'Shannon Tindle', 'Lisa Henson', 'Netflix', 'PG | 2hrs', ['Animation', 'Adventure', 'Family'])">SHOW INFO</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/godzilla.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Godzilla Minus One</h3>
                        <p>2hrs, 5 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/godzilla.png', 'Godzilla Minus One', 'trailer/godzilla.mp4', 'Returning to its roots, this Godzilla film is set in post-war Japan. It tells an emotionally charged story of destruction and resilience as the iconic monster wreaks havoc. The film is lauded for its dramatic depth and special effects.', 'Ryûnosuke Kamiki, Minami Hamabe, Munetaka Aoki', 'Takashi Yamazaki', 'Takashi Yamazaki', 'Minami Ichikawa, Takashi Yoshizawa', 'Netflix', 'PG-13 | 2hrs, 5 mins', ['Science Fiction', 'Action', 'Drama'])">SHOW INFO</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/lift.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Lift</h3>
                        <p>1hr, 50 minss</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/lift.png', 'Lift', 'trailer/lift.mp4', 'An action-comedy heist film following a master thief and his crew attempting to steal $100 million in gold bullion aboard a 777 airplane.', 'Kevin Hart, Gugu Mbatha-Raw, Sam Worthington', ' F. Gary Gray', 'Daniel Kunka', 'Simon Kinberg', 'Netflix', 'PG-13 | 1hr, 50 mins', ['Action', 'Comedy'])">SHOW INFO</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/reptile.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Reptile</h3>
                        <p>2hrs, 15 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/reptile.png', 'Reptile', 'trailer/reptile.mp4', 'This gritty thriller follows a detective trying to solve a brutal murder in a small town. The deeper he digs, the more he uncovers a web of secrets and lies.', 'Benicio Del Toro, Justin Timberlake, Alicia Silverstone', 'Grant Singer', 'Benjamin Brewer, Grant Singer', 'Molly Smith', 'Netflix', 'R | 2hrs, 15 mins', ['Thriller', 'Mystery'])">SHOW INFO</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/damsel.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Damsel</h3>
                        <p>2hrs, 20 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/damsel.png', 'Damsel', 'trailer/damsel.mp4', 'An ocean adventure...', 'Millie Bobby Brown, Angela Bassett, Robin Wright', ' Juan Carlos Fresnadillo', 'Dan Mazeau', 'Joe Roth', 'Netflix', 'PG-13 | 2hrs, 20 mins', ['Fantasy', 'Adventure'])">SHOW INFO</button>
                    </div>
                </div>

                <div class="movie-card">
                    <div class="movie-poster"> <img src="posters/havoc.png" alt="Movie Poster"></div>
                    <div class="movie-info">
                        <h3 id="title">Havoc</h3>
                        <p>1hr, 50 mins</p>
                        <button class="popupButton" onclick="showMovieInfo('posters/havoc.png', 'Havoc', 'trailer/havoc.mp4', ' An intense action film about a detective who must fight his way through a criminal underworld to rescue a politicians estranged son while uncovering a deep conspiracy.', ' Tom Hardy, Forest Whitaker, Timothy Olyphant', 'Gareth Evan', 'Gareth Evan', 'Gareth Evan', 'Netflix', 'R | 1hr, 50 mins', ['Action', 'Thriller'])">SHOW INFO</button>
                    </div>
                </div>
            </div>
        </section>
    </main>




  

    <div id="popupContainer" class="container">
        <button class="close-btn" onclick="closeForm()">X</button>
        <div class="movie-poster1">
             <img id="popupImage" src="" alt="Movie Poster" width="200"> 
             <img id="popupImage2" src="" alt="Movie Poster" width="200"> 
            <h2 id="popupTitle">Movie Title</h2>
        </div>
        <!-- <button class="close-btn" onclick="closeForm()">X</button>
        <div class="movie-poster1">
            <img id="popupImage" src="" alt="Godzilla x Kong: The New Empire" width="200">
            <h2>GODZILLA X KONG: THE NEW EMPIRE</h2>
        </div> -->
        <form id="bookingForm" action="process_payment.php" method="post">
            <input type="hidden" id="movieTitleInput" name="title" value="">
            <div class="form-section">
                <div class="form-group">
                    <label for="city">Location:</label>
                    <select id="city" name="city" required>
                        <option value="Cavite City">Cavite City</option>
                        <option value="Manila City">Manila City</option>
                        <option value="Calocohan">Calocohan City</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cinema">Cinema:</label>
                    <select id="cinema" name="cinema" required>
                        <option value="">Select Cinema</option>
                        <option value="SM Mall of Asia">SM Mall of Asia</option>
                        <option value="Robinsons Place Manila">Robinsons Place Manila</option>
                        <option value="SM City Manila">SM City Manila</option>
                        <option value="Glorietta 4">Glorietta 4</option>
                        <option value="Greenbelt 3">Greenbelt 3</option>
                        <option value="Power Plant Mall">Power Plant Mall</option>
                        <option value="Trinoma">Trinoma</option>
                        <option value="Gateway Mall">Gateway Mall</option>
                        <option value="Shangri-La Plaza">Shangri-La Plaza</option>
                        <option value="SM Megamall">SM Megamall</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <select id="time" name="time" required>
                        <option value="">Select Time</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="12:30 PM">12:30 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="5:30 PM">5:30 PM</option>
                        <option value="8:00 PM">8:00 PM</option>
                        <option value="10:30 PM">10:30 PM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cinema-number">Cinema #:</label>
                    <select id="cinema-number" name="cinema-number" required>
                        <option value="">Select Cinema #</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="seat-type">Seat Type:</label>
                    <select id="seat-type" name="seat-type" required>
                        <option value="">Select Seat Type</option>
                        <option value="Regular">Regular</option>
                        <option value="Premium">Premium</option>
                        <option value="VIP">VIP</option>
                        <option value="Recliner">Recliner</option>
                        <option value="Couple's Seat">Couple's Seat</option>
                    </select>
                </div>
            </div>
            <input type="hidden" id="seat_number" name="seat_number" value="">

            <div class="screen1">SCREEN</div>
            <div class="screen">
                <div class="seating-chart">
                    <div class="top">
                        <div class="left">
                            <div class="row">
                                <div class="seat" id="B16" onclick="toggleSeat(this)">B16</div>
                                <div class="seat" id="B15" onclick="toggleSeat(this)">B15</div>
                                <div class="seat" id="B14" onclick="toggleSeat(this)">B14</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="C16" onclick="toggleSeat(this)">C16</div>
                                <div class="seat" id="C15" onclick="toggleSeat(this)">C15</div>
                                <div class="seat" id="C14" onclick="toggleSeat(this)">C14</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="D16" onclick="toggleSeat(this)">D16</div>
                                <div class="seat" id="D15" onclick="toggleSeat(this)">D15</div>
                                <div class="seat" id="D14" onclick="toggleSeat(this)">D14</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="E16" onclick="toggleSeat(this)">E16</div>
                                <div class="seat" id="E15" onclick="toggleSeat(this)">E15</div>
                                <div class="seat" id="E14" onclick="toggleSeat(this)">E14</div>
                            </div>
                        </div>

                        <div class="middle_front">
                            <div class="row">
                                <div class="seat" id="A13" onclick="toggleSeat(this)">A13</div>
                                <div class="seat" id="A12" onclick="toggleSeat(this)">A12</div>
                                <div class="seat" id="A11" onclick="toggleSeat(this)">A11</div>
                                <div class="seat" id="A10" onclick="toggleSeat(this)">A10</div>
                                <div class="seat" id="A9" onclick="toggleSeat(this)">A9</div>
                                <div class="seat" id="A8" onclick="toggleSeat(this)">A8</div>
                                <div class="seat" id="A7" onclick="toggleSeat(this)">A7</div>
                                <div class="seat" id="A6" onclick="toggleSeat(this)">A6</div>
                                <div class="seat" id="A5" onclick="toggleSeat(this)">A5</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="B13" onclick="toggleSeat(this)">B13</div>
                                <div class="seat" id="B12" onclick="toggleSeat(this)">B12</div>
                                <div class="seat" id="B11" onclick="toggleSeat(this)">B11</div>
                                <div class="seat" id="B10" onclick="toggleSeat(this)">B10</div>
                                <div class="seat" id="B9" onclick="toggleSeat(this)">B9</div>
                                <div class="seat" id="B8" onclick="toggleSeat(this)">B8</div>
                                <div class="seat" id="B7" onclick="toggleSeat(this)">B7</div>
                                <div class="seat" id="B6" onclick="toggleSeat(this)">B6</div>
                                <div class="seat" id="B5" onclick="toggleSeat(this)">B5</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="C13" onclick="toggleSeat(this)">C13</div>
                                <div class="seat" id="C12" onclick="toggleSeat(this)">C12</div>
                                <div class="seat" id="C11" onclick="toggleSeat(this)">C11</div>
                                <div class="seat" id="C10" onclick="toggleSeat(this)">C10</div>
                                <div class="seat" id="C9" onclick="toggleSeat(this)">C9</div>
                                <div class="seat" id="C8" onclick="toggleSeat(this)">C8</div>
                                <div class="seat" id="C7" onclick="toggleSeat(this)">C7</div>
                                <div class="seat" id="C6" onclick="toggleSeat(this)">C6</div>
                                <div class="seat" id="C5" onclick="toggleSeat(this)">C5</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="D13" onclick="toggleSeat(this)">D13</div>
                                <div class="seat" id="D12" onclick="toggleSeat(this)">D12</div>
                                <div class="seat" id="D11" onclick="toggleSeat(this)">D11</div>
                                <div class="seat" id="D10" onclick="toggleSeat(this)">D10</div>
                                <div class="seat" id="D9" onclick="toggleSeat(this)">D9</div>
                                <div class="seat" id="D8" onclick="toggleSeat(this)">D8</div>
                                <div class="seat" id="D7" onclick="toggleSeat(this)">D7</div>
                                <div class="seat" id="D6" onclick="toggleSeat(this)">D6</div>
                                <div class="seat" id="D5" onclick="toggleSeat(this)">D5</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="E13" onclick="toggleSeat(this)">E13</div>
                                <div class="seat" id="E12" onclick="toggleSeat(this)">E12</div>
                                <div class="seat" id="E11" onclick="toggleSeat(this)">E11</div>
                                <div class="seat" id="E10" onclick="toggleSeat(this)">E10</div>
                                <div class="seat" id="E9" onclick="toggleSeat(this)">E9</div>
                                <div class="seat" id="E8" onclick="toggleSeat(this)">E8</div>
                                <div class="seat" id="E7" onclick="toggleSeat(this)">E7</div>
                                <div class="seat" id="E6" onclick="toggleSeat(this)">E6</div>
                                <div class="seat" id="E5" onclick="toggleSeat(this)">E5</div>
                            </div>
                        </div>

                        <div class="right">
                            <div class="row">
                                <div class="seat" id="B4" onclick="toggleSeat(this)">B4</div>
                                <div class="seat" id="B3" onclick="toggleSeat(this)">B3</div>
                                <div class="seat" id="B2" onclick="toggleSeat(this)">B2</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="C4" onclick="toggleSeat(this)">C4</div>
                                <div class="seat" id="C3" onclick="toggleSeat(this)">C3</div>
                                <div class="seat" id="C2" onclick="toggleSeat(this)">C2</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="D4" onclick="toggleSeat(this)">D4</div>
                                <div class="seat" id="D3" onclick="toggleSeat(this)">D3</div>
                                <div class="seat" id="D2" onclick="toggleSeat(this)">D2</div>
                            </div>
                            <div class="row">
                                <div class="seat" id="E4" onclick="toggleSeat(this)">E4</div>
                                <div class="seat" id="E3" onclick="toggleSeat(this)">E3</div>
                                <div class="seat" id="E2" onclick="toggleSeat(this)">E2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="legend">
                <div><span class="available"></span> Available</div>
                <div><span class="taken"></span> Taken</div>
                <div><span class="selected"></span> Selected</div>
                <div><span class="booked"></span> Booked</div>
            </div>
            <div class="payment-section">
                <select name="payment-method" id="paymentMethod" required>
                    <option value="">Payment Method</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="GCash">GCash</option>
                    <option value="PayMaya">PayMaya</option>
                    <option value="BPI Online">BPI Online</option>
                    <option value="BDO Online">BDO Online</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                    <option value="GrabPay">GrabPay</option>
                    <option value="Coins.ph">Coins.ph</option>
                </select>
                <button type="submit">Proceed to Payment</button>
            </div>
            <div class="payment-details">
                <p>Selected Seats: <span id="selected-seats">None</span></p>
                <p>Total Price: <span id="total_price_display">&#8369;0.00</span></p>
            </div>
       
            <input type="hidden" id="total_price" name="total_price">
        </form>

    </div>

 

    <div class="popupTrailer" style="display:none">
        <button class="close-btnTrailer" onclick="closePopupTrailer()">×</button>
        <div class="video-container">
            <video id="trailerVideo" width="560" height="315" controls>
                <source src="1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="content">
            <h1>Godzilla x Kong: The New Empire</h1>
            <p class="details">PG | 2hrs, 30 mins</p>
            <button class="buy-tickets-btn"  onclick="stopVideo()">BUY TICKETS</button>
            <div class="tags">
                <span>Action</span>
                <span>Adventure</span>
                <span>Sci-Fi</span>
                <span>Fantasy</span>
            </div>
            <p class="description">
                Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description
            </p>
            <div class="credits">
                <p><strong>Main Cast:</strong> Name</p>
                <p><strong>Director:</strong> Name</p>
                <p><strong>Writer:</strong> Name</p>
                <p><strong>Film Producer:</strong> Name</p>
                <p><strong>Released by:</strong> Name</p>
            </div>
            <br>
            <br>
            <br>

            <div class="comment-section">
                <h2>Write your review</h2>
                <textarea id="comment" placeholder="Write your review"></textarea>
                <div class="ratingDIV">
                    <h4 style="justify-content: center;">My Rating</h4>
                    <div class="stars" id="stars">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <button class="submit-btn" onclick="submitComment()">Submit</button>
                </div>

            </div>
            <br>

            <hr>
            <div class="review-section">
                <h2>Movie Reviews</h2>
                <div class="review">
                    <p><strong>@username</strong> 1 day ago</p>
                    <p>Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review Movie Review</p>
                    <div class="rating">
                        <span>★★★☆☆</span>
                    </div>
                </div>
                <!-- Repeat for more reviews -->
            </div>

        </div>

    </div>


    

    <div class="popupINFO" style="display:none">
            <button class="close-btnTrailer" onclick="closePopupTrailer()">×</button>
            <div class="video-container">
                <video id="trailerVideo" width="560" height="315" controls>
                    <source src="1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="content">
                <h1>Godzilla x Kong: The New Empire</h1>
                <p class="details">PG | 2hrs, 30 mins</p>
                <div class="tags">
                    <span>Action</span>
                    <span>Adventure</span>
                    <span>Sci-Fi</span>
                    <span>Fantasy</span>
                </div>
                <p class="description">
                    Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description
                </p>
                <div class="credits">
                    <p><strong>Main Cast:</strong> Name</p>
                    <p><strong>Director:</strong> Name</p>
                    <p><strong>Writer:</strong> Name</p>
                    <p><strong>Film Producer:</strong> Name</p>
                    <p><strong>Released by:</strong> Name</p>
                </div>
                <br>
                <br>
                <br>

                <div class="comment-section">
                    <h2>DISCUSSION</h2>
                    <textarea id="comment" placeholder="Write your thought"></textarea>
                    <div class="ratingDIV">
                        <h4 style="justify-content: center;">Expectation Rate</h4>
                        <div class="stars" id="stars">
                            <span class="star" data-value="1">★</span>
                            <span class="star" data-value="2">★</span>
                            <span class="star" data-value="3">★</span>
                            <span class="star" data-value="4">★</span>
                            <span class="star" data-value="5">★</span>
                        </div>
                        <button class="submit-btn" onclick="submitComment()">Submit</button>
                    </div>

                </div>
                <br>

                <hr>
                <div class="review-section">
                    <h2>People's Thought</h2>
                    <div class="review">
                        
                    </div>
                    <!-- Repeat for more reviews -->
                </div>

            </div>

        </div>

    <script src="json\book.js"></script>
    <script src="json\trailer.js"></script>
    <script src="json\menu.js"></script>

</body>

</html>



