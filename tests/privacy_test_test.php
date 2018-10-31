<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * File containing tests for privacy_test.
 *
 * @package    report_completionoverview
 * @copyright  2017 Jim Harris <jim.harris@twoscope.com>
 * @author     Renaat Debleu <info@eWallah.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later */

defined('MOODLE_INTERNAL') || die();

/**
 * The privacy_test test class.
 *
 * @package    report_completionoverview
 * @copyright  2017 Jim Harris <jim.harris@twoscope.com>
 * @author     Renaat Debleu <info@eWallah.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later */
class report_completionoverview_privacy_test_testcase extends advanced_testcase {

    /**
     * Test privacy.
     */
    public function test_privacy() {
        $privacy = new report_completionoverview\privacy\provider();
        $this->assertEquals('privacy:metadata', $privacy->get_reason());
    }
}
