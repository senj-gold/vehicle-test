###> symfony/framework-bundle ###
.DEFAULT_GOAL := help
help:
	@grep -E '^[a-zA-Z-]+:.*?## .*$$' Makefile | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "[32m%-17s[0m %s\n", $$1, $$2}'
.PHONY: help

docker-up: ## Up doker containers
	@docker-compose down && \
        docker-compose build --pull && \
        docker-compose -f docker-compose.yml up -d --remove-orphans && \
        docker-compose run test-php composer install

docker-build-project: ## Build project
	@docker-compose run test-php php bin/console d:d:c && \
        docker-compose run test-php php bin/console d:m:m -n

docker-rebuild-project: docker-drop-db docker-build-project ## Rebuild project

docker-build-test: ## Build project-test
	@docker-compose run test-php php bin/console d:d:c -e test && \
        docker-compose run test-php php bin/console d:m:m -n -e=test &&  \
        docker-compose run test-php php bin/console c:cl -e test

docker-rebuild-test: docker-drop-db-test docker-build-test ## Rebuid project-test

docker-drop-db: ## Remove db
	@docker-compose run stest-php php bin/console d:d:d --force

docker-drop-db-test: ## Remove db tests
	@docker-compose run test-php php bin/console d:d:d --force -e test

docker-run-test: ## Run tests
	@docker-compose run test-php php bin/phpunit -c phpunit.xml.dist

docker-run-phpcs: ## Run phpcs
	@docker-compose run test-php php bin/phpcs ./src -p --encoding=utf-8 --extensions=php --ignore=Tests --standard=./vendor/escapestudios/symfony2-coding-standard/Symfony2

docker-check-project: docker-run-phpcs docker-run-test ## Run ckeck project
	@docker-compose run test-php php bin/console security:check && \
	    docker-compose run test-php php bin/console doctrine:schema:validate
