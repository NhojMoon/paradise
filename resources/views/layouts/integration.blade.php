<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Quote Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="antialiased">
    <div class="container my-5 text-center">
        <h1 class="display-4 mb-3" id="stoic">Loading Author...</h1>
        <p class="display-5" style="font-style: italic" id="author">Author's Quote</p>
        <hr />
        <!-- Add a button with onclick attribute -->
        <button class="btn btn-dark my-3" onclick="getNewQuote()">New Quote</button>
    </div>

    <script>
        const apiEndpoint = 'https://stoic.tekloon.net/stoic-quote';
        window.addEventListener('load', getNewQuote);

        function getNewQuote() {
            fetch(apiEndpoint)
                .then(response => response.json())
                .then(data => {
                    const quote = data.author;
                    output(quote, data.quote);
                })
                .catch(error => {
                    output('Read, read, read. Read everything  —  trash, classics, good and bad, and see how they do it. Just like a carpenter who works as an apprentice and studies the master. Read! Youll absorb it. Then write. If its good, youll find out. If its not, throw it out of the window.', 'William Faulkner');
                    console.error(error);
                });
        }

        function output(quoteText, quoteAuthor) {
            document.getElementById('stoic').innerText = quoteText;
            document.getElementById('author').innerText = `"${quoteAuthor}"`;
        }
    </script>
</body>
</html>
