<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Class for exporting CSV dumps of tables for excel
 *
 * @package    PhpMyAdmin-Export
 * @subpackage CSV-Excel
 */
namespace PMA\libraries\plugins\export;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\properties\plugins\ExportPluginProperties;
use PMA\libraries\properties\options\items\HiddenPropertyItem;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\properties\options\items\SelectPropertyItem;
use PMA\libraries\properties\options\items\TextPropertyItem;

/**
 * Handles the export for the CSV-Excel format
 *
 * @package    PhpMyAdmin-Export
 * @subpackage CSV-Excel
 */
class ExportExcel extends ExportCsv
{
    /**
     * Sets the export CSV for Excel properties
     *
     * @return void
     */
    protected function setProperties()
    {
        $exportPluginProperties = new ExportPluginProperties();
        $exportPluginProperties->setText('CSV for MS Excel');
        $exportPluginProperties->setExtension('csv');
        $exportPluginProperties->setMimeType('text/comma-separated-values');
        $exportPluginProperties->setOptionsText(__('Options'));

        // create the root group that will be the options field for
        // $exportPluginProperties
        // this will be shown as "Format specific options"
        $exportSpecificOptions = new OptionsPropertyRootGroup();
        $exportSpecificOptions->setName("Format Specific Options");

        // general options main group
        $generalOptions = new OptionsPropertyMainGroup();
        $generalOptions->setName("general_opts");
        // create primary items and add them to the group
        $leaf = new TextPropertyItem();
        $leaf->setName('null');
        $leaf->setText(__('Replace NULL with:'));
        $generalOptions->addProperty($leaf);
        $leaf = new BoolPropertyItem();
        $leaf->setName('removeCRLF');
        $leaf->setText(
            __('Remove carriage return/line feed characters within columns')
        );
        $generalOptions->addProperty($leaf);
        $leaf = new BoolPropertyItem();
        $leaf->setName('columns');
        $leaf->setText(__('Put columns names in the first row'));
        $generalOptions->addProperty($leaf);
        $leaf = new SelectPropertyItem();
        $leaf->setName('edition');
        $leaf->setValues(
            array(
                'win'           => 'Windows',
                'mac_excel2003' => 'Excel 2003 / Macintosh',
                'mac_excel2008' => 'Excel 2008 / Macintosh',
            )
        );
        $leaf->setText(__('Excel edition:'));
        $generalOptions->addProperty($leaf);
        $leaf = new HiddenPropertyItem();
        $leaf->setName('structure_or_data');
        $generalOptions->addProperty($leaf);
        // add the main group to the root group
        $exportSpecificOptions->addProperty($generalOptions);

        // set the options for the export plugin property item
        $exportPluginProperties->setOptions($exportSpecificOptions);
        $this->properties = $exportPluginProperties;
    }
}
