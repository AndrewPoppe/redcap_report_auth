<?php

namespace YaleREDCap\ReportAuth;

use ExternalModules\AbstractExternalModule;

class ReportAuth extends AbstractExternalModule
{
    function redcap_every_page_top($project_id)
    {
        $report_id = filter_input(INPUT_GET, "__report", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if (empty($report_id)) {
            return;
        }



        echo $project_id;
    }
}
