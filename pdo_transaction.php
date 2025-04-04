<?php

require 'functions.php';
$pdo = require 'connect.php';

$book = [
	'title' => 'Eternal',
	'isbn' => '9780525539766',
	'published_date' => '2021-03-23',
	'publisher_id' => 2,
];

$author = [
	'first_name' => 'Lisa',
	'last_name' => 'Scottoline',
];

try {
	$pdo->beginTransaction();

	// find the author by first name and last name
	$author_id = get_author_id(
		$pdo,
		$author['first_name'],
		$author['last_name']
	);

	// if author not found, insert a new author
	if (!$author_id) {
		$author_id = insert_author(
			$pdo,
			$author['first_name'],
			$author['last_name']
		);
	}

	$book_id = insert_book(
		$pdo,
		$book['title'],
		$book['isbn'],
		$book['published_date'],
		$book['publisher_id']
	);

	// insert the link between book and author
	insert_book_author($pdo, $book_id, $author_id);

	// commit the transaction
	$pdo->commit();
} catch (\PDOException $e) {
	// rollback the transaction
	$pdo->rollBack();

	// show the error message
	die($e->getMessage());
}