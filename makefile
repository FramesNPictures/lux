all: vendor etc cleanup

vendor:
	composer require framesnpictures/lux dev-master
	composer install

etc: vendor
	cp -R vendor/framesnpictures/lux/tpl/* ./

cleanup: vendor
	composer install
