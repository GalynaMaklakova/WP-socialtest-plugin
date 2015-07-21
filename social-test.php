<?php
/*
Plugin Name: Social Test
Plugin URI: http://soon.to.be.added
Description: Create tests/quizzes and let users share the test results via their social accounts with Facebook or VKontakte.
Version: 0.1
Author: Galyna Maklakova
Author URI: http://soon.to.be.added
License: GPLv2 or later

Social Test is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Social Test is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Social Test. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/
register_activation_hook(__FILE__, 'socialtest_set_options');
register_deactivation_hook(__FILE__, 'socialtest_unset_options');
