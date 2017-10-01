all: vendor etc cleanup

vendor:
	composer require framesnpictures/lux
	composer install

etc: vendor
	cp -R vendor/framesnpictures/lux/tpl/* ./

cleanup: vendor
	composer install
