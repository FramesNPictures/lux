all: vendor etc

vendor:
	composer require framesnpictures/lux
	composer install

etc: vendor
	cp -R vendor/framesnpictures/lux/tpl/* ./
