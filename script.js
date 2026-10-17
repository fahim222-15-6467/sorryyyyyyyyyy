window.addEventListener("load", () => {
    setTimeout(() => {
        document.getElementById("loader").style.opacity = "0";
        setTimeout(() => {
            document.getElementById("loader").style.display = "none";
        }, 1000);
    }, 1500);
});

const text = "Some words are easy to say... but some apologies come straight from the heart.";
const typingText = document.getElementById("typingText");

let index = 0;

function typeWriter() {
    if (index < text.length) {
        typingText.textContent += text.charAt(index);
        index++;
        setTimeout(typeWriter, 45);
    }
}

setTimeout(typeWriter, 1800);

const music = document.getElementById("music");
const musicBtn = document.getElementById("musicBtn");

let playing = false;

musicBtn.addEventListener("click", () => {
    if (playing) {
        music.pause();
        musicBtn.textContent = "🎵";
        playing = false;
    } else {
        music.play();
        musicBtn.textContent = "⏸️";
        playing = true;
    }
});

document.body.addEventListener("click", () => {
    if (!playing) {
        music.play().then(() => {
            playing = true;
            musicBtn.textContent = "⏸️";
        }).catch(() => {});
    }
}, { once: true });

function scrollToLetter() {
    document.getElementById("letter").scrollIntoView({
        behavior: "smooth"
    });
}

function createHeart() {
    const heart = document.createElement("div");
    heart.className = "heart";

    const symbols = ["❤️", "💗", "💕", "💖", "💓", "🌸"];
    heart.innerHTML = symbols[Math.floor(Math.random() * symbols.length)];

    heart.style.left = Math.random() * 100 + "vw";
    heart.style.fontSize = (12 + Math.random() * 22) + "px";
    heart.style.animationDuration = (5 + Math.random() * 6) + "s";

    document.getElementById("hearts").appendChild(heart);

    setTimeout(() => {
        heart.remove();
    }, 11000);
}

setInterval(createHeart, 700);

const yesBtn = document.getElementById("yesBtn");
const maybeBtn = document.getElementById("maybeBtn");
const response = document.getElementById("response");

yesBtn.addEventListener("click", () => {

    response.innerHTML = "You just made my heart smile, Sadia. ❤️";

    for (let i = 0; i < 35; i++) {
        setTimeout(createHeart, i * 70);
    }

    yesBtn.textContent = "Thank You, Sadia ❤️";

    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: "smooth"
    });
});

maybeBtn.addEventListener("click", () => {
    response.innerHTML = "Take your time... I'll be waiting with a sincere heart. 🥺❤️";

    maybeBtn.style.transform = "translateX(10px)";

    setTimeout(() => {
        maybeBtn.style.transform = "translateX(-10px)";
    }, 150);

    setTimeout(() => {
        maybeBtn.style.transform = "translateX(0)";
    }, 300);
});

const photos = document.querySelectorAll(".photo");

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
        }
    });
}, {
    threshold: 0.15
});

photos.forEach(photo => {
    photo.style.opacity = "0";
    photo.style.transform = "translateY(50px)";
    photo.style.transition = "1s ease";
    observer.observe(photo);
});