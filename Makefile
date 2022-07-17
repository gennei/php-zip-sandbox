all: build exec

build:
	docker build . -t phpzip
exec:
	docker run -it phpzip bash