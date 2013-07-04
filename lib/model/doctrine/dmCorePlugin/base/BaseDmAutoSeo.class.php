<?php

/**
 * BaseDmAutoSeo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $module
 * @property string $action
 * @property string $slug
 * @property string $name
 * @property string $title
 * @property string $h1
 * @property string $description
 * @property string $keywords
 * @property string $strip_words
 * 
 * @method string    getModule()      Returns the current record's "module" value
 * @method string    getAction()      Returns the current record's "action" value
 * @method string    getSlug()        Returns the current record's "slug" value
 * @method string    getName()        Returns the current record's "name" value
 * @method string    getTitle()       Returns the current record's "title" value
 * @method string    getH1()          Returns the current record's "h1" value
 * @method string    getDescription() Returns the current record's "description" value
 * @method string    getKeywords()    Returns the current record's "keywords" value
 * @method string    getStripWords()  Returns the current record's "strip_words" value
 * @method DmAutoSeo setModule()      Sets the current record's "module" value
 * @method DmAutoSeo setAction()      Sets the current record's "action" value
 * @method DmAutoSeo setSlug()        Sets the current record's "slug" value
 * @method DmAutoSeo setName()        Sets the current record's "name" value
 * @method DmAutoSeo setTitle()       Sets the current record's "title" value
 * @method DmAutoSeo setH1()          Sets the current record's "h1" value
 * @method DmAutoSeo setDescription() Sets the current record's "description" value
 * @method DmAutoSeo setKeywords()    Sets the current record's "keywords" value
 * @method DmAutoSeo setStripWords()  Sets the current record's "strip_words" value
 * 
 * @package    speeder
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmAutoSeo extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dm_auto_seo');
        $this->hasColumn('module', 'string', 127, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 127,
             ));
        $this->hasColumn('action', 'string', 127, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 127,
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('h1', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('strip_words', 'string', 10000, array(
             'type' => 'string',
             'length' => 10000,
             ));


        $this->index('dmAutoSeoModuleAction', array(
             'fields' => 
             array(
              0 => 'module',
              1 => 'action',
             ),
             'type' => 'unique',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'slug',
              1 => 'name',
              2 => 'title',
              3 => 'h1',
              4 => 'description',
              5 => 'keywords',
              6 => 'strip_words',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($i18n0);
    }
}