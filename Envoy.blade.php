@servers(['styde' => 'styde'])

@task('list', ['on' => 'styde'])
	cd /var/www/html/deploy_demo
	ls -la
@endtask
