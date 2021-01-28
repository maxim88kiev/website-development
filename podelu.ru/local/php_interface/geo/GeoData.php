<?php
    namespace luckyproject\geo;

    /**
     * Интерфейс для получения ГЕО-данных от разных провайдеров
     */
    interface GeoData {

        /**
         * Имя региона
         * @return string
         */
        public function getRegionName();

        /**
         * Имя города
         * @return string
         */
        public function getCityName();
    }