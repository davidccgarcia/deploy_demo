from __future__ import with_statement
from fabric.api import cd, run, env
from fabric.decorators import task

env.use_ssh_config = True
env.hosts = ['styde']

@task
def deploy():
    with cd('/var/www/html/deploy_demo'):
       run('git pull origin master')
       
