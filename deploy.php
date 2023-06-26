<?php
namespace Deployer;

require 'recipe/common.php';

// Globale Einstellungen nach dep init

set('application', 'xi');
set('git_tty', true);
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);
set('allow_anonymous_stats', false);



// Hosts
host('int')
    ->set('hostname', '116.202.136.209')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/srv/www/my-web-page');

host('uat')
    ->set('hostname', '116.202.136.227')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/srv/www/my-web-page');

host('prod')
    ->set('hostname', '116.202.136.236')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/srv/www/my-web-page');


// postRun
desc('Nach dem Ausrollen, starten wir den neuen Container einmal manuell');
task('postinstall', function(){

});

// Tasks
desc('Arbeiten waren erfolgreich');
task('success', function(){
    writeln('[{{alias}}] :) habe fertig on {{hostname}}');
});

task('deploy:update_code', function () {
    // Your custom update code
    #upload('.', '{{release_path}}');
    upload('./config', '{{release_path}}/');
    upload('./composer.json', '{{release_path}}/');
    #upload('./composer.lock', '{{release_path}}/');
    #upload('./public', '{{release_path}}/');
    upload('./src', '{{release_path}}/');
    #upload('./var', '{{release_path}}/');
    upload('./vendor', '{{release_path}}/');
    # noch die Docker sachen und Run infos
    upload('./bin', '{{release_path}}/');
    upload('./docker', '{{release_path}}/');
    upload('./docker-compose.yml', '{{release_path}}/');
    # die Server .env
    run('cp {{deploy_path}}/shared/.env {{release_path}}/.env');
    run('mkdir -p {{release_path}}/var/');
});

#task('deploy:shared', function(){});
task('deploy:writable', function(){});
task('deploy:vendors', function(){});
task('deploy:clear_paths', function(){});

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:symlink',
    'deploy:shared',
    'deploy:unlock',
    'postinstall',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
