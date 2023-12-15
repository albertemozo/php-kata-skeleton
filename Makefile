build:
	docker build --tag=kata .

test:
	docker run --rm --volume="$(shell pwd)"/:/app kata php vendor/bin/phpunit