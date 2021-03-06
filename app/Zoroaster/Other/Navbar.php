<?php

    namespace App\Zoroaster\Other;

    use KarimQaderi\Zoroaster\Abstracts\NavbarAbstract;

    class Navbar extends NavbarAbstract
    {
        /**
         * Navbar چپ سمت
         *
         * @return array
         */
        public static function left()
        {
            return [
                view('Zoroaster::partials.navbar-user') ,
            ];
        }

        /**
         * Navbar وسط سمت
         *
         * @return array
         */
        public static function Center()
        {
            return [
                'به پنل مدریت فروشگاه رادیگال خوش آمدید'
            ];
        }

        /**
         * Navbar  راست سمت
         *
         * @return array
         */
        public static function Right()
        {
            return [


            ];
        }
    }