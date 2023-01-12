<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Base;

    /**
     *
     */
    enum RouterEngineProtocol
    {
        case HTTP;

        case HTTPS;

        case FTP;

        case SFTP;

        case Unknown;
    }
?>