qotd
====

Music's quotes to inspire your coding

## WTF?

It is a component used in comodojo to generate random text for tests or error messages.

It gets music quotes from file `resources/quotes`, where each line represent a single quote.

## Installation

-   Using composer:

    ``composer require comodojo/qotd 1.*``

-   Downloading zip from GitHub

    Extract zip & include `src/Qotd.php` in your file.

## Usage

-   Getting a simple random quote:

    ```php
    
    // create an instance
    $qotd = new \Comodojo\Qotd();
    
    // get a single quote
    $quote = $qotd->getQuote();

    ```
-   Getting all quotes as array:

    ```php
    
    // create an instance
    $qotd = new \Comodojo\Qotd();
    
    // get all quotes
    $array_of_quotes = $qotd->getQuotes();

    ```

-   Getting all quotes in id/quote store form (useful for client-side stores test):

    ```php
    
    // create an instance
    $qotd = new \Comodojo\Qotd();
    
    // get all quotes
    $array_of_quotes = $qotd->getQuotesAsStore();

    ```

## Contributing

Fell free to add quotes forking this repo, editing `resources/quotes` and submitting a pull request.
