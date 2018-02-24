@servers(['web' => ['blmmemphis@blm.dev.cedc.org']])

@task('ll', ['on' => 'web'])
  cd www
  ls -alh
@endtask

@task('deploy', ['on' => 'web'])
  cd /var/www/serundeputy/www
  @if ($branch)
    git pull origin {{ $branch }}
  @endif
  drush updb -y
  drush bcim -y
  drush cc all
@endtask
