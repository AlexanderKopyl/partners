EXTENSION = php artisan
MAKE = php artisan make:
MAKE_SEED = php artisan make:seeder
SEED = php artisan db:seed

rc:
	${EXTENSION} route:cache

ms:
	${MAKE_SEED} $(className)

rs:
	${SEED} --class=$(className)

fs:
	${EXTENSION} migrate:fresh --seed

gts:
	git status

amend:
	git commit --amend --no-edit

mc:
	${MAKE}migration $(mname)

m:
	${EXTENSION} migrate

rAllSeed:
	${EXTENSION} migrate:refresh --seed

redis:
	redis-cli
