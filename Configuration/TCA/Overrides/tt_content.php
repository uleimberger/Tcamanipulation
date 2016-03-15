<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
/**
 * enable time controlled content publishing for translated content
 */
unset($GLOBALS['TCA']['tt_content']['columns']['starttime']['l10n_display']);
unset($GLOBALS['TCA']['tt_content']['columns']['starttime']['l10n_mode']);
unset($GLOBALS['TCA']['tt_content']['columns']['endtime']['l10n_display']);
unset($GLOBALS['TCA']['tt_content']['columns']['endtime']['l10n_mode']);