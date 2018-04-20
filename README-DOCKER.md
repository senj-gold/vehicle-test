# docker
Up project
```bash
cp .env.dist .env
cp app/config/parameters.yml.docker app/config/parameters.yml
cp Makefile.docker Makefile
make docker-up
make docker-build-project
```

## docker stop all containers
```bash
docker stop $(docker ps -aq)
```
## docker remove all containers
```bash
docker rm $(docker ps -aq)
```
## docker remove all images
```bash
docker rmi $(docker images -q)
```

## docker bash
```bash   
docker-compose exec test-php bash
```  