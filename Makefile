build:
	docker build -t kata .

test:
	docker run --rm --volume="$(shell pwd)"/:/app kata php vendor/bin/phpunit