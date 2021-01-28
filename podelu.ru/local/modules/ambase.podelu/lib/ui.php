<?php

namespace AMBase\Podelu;

class Ui
{
    public function __construct()
    {
    }

    public static function isShowBreadcrumbs()
    {
        $showPages = [
            '/article/index.php',
            '/tag/index.php'
        ];

        if (in_array($_SERVER['SCRIPT_NAME'], $showPages)) {
            return true;
        }

        if (in_array($_SERVER['REAL_FILE_PATH'], $showPages)) {
            return true;
        }

        $arCurPage = explode('/', $_SERVER['REQUEST_URI']);
        if ($arCurPage[1] === 'authors') {
            return true;
        }

        return false;
    }

    public static function getNoImage($width=256)
    {
        $height = $width * 192/256;

        return '
            <svg width="'.$width.'px" height="'.$height.'px" viewBox="0 0 256 192" version="1.1">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="no-image-256" sketch:type="MSLayerGroup" fill="#BCBCBB">
                        <g id="icon" sketch:type="MSShapeGroup">
                            <path d="M0,0 L0,192 L256,192 L256,0 L0,0 L0,0 L0,0 L0,0 Z M232,168 L24.002,168 L24.002,24 L232,24 L232,168 L232,168 L232,168 L232,168 Z M232,168" id="Shape"></path>
                            <circle d="M158.399,86.002 C169.444143,86.002 178.398,77.0481433 178.398,66.003 C178.398,54.9578567 169.444143,46.004 158.399,46.004 C147.353857,46.004 138.4,54.9578567 138.4,66.003 C138.4,77.0481433 147.353857,86.002 158.399,86.002 Z M158.399,86.002" id="Oval" cx="158.399" cy="66.003" r="19.999"></circle>
                            <path d="M107.148,56 L158.602,122.945 L179.246,94.359 L216,152 L40.002,152 L107.148,56 Z M107.148,56" id="Shape"></path>
                        </g>
                    </g>
                </g>
            </svg>';
    }
}