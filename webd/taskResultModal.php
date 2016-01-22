<?php
/**
 * (c) 2016 , Eisen Team <alice.ferrazzi@gmail.com>
 *
 * This file is part of Eisen
 *
 * Eisen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Eisen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Eisen.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

$task_id = $_POST['task_id'];
$module = $_POST['module'];
$command = $_POST['command'];
$return = [$task_id, $module, $command];

echo json_encode([
   'return' => $return
]);
