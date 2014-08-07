qotd
====

Music's quotes to inspire your coding

## WTF?

It is a component used in comodojo to generate random text for tests or error messages.

It generate random music quotes reading `resources/quotes` file; a quote is a string in a single line of quotes file.

## Installation

-	Using composer:

	``composer require comodojo/qotd dev-master``

- 	Downloading zip from GitHub

	Extract zip & include `src/Qotd.php` in your file.

## Usage

-	Getting a simple random quote:

	```php
	
	// create an instance
	$qotd = new \Comodojo\Qotd();
	
	// get a single quote
	$log->getQuote();

	```
-	Getting all quotes as array:

	```php
	
	// create an instance
	$qotd = new \Comodojo\Qotd();
	
	// get all quotes
	$log->getQuotes();

	```

-	Getting all quotes in id/quote store form (useful for client-side stores test):

	```php
	
	// create an instance
	$qotd = new \Comodojo\Qotd();
	
	// get all quotes
	$log->getQuotesAsStore();

	```

## Contributing

Fell free to add quotes forking this repo, editing `resources/quotes` and submitting a pull request.
