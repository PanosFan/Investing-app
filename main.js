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

  //initial load
  getQuote(quotes, author);

  //next quote button
  $(".next-quote").click(() => {
    getQuote(quotes, author);
  });

  function getQuote(q, a) {
    randomNum = Math.floor(Math.random() * quotes.length);
    $(".quote").text(q[randomNum]);
    $(".author").text("-" + a[randomNum]);
  }

  const buttonEL = document.getElementById("input1BTN");
  buttonEL.addEventListener("click", () => {
    const inputEL = document.getElementById("input1").value;
    if (!inputEL.length == 0) getPrices(inputEL);
  });

  async function getPrices(symbol) {
    let day = new Date();
    let dd = String(day.getDate() - 1).padStart(2, "0"); //api shows up to one day before
    let mm = String(day.getMonth() + 1).padStart(2, "0"); //January is 0!
    let yyyy = day.getFullYear();
    day = yyyy + "-" + mm + "-" + dd;

    const res = await fetch(
      `https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=${symbol}&apikey=HZ6DKMY2DQ2T15YX`
    );
    const data = await res.json();
    document.getElementById("symbol").textContent =
      "Symbol: " + data["Meta Data"]["2. Symbol"];
    document.getElementById("open").textContent =
      "Open prince: " + data["Time Series (Daily)"][day]["1. open"];
    document.getElementById("close").textContent =
      "Close price: " + data["Time Series (Daily)"][day]["4. close"];
    document.getElementById("volume").textContent =
      "Volume: " + data["Time Series (Daily)"][day]["5. volume"];
  }
});
