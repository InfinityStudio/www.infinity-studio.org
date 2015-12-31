<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Dia schema export code
 *
 * @package    PhpMyAdmin-Schema
 * @subpackage Dia
 */
namespace PMA\libraries\plugins\schema;

use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\plugins\SchemaPlugin;
use PMA\libraries\plugins\schema\dia\DiaRelationSchema;
use PMA\libraries\properties\plugins\SchemaPluginProperties;
use PMA\libraries\properties\options\items\SelectPropertyItem;

/**
 * Handles the schema export for the Dia format
 *
 * @package    PhpMyAdmin-Schema
 * @subpackage Dia
 */
class SchemaDia extends SchemaPlugin
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setProperties();
    }

    /**
     * Sets the schema export Dia properties
     *
     * @return void
     */
    protected function setProperties()
    {
        $schemaPluginProperties = new SchemaPluginProperties();
        $schemaPluginProperties->setText('Dia');
        $schemaPluginProperties->setExtension('dia');
        $schemaPluginProperties->setMimeType('application/dia');

        // create the root group that will be the options field for
        // $schemaPluginProperties
        // this will be shown as "Format specific options"
        $exportSpecificOptions = new OptionsPropertyRootGroup();
        $exportSpecificOptions->setName("Format Specific Options");

        // specific options main group
        $specificOptions = new OptionsPropertyMainGroup();
        $specificOptions->setName("general_opts");
        // add options common to all plugins
        $this->addCommonOptions($specificOptions);

        $leaf = new SelectPropertyItem();
        $leaf->setName("orientation");
        $leaf->setText(__('Orientation'));
        $leaf->setValues(
            array(
                'L' => __('Landscape'),
                'P' => __('Portrait'),
            )
        );
        $specificOptions->addProperty($leaf);

        $leaf = new SelectPropertyItem();
        $leaf->setName("paper");
        $leaf->setText(__('Paper size'));
        $leaf->setValues($this->_getPaperSizeArray());
        $specificOptions->addProperty($leaf);

        // add the main group to the root group
        $exportSpecificOptions->addProperty($specificOptions);

        // set the options for the schema export plugin property item
        $schemaPluginProperties->setOptions($exportSpecificOptions);
        $this->properties = $schemaPluginProperties;
    }

    /**
     * Returns the array of paper sizes
     *
     * @return array array of paper sizes
     */
    private function _getPaperSizeArray()
    {
        $ret = array();
        foreach ($GLOBALS['cfg']['PDFPageSizes'] as $val) {
            $ret[$val] = $val;
        }

        return $ret;
    }

    /**
     * Exports the schema into DIA format.
     *
     * @param string $db database name
     *
     * @return bool Whether it succeeded
     */
    public function exportSchema($db)
    {
        $export = new DiaRelationSchema($db);
        $export->showOutput();
    }
}
