//scroll suave
document.addEventListener("DOMContentLoaded", function () {
    var scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            var targetSectionId = this.getAttribute('href');
            var targetSection = document.querySelector(targetSectionId);
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            else {
                window.location.href = targetSectionId;
            }
        });
    });
});

var quotes = [
    { text: "Life is too short to be serious all the time. So, if you can't laugh at yourself, call me—I'll do it for you.",
        category: "The Cute Clown (Comedy)" },
    { text: "Embrace your flaws; they add character. Unless you're a serial killer. In that case, maybe work on those.",
        category: "The Strategist (Competitive)" },
    { text: "The early bird might get the worm, but the second mouse gets the cheese. Timing is everything.",
        category: "The Chilled Nomad (Cozy)" },
    { text: "Why fit in when you were born to stand out? Just like a pineapple in a salad—unexpected and totally awesome.",
        category: "The Artistic Junkie (Creative)" },
    { text: "In a world full of trends, be a classic. Like a good pizza, you can never go wrong with the classics.",
        category: "The Team Player (Cooperative)" },
    { text: "Don't be scared of the future; it hasn't arrived. And when it does, just remember, pizza will still be there for you.",
        category: "The Master of Shadows (Horror)" },
    { text: "Life is like a cup of tea; it's all in how you make it. And a little sugar and laughter never hurt.",
        category: "Brewed Chuckles(Simulator)" },
    { text: "Be yourself; everyone else is already taken. And trust me, being someone else sounds exhausting.",
        category: "Authenticity Maven (Novel)" },
    { text: "The best way to predict the future is to create it. Or, you know, just go with the flow and enjoy the ride.",
        category: "The Fearless Explorer (Adventure)" },
    { text: "They say laughter is the best medicine. So, if you're feeling sick, watch a comedy show. If laughter doesn't cure you, at least your face will hurt for a while.",
        category: "The Master of Shadows (Horror)" },
];

var locked = false;
var currentQuoteIndex = 0;

document.getElementById('quoteText').innerHTML = quotes[currentQuoteIndex].text;

function lockQuote(){
    if (!locked) {
        locked = true;
        document.querySelector('.btn-1').setAttribute('disabled', 'true');
        document.getElementById('categoryText').innerText = "Category: ".concat(quotes[currentQuoteIndex].category, "!");
    }
}

function generateRandomQuote(){

    if (!locked){
        currentQuoteIndex = Math.floor(Math.random() * quotes.length);
        document.getElementById('quoteText').innerHTML = quotes[currentQuoteIndex].text;
        document.getElementById('categoryText').innerText = '';
    }
}
