<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tail Mates</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="success-stories-styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Tail Mates-4.png">
    <style>
        *::selection {
            background-color: #3d3d3d;
            color: whitesmoke;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            overflow-y: auto;
            padding: 20px;
        }
        .overlay.active {
            visibility: visible;
            opacity: 1;
        }
        .overlay-content {
            background-color: white;
            max-width: 800px;
            width: 100%;
            padding: 20px;
            border-radius: 10px;
            position: relative;
            color: #333;
        }
        .overlay-content img {
            width: 30%;
            border-radius: 10px;
            float: left; /* Makes the text wrap around the image */
            margin: 0 20px 20px 0; 
        }
        .overlay-content h3 {
            margin-top: 10px;
            font-size: 24px;
            color: #444;
        }
        .overlay-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-top: 10px;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main style="background-color: rgb(251, 245, 235);">
        <section class="hero">
            <div class="hero-content">
                <h1>Adopt, Don't Shop</h1>
                <p>Give a loving home to a furry companion and change a life forever.</p>
                <a href="adopt.php"><button>Adopt Now</button></a>
            </div>
        </section>

        <section class="success-stories">
            <h2>Success Stories</h2>
            <section class="stories-grid">
                <div class="story-card" data-story="story1">
                    <img src="resources/p-1.png" alt="Buddy's Journey">
                    <h3>Buddy's Journey</h3>
                    <p>Read the heartwarming story of Buddy, a rescue dog who found his forever home with the Miller family.</p>
                    <button class="read-more-btn">Read More >></button>
                </div>
                <div class="story-card" data-story="story2">
                    <img src="resources/p-3.png" alt="Whiskers' New Life">
                    <h3>Whiskers' New Life</h3>
                    <p>Discover how Whiskers, an abandoned cat, was given a second chance at life and found a loving family.</p>
                    <button class="read-more-btn">Read More >></button>
                </div>
                <div class="story-card" data-story="story3">
                    <img src="resources/p-2.png" alt="Rescuing Rocky">
                    <h3>Rescuing Rocky</h3>
                    <p>Follow the inspiring story of Rocky, a puppy mill survivor who overcame adversity and found happiness.</p>
                    <button class="read-more-btn">Read More >></button>
                </div>
            </section>
        </section>

        <div class="overlay" id="story-overlay">
            <div class="overlay-content">
                <button class="close-btn">&times;</button>
                <h3 id="overlay-title"></h3>
                <img id="overlay-img" src="" alt="Story Image">
                <p id="overlay-text"></p>
            </div>
        </div>

        <section class="cta">
            <div class="cta-content">
                <h2>Join the Tail Mates Family</h2>
                <p>Become a part of our mission to find loving homes for every pet.</p>
                <a href="donate.php"><button>Donate Now</button></a>
                <a href="volunteer.php"><button>Get Involved</button></a>
            </div>
        </section>
    </main>

    <script>
        const stories = {
            story1: {
                title: "Buddy's Journey",
                img: "resources/p-1-1.png",
                text: `In the bustling heart of the city, where the streets echoed with daily life, Buddy, a sprightly beagle with soulful eyes, awaited his fate. One sunny afternoon, the Miller family walked in. Their connection was instant. The adoption process was quick, and Buddy found his forever home, showered with love and endless cuddles. His story is a testament to hope and the magic of finding the right family.`
            },
            story2: {
                title: "Whiskers' New Life",
                img: "resources/p-3-1.png",
                text: `Whiskers, a sleek tabby, knew the harsh streets. Discovered by the Harrison family, she soon transformed with love. Her fur regained its shine, and her purrs filled the house. Whiskers became more than a pet; she was family—a symbol of second chances and unconditional love.`
            },
            story3: {
                title: "Rescuing Rocky",
                img: "resources/p-2-1.png",
                text: `Rocky began his life in a puppy mill, never seeing sunlight. Rescued by the Thompsons, he slowly learned trust and joy. From his first wag to playful runs, Rocky’s journey reminds us that love heals and new beginnings are possible.`
            }
        };

        document.querySelectorAll('.read-more-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const storyKey = e.target.closest('.story-card').getAttribute('data-story');
                const story = stories[storyKey];
                document.getElementById('overlay-title').textContent = story.title;
                document.getElementById('overlay-img').src = story.img;
                document.getElementById('overlay-text').textContent = story.text;
                document.getElementById('story-overlay').classList.add('active');
            });
        });

        document.querySelector('.close-btn').addEventListener('click', () => {
            document.getElementById('story-overlay').classList.remove('active');
        });

        window.addEventListener('click', (e) => {
            if (e.target === document.getElementById('story-overlay')) {
                document.getElementById('story-overlay').classList.remove('active');
            }
        });
    </script>

    <script src="main.js"></script>
</body>
</html>

<?php include('footer.php'); ?>
