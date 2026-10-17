<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Sadia ❤️</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="loader">
        <div class="loader-heart">❤️</div>
        <p>Loading something special...</p>
    </div>

    <div class="stars"></div>

    <audio id="music" loop>
        <source src="music/sorry-song.mp3" type="audio/mpeg">
    </audio>

    <button class="music-btn" id="musicBtn">🎵</button>

    <main>

        <section class="hero">
            <div class="glow"></div>

            <div class="hero-content">
                <div class="mini-heart">♡</div>

                <p class="small-title">A little message from my heart</p>

                <h1>I'm Sorry, <span>Sadia</span> ❤️</h1>

                <div class="typing">
                    <span id="typingText"></span>
                </div>

                <button class="start-btn" onclick="scrollToLetter()">
                    Read My Heart 💌
                </button>
            </div>

            <div class="scroll">
                <span>Scroll down</span>
                <div>↓</div>
            </div>
        </section>

        <section class="memory-section">
            <div class="section-title">
                <span>tumr ey chobigula sundor dear vondo</span>
                <h2>A Few Beautiful picture of you vondo sadia 📸</h2>
            </div>

            <div class="gallery">
                <div class="photo photo1">
                    <img src="images/sadia1.jpg" alt="Sadia">
                </div>

                <div class="photo photo2">
                    <img src="images/sadia2.jpg" alt="Sadia">
                </div>

                <div class="photo photo3">
                    <img src="images/sadia3.jpg" alt="Sadia">
                </div>

                <div class="photo photo4">
                    <img src="images/sadia4.jpg" alt="Sadia">
                </div>
            </div>
        </section>

        <section class="letter-section" id="letter">

            <div class="envelope">
                <div class="envelope-top"></div>

                <div class="letter">
                    <div class="letter-heart">❤️</div>

                    <p class="dear">Dear Sadia,</p>

                    <h2>I Really Am Sorry</h2>

                    <p>
                        I know that I may have hurt you, and honestly,
                        that's the last thing I ever wanted to do.
                    </p>

                    <p>
                        Sometimes I make mistakes, sometimes I say things
                        without thinking, but please know that I never want
                        to lose the smile that makes you so special.
                    </p>

                    <p>
                        I'm not asking you to forget everything instantly.
                        I'm only asking for one chance to make things right.
                    </p>

                    <p class="special">
                        You mean more to me than my words can explain. ❤️
                    </p>

                    <div class="signature">
                        With all my heart,<br>
                        <strong>Someone who is truly sorry</strong>
                    </div>
                </div>
            </div>

        </section>

        <section class="forgive-section">

            <div class="forgive-content">

                <div class="big-heart">❤️</div>

                <h2>Sadia, Will You Forgive Me?</h2>

                <p>
                    I promise I'll try my best to understand,
                    listen and never intentionally hurt you again.
                </p>

                <div class="buttons">
                    <button id="yesBtn">Yes, I Forgive You ❤️</button>
                    <button id="maybeBtn">Let Me Think 🥺</button>
                </div>

                <div id="response"></div>

            </div>

        </section>

        <section class="final-section">

            <div class="final-heart">💗</div>

            <h2>For You, Sadia</h2>

            <p>
                No matter how many words I write,
                they will never be enough to say how sorry I am.
            </p>

            <div class="final-message">
                I'm Sorry ❤️
            </div>

        </section>

    </main>

    <div id="hearts"></div>

    <script src="script.js"></script>
</body>
</html>