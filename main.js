$(document).ready(() => {
  //hamburger
  $(".hamburger").click(() => {
    $(".hamburger").toggleClass("is-active");
    $(".mobile-nav").toggleClass("is-active");
    $("body").toggleClass("overflow");
  });

  //quotes
  quotes = [
    "An investment in knowledge pays the best interest.",
    "Bottoms in the investment world don't end with four-year lows; they end with 10- or 15-year lows.",
    "I will tell you how to become rich. Close the doors. Be fearful when others are greedy. Be greedy when others are fearful.",
    "With a good perspective on history, we can have a better understanding of the past and present, and thus a clear vision of the future.",
    "It's not whether you're right or wrong that's important, but how much money you make when you're right and how much you lose when you're wrong.",
    "Given a 10% chance of a 100 times payoff, you should take that bet every time.",
    "Don't look for the needle in the haystack. Just buy the haystack!",
    "I don't look to jump over seven-foot bars; I look around for one-foot bars that I can step over.",
    "The stock market is filled with individuals who know the price of everything, but the value of nothing.",
    "In investing, what is comfortable is rarely profitable.",
  ];
  author = [
    "Benjamin Franklin",
    "Jim Rogers",
    "Warren Buffett",
    "Carlos Slim Helu",
    "George Soros",
    "jeff Bezos",
    "John Bogle",
    "Warren Buffett",
    "Phillip Fisher",
    "Robert Arnott",
  ];

  function getQuote(q, a) {
    randomNum = Math.floor(Math.random() * quotes.length);
    $(".quote").text(q[randomNum]);
    $(".author").text("-" + a[randomNum]);
  }

  //initial load
  getQuote(quotes, author);

  //next quote button
  $(".next-quote").click(() => {
    getQuote(quotes, author);
  });
});
