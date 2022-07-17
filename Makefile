all: build exec

build:
	docker build . -t phpzip
exec:
	docker run --namephpzip -it php ./src/main.php && ls -l /tmp