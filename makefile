
ROOT := $(shell pwd)
SAIL := $(ROOT)/vendor/bin/sail

make:
	@ echo up		-	starts the server
	@ echo migrate	-	migrates the tables in database/migrations

up:
	@ $(SAIL) up

tutorial:
	@ firefox https://laracasts.com/series/laravel-8-from-scratch/episodes/45

migrate:
	@ $(SAIL) artisan migrate:fresh --seed

add_model:
	@ $(SAIL) artisan make:model

tinker:
	@ $(SAIL) artisan tinker
