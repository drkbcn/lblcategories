<?php
/**
* 2021 Labelgrup
*
* NOTICE OF LICENSE
*
* READ ATTACHED LICENSE.TXT
*
*  @author    Manel Alonso <malonso@labelgrup.com>
*  @copyright 2021 Labelgrup
*  @license   LICENSE.TXT
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Lblcategories extends Module
{
    public function __construct()
    {
        $this->name = 'lblcategories';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Labelgrup Networks, S.L.';
        $this->need_instance = 0;
        $this->module_key = '';
        $this->displayName = $this->trans('Categories Override', [], 'Modules.Lblcategories.Admin');
        $this->description = $this->trans('Moves the categories tree below image section.', [], 'Modules.Lblcategories.Admin');
        $this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
        $this->bootstrap = true;

        parent::__construct();
    }

    /**
     * New translations for 1.7.6
     */
    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}
