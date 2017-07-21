@servers(['styde' => 'styde'])

@task('deploy', ['on' => 'styde'])
	cd /var/www/html/deploy_demo
	git pull origin master
	sudo /etc/init.d/httpd reload
@endtask
