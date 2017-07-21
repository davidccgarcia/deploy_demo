@servers(['styde' => 'styde'])

@task('deploy', ['on' => 'styde'])
	cd /var/www/html/deploy_demo
	git pull origin master
@endtask
