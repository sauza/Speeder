<?php

require_once '/Users/hectorsauza/diem-5.1.3/dmCorePlugin/lib/core/dm.php';
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      // add plugins you want to enable here
    ));

    $this->setWebDir(sfConfig::get('sf_root_dir').'/web');
  }
  
}