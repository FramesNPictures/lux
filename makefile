all: vendor etc cleanup

vendor:
	composer require framesnpictures/lux dev-master
	composer install

etc: vendor
	cp -R vendor/framesnpictures/lux/tpl/* ./
	rm composer.lock

cleanup: vendor
	composer install
