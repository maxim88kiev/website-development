<?php
    namespace luckyproject\geo;

    /**
     * Класс для получения данных с сервиса SxGeo
     * @see https://sypex.net/ 
     */
    class SxGeoAdapter implements GeoData {

        /**
         * IP Адрес пользователя
         * @var string
         */
        protected $ip;

        /**
         * Кодировка по-умолчанию
         * @var string
         */
        protected $defaultEncoding;

        /**
         * КЛасс для работы с SxGeo
         * @var \SxGeo
         */
        protected $sxGeo;

        /**
         * Полная информация о местоположении пользователя
         * @var array
         */
        protected $full;

        /**
         * Конструктор
         * @param string $ip IP адрес пользователя
         */
        public function __construct($ip) {
            $this->defaultEncoding = mb_internal_encoding();
            $this->ip = $ip;

            mb_internal_encoding("8bit");

            $this->sxGeo = new \SxGeo(PATH_TO_SXGEO_DAT, SXGEO_BATCH | SXGEO_MEMORY);
            $this->full = $this->sxGeo->getCityFull($this->ip);
        }

        /**
         * Деструктор
         */
        public function __destruct() {
            mb_internal_encoding($this->defaultEncoding);
            unset($this->sxGeo);
        }

        public function getRegionName() {
            return (isset($this->full['region']['name_ru']) AND !empty($this->full['region']['name_ru'])) ? $this->full['region']['name_ru'] : '';
        }

        public function getCityName() {
            return (isset($this->full['city']['name_ru']) AND !empty($this->full['city']['name_ru'])) ? $this->full['city']['name_ru'] : '';
        }
    }